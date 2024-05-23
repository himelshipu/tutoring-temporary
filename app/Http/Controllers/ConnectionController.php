<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class ConnectionController extends Controller
{
    public function subscribers()
    {
        return 'a';
    }

    public function contactMessages(){
        return 'c';
    }
    public function acquisitionReply(){
        return 's';
    }
    public function contactReply(){
        return 'cd';
    }
}
