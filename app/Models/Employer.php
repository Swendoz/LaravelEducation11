<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;

class Employer extends Model
{
    use HasFactory;

    public function jobs() {
        return $this->hasMany(Job::class);
    }

    public function user(): belongsTo {
        return $this->belongsTo(User::class);
    }
}
