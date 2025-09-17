<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'order_number',
        'total',
        'due_date',
        'status',
    ];

    // Relasi ke produk (jika 1 order punya banyak produk)
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function total():HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
