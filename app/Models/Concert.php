<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concert extends Model
{
    use HasFactory;

    protected $table = 'concerts'; // Sesuaikan dengan nama tabel di database

    protected $fillable = [
        'nama_konser',
        'tanggal',
        'gambar', // Atribut gambar
        'harga_tiket', // Atribut harga tiket
        // Tambahkan kolom lainnya yang dapat diisi di sini
    ];


}
