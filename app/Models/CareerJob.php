<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CareerJob extends Model
{
    protected $fillable = [
        'title',
        'position',
        'end_date',
        'description',
        'status'
    ];
}
