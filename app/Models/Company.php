<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'email',
        'contact_number',
    ];

    // Relasi: 1 perusahaan bisa punya banyak order
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
