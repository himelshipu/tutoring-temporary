<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Jobs\AccountActivationJob;
use App\Jobs\EmailVerificationJob;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    //use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['guest','notification']);
    }

    public function showRegistrationForm()
    {

        return view(getTemplate().'.auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        $this->guard()->login($user);

        ## Send Suitable Email For New User ##
        $user_register_mode = get_option('user_register_mode');
        if($user_register_mode == 'deactive')
        {
            $data = [
                'template' => get_option('user_register_active_email'),
                'recipent' => [$user->email]
            ];

            AccountActivationJob::dispatch($data);
            return redirect()->back()->with('success',trans('main.thanks_reg'));
        }
        else
        {
            $data = [
                'template'=>get_option('user_register_wellcome_email'),
                'recipent'=>[$user->email]
            ];

            AccountActivationJob::dispatch($data);
            return redirect()->back()->with('success',trans('main.active_account_alert'));
        }
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName'  => ['required', 'string', 'max:255'],
            'email'     => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'  => 'required|confirmed|min:6'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $dob = date('Y-m-d', strtotime($data['dob']));;
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $lastName = strtolower($lastName);
        $username = $firstName[0] . $lastName;

        $i = 0;

        while(User::whereUsername($username)->exists())
        {
            $i++;
            $username = $firstName[0] . $lastName . $i;
            $username = $username . rand(0,8);
            $exist = User::where('username',$username)->first();
            if ($exist){
                $username = $username . rand(9,9);
            }
        }

        $vendor = \request()->vendor == 1 ? $data['vendor'] : 0;
        $user = User::create([
            'name' => $firstName . ' '. $lastName,
            'username' =>$username,
            'first_name' =>$firstName,
            'last_name' =>$lastName,
            'email' => $data['email'],
            'dob' => $dob,
            'vendor'=>$vendor,
            'password' => Hash::make($data['password']),
            'created_at' => time(),
            'admin' => false,
            'mode' => get_option('user_register_mode', 'active'),
            'category_id' => get_option('user_default_category', 0),
            'token' => Str::random(25)
        ]);

        // EmailVerificationJob::dispatch($user);
        return $user;
    }
}
