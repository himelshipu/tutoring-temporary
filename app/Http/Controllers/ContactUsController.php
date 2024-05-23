<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ContactUsNotification;
use App\User;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::paginate(10);;
        return view('admin.connections.contact-us',compact('contacts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|max:100',
            'email'    => 'required|max:100|email',
            'phone'    => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11',
            'subject'  => 'required|max:255',
            'message'  => 'required|max:1000',
        ]);

        ContactUs::create($request->all());


        Notification::send(User::whereAdmin(1)->get(), new ContactUsNotification($request->all()));

        return redirect()->back()->with('success','Your message is send successfully');
    }

    public function show(ContactUs $contactUs)
    {

    }

    public function destroy(ContactUs $contactUs)
    {
        $contactUs->delete();
        return redirect()
            ->back()
            ->withSuccess('Data deleted successfully');
    }

}
