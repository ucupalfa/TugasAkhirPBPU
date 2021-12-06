<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    use HasFactory;

    public function mobils(){
        return $this->hasMany('App\Models\mobil');
    }
}
