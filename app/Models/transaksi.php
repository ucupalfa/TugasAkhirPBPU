<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $table = 'transaksi';
    use HasFactory;

    public function bukus(){
        return $this->belongsTo('App\Models\buku', 'buku_id');
    }

    public function users(){
        return $this->belongsTo('App\Models\user', 'user_id');
    }

    public function keranjangs(){
        return $this->hasMany('App\Models\keranjang');
    }
}
