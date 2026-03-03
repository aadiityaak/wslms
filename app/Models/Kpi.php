<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kpi extends Model
{
    protected $fillable = ['user_id', 'metric', 'value', 'target', 'period'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
