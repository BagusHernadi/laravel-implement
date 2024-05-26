<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'weight', 'status', 'created_at', 'updated_at',
    ];

    protected $hidden = [
        'created_at', 'updated_at',
    ];
}