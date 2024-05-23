<?php

namespace App\Http\Controllers;

use App\Models\Message;

class TalentAcquisitionController extends Controller
{
    public function index()
    {
        $acquisitionMessages = Message::paginate(10);;
        return view('admin.connections.acquisition',compact('acquisitionMessages'));
    }

    public function show(Message $message)
    {

    }

    public function destroy(Message $message)
    {
        $message->delete();
        return redirect()
            ->back()
            ->withSuccess('Data deleted successfully');
    }
}
