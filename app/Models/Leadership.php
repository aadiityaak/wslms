<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leadership extends Model
{
    protected $table = 'leaderships';
    protected $fillable = ['title', 'description', 'type', 'date'];

    protected $casts = [
        'date' => 'date',
    ];
}
