<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    /**
     * Get the user associated with the document.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    
    /**
     * Get the company associated with the document.
     */
    public function company(): HasOne
    {
        return $this->hasOne(Company::class);
    }
}
