<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Produk extends Model
{
    use HasFactory;

    protected $fillable=['nama','stok','harga'];

    // public function category():BelongsTo
    // {
    //     return $this->belongsTo(Category::class);
    // }

    public function detiltransaksi():HasMany
    {
        return $this->hasMany(Detiltransaksi::class);
    }
}
