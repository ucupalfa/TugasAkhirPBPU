<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'buku_id';
    use HasFactory;

    // public function kategoris(){
    //     return $this->belongsTo('App\Models\kategori', 'kategori_id');
    // }

    public function transaksis(){
        return $this->hasOne('App\Models\transaksi');
    }

    public function keranjangs(){
        return $this->hasOne('App\Models\keranjang');
    }
}
