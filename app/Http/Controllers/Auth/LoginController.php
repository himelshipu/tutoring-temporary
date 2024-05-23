<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware(['guest','notification'])->except('logout');
    }

    /**
     * Show the application's login form. Overrided
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view(getTemplate() . '.auth.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        $remember = $request->has('remember') && $request->remember == true ? true : false;


       $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
       if (Auth::attempt([$fieldType => $request->username, 'password' => $request->password], $remember))
       {
           if(auth()->user()->session_ip == 1)
           {
            auth()->logout();
            return redirect()->back()->with('warning','Your account is curently active another device');
           }
           else
            return $this->afterLogged($request);
       }
        else
           return redirect()->back()->withInput()->with('error', trans('main.incorrect_login'));
    }

    public function username()
    {
        $email_regex = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i";

        if (empty($this->username)) {
            $this->username = 'username';
            if (preg_match($email_regex, request('username', null))) {
                $this->username = 'email';
            }
        }
        return $this->username;
    }

    // protected function attemptLogin(Request $request)
    // {

    //     $credentials = [
    //         $this->username() => $request->get('username'),
    //         'password' => $request->get('password')
    //     ];

    //     $remember = false;
    //     if (!empty($request->get('remember')) and $request->get('remember') == true) {
    //         $remember = true;
    //     }

    //     return $this->guard()->attempt($credentials, $remember);
    // }

    public function afterLogged(Request $request)
    {
        $user = auth()->user();
        $userBlock = userMeta($user->id, 'blockDate');
        $user->last_view = time();
        $user->updated_at = time();
        $user->session_ip = 1;
        $user->save();

        Event::create([
            'user_id' => $user->id,
            'type' => 'Login Page',
            'ip' => $request->ip()
        ]);

        if ($user->isAdmin())
            return redirect('/admin');
        else
        {
            if ($request->session()->has('redirect'))
                return redirect($request->session()->has('redirect'));
             else
                return redirect('/user/dashboard');
        }

    }

    public function logout(Request $request) {
        auth()->user()->update(['session_ip' => 0]);
        Auth::logout();
        return redirect()->route('homepage');
    }
}
