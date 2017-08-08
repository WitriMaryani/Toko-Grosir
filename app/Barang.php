<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    protected $fillable = ['nama','stock','harga_jual','harga_beli'];

    public function transaksis()
    {
    	return $this->hasMany('App\Transaksi');
    }
}
