<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public $timestamps = false;
    protected $fillable = ['jenis_kategori'];

    public function barang(){
        return $this->hasMany(barang::class);
    }
}
