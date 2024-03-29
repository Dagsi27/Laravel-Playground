<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }

    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
