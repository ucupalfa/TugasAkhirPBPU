<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keranjang extends Model
{
    protected $table = 'keranjang';
    use HasFactory;

    public function bukus(){
        return $this->belongsTo('App\Models\buku', 'buku_id');
    }

    public function users(){
        return $this->belongsTo('App\Models\user');
    }

    public function transaksis(){
        return $this->belongsTo('App\Models\user\user_id');
    }
}
