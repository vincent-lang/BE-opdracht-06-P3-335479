<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Leverancier extends Model
{
    use HasFactory;

    protected $fillable = [
        'Naam',
        'ContactPersoon',
        'LeverancierNummer',
        'Mobiel',
    ];

    public function productPerLeveranciers(): HasMany
    {
        return $this->hasMany(ProductPerLeverancier::class);
    }
}
