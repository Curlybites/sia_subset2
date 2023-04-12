<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Classes;

class Professor extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'fname',
        'lname',
        'email',
        'gender',
        'password', 
    ];

  



}
