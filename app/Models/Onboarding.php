<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Onboarding extends Model
{
    protected $fillable = ['user_id', 'status', 'start_date', 'end_date', 'notes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
