<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use App\Notifications\TalentAcquisitionNotification;

class MessageController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'type'    => 'required|max:100',
            'name'    => 'required|max:100',
            'phone'   => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:11|max:11',
            'email'   => 'required|email|max:50',
            'subject' => 'required|max:255',
            'message' => 'required|max:2000',
            'budget'  => 'required|max:100'
        ]);

       Message::create($request->all());
       Notification::send(User::whereAdmin(1)->get(), new TalentAcquisitionNotification($request->all()));
       return redirect()->back()->with('success','Your message is send successfully');
    }
}
