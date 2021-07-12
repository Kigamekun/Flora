<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    public $timestamps = false;
    protected $dates = ['tgl_jual'];
    protected $fillable = ['user_id','barang_id','jumlah','total_harga','tgl_jual','kode'];
    public function barang(){
        return $this->belongsTo(barang::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

}
