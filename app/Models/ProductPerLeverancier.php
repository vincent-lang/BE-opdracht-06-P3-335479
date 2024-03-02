<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductPerLeverancier extends Model
{
    use HasFactory;

    protected $fillable = [
        'DatumLevering',
        'Aantal',
        'DatumEerstVolgendeLevering',
    ];

    public function leverancier(): BelongsTo
    {
        return $this->belongsTo(Leverancier::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
