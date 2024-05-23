<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        $subscriptions = Subscription::paginate(10);;
        return view('admin.connections.subscription',compact('subscriptions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:subscriptions',
        ]);

        Subscription::create($request->all());
        return redirect()->back()->with('success','You are subscribed successfully');
    }

    public function destroy(Subscription $subscriber)
    {
        $subscriber->delete();
        return redirect()
            ->back()
            ->withSuccess('Data deleted successfully');
    }

}
