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
        'company_name',
        'buyer_name',
        'quantity',
        'due_date',
        'status',

    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function quantity():HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

}
