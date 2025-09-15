<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    public function products()
    {
        return $this->hasMany(OrderItem::class); // biasanya ada tabel pivot order_items
    }

    // Relasi ke perusahaan
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id');
    }

    // Relasi ke invoice
    public function invoice()
    {
        return $this->hasOne(Invoice::class, 'order_id');
    }
}
