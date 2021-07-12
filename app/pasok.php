<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasok extends Model
{
    public $timestamps = false;
    protected $dates = ['tgl_pasok'];
    protected $fillable = ['barang_id','jumlah','tgl_pasok'];

    public function barang(){
        return $this->belongsTo(barang::class);
    }
}
