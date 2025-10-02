<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password_hash',
        'first_name',
        'last_name',
        'date_of_birth',
        'phone_number',
        'address',
    ];
}
