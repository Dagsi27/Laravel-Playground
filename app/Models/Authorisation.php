<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Authorisation extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the authorisation.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}
