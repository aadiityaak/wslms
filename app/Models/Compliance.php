<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compliance extends Model
{
    protected $fillable = ['name', 'description', 'valid_until', 'status'];
    
    protected $casts = [
        'valid_until' => 'date',
    ];
}
