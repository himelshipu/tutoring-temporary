<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVerify extends Model
{
    public $table = "user_verifies";

    /**
     * Write code on Method
     *
     * @return response()
     */
    protected $fillable = [
        'user_id',
        'token',
    ];

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
