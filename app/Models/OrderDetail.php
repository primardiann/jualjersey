<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $fillable = [
        'order_id', 'product_id', 'quantity', 'price', 'subtotal'
    ];

    // Relasi dengan Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
