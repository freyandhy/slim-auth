<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Just write if name table is different
    // protected $table = 'users';

    protected $fillable = [
        'email',
        'name',
        'password'
    ];
}