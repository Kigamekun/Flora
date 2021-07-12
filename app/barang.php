<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public $timestamps = false;
    protected $fillable = ['kategori_id','nama_barang','merk_barang','merk_barang','stok','harga_beli','harga_jual','gambar'];

    public function kategori(){
        return $this->belongsTo(kategori::class);
    }
    public function pasok(){
        return $this->hasMany(pasok::class);
    }
    public function penjualan(){
        return $this->hasMany(penjualan::class);
    }
    public static function getBarang($search_keywork){
        $barang = barang::all();
        if($search_keywork && !empty($search_keywork)){
            $barang->where(function($q) use ($search_keywork){
                $q->where('barang.kategori_id','like',"%{$search_keywork}%")
                ->orWhere('barang.nama_barang','like',"%{$search_keywork}%")
                ;
            });
        }
    }
}
