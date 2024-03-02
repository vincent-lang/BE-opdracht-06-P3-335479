<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Magazijn extends Model
{
    use HasFactory;

    protected $fillable = [
        'Product_id',
        'VerpakkingsEenheid',
        'AantalAanwezig',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
