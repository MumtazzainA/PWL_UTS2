<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table="product"; 
    protected $primaryKey ='id';
    protected $fillable=[
        'Kode_Barang',
        'Nama_Barang',
        'Kategori_Barang',
        'Harga_Barang',
        'Jumlah_Barang'
    ];
}