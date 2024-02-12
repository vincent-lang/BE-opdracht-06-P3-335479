<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Allergeen extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'Omschrijving',
    ];

    public function productPerAllergeens(): HasMany
    {
        return $this->hasMany(productPerAllergeen::class);
    }
}
