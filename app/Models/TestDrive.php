<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TestDrive extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'car_model',
        'test_date'
    ];

}

