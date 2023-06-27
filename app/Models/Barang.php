<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Barang extends Model
{
    use HasFactory;
    protected $table = 'tb_barang';
    protected $fillable = [
        'id',
        'foto',
        'nama_barang',
        'stok_barang',
        'harga_beli',
        'harga_jual'
    ];

}
