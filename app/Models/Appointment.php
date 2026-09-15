<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'city',
        'phone',
        'email',
        'dob',
        'slot',
        'message',
        'status',
    ];
}
