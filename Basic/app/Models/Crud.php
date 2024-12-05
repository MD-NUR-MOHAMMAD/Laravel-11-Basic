<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    use HasFactory;

    // Scopes code is mine is not good but it the way to do it
    public function scopeComplete($query)
    {
        return $query->where('name', '<', 10);
    }
    public function scopeInComplete($query)
    {
        return $query->where('name', '>', 0);
    }
}
