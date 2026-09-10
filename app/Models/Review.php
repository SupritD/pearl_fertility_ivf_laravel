<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'patient_name',
        'review_text',
        'rating',
        'image',
        'is_published',
    ];
}
