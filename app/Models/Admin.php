<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Authenticatable
{
    use HasFactory;

    protected $fillable = ['gmail', 'password'];

    // You may need to define hidden fields for password and remember token
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
