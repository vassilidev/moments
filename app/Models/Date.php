<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
    protected $fillable = [
        'title',
        'description',
        'latitude',
        'longitude',
        'date_date',
    ];

    protected $casts = [
        'date_date' => 'datetime',
    ];
}
