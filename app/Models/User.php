<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }

    public function authorisation(): HasOne
    {
        return $this->hasOne(Authorisation::class);
    }

    public function outstandingBalanceReport(): HasMany
    {
        return $this->hasMany(OutstandingBalanceReport::class);
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
