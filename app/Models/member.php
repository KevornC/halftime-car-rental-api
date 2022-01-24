<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable=[
        'fname',
        'lname',
        'gender',
        'address',
        'country',
        'trn',
        'phone',
        'email',
        'password'
    ];
}
