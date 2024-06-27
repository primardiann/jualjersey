<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $fillable = ['category', 'stock', 'price'];

    public function concert()
    {
        return $this->belongsTo(Concert::class);
    }

    Public function decreaseStock(int $quantity)
    {
        if ($this->stock >= $quantity) {
            $this->stock -= $quantity;
            return $this->save();
        }

        return false;
    }

    public function increaseStock(int $quantity)
    {
        $this->stock += $quantity;
        return $this->save();
    }

    public function getFormattedPrice()
    {
        return number_format($this->price, 2);
    }

    public function isAvailable()
    {
        return $this->stock > 0;
    }

}
