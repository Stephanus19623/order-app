<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_id',
        'invoice_number',
    ];

    public function orderId(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
