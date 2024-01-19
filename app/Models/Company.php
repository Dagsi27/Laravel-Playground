<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    public function user(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function invoice(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }

    public function document(): HasMany
    {
        return $this->hasMany(Document::class);
    }
}
