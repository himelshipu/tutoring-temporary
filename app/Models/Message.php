<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'type',
        'name',
        'email',
        'phone',
        'subject',
        'budget',
        'message'
    ];
}
