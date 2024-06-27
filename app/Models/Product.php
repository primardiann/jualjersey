<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    use HasFactory;

    /**
     * fillable
     *
     * @var array
     */
    protected $table = 'concerts';
    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'stock',
    ];
    
    
}
