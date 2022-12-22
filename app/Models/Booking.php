<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name', 'email','date','message','phone'
    ];
    protected $casts = [
        'date' => 'date',
    ];
}
