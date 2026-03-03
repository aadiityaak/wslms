<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    protected $fillable = ['user_id', 'title', 'description', 'audit_date', 'status', 'findings'];

    protected $casts = [
        'findings' => 'array',
        'audit_date' => 'date',
    ];

    public function auditor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
