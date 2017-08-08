<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    //
    protected $table = 'Transaksi';
    protected $fillable = ['tgl_transaksi','jumlah_barang','total','barang_id','karyawan_id','pelanggan_id'];
    protected $visible = ['tgl_transaksi','jumlah_barang','total','barang_id','karyawan_id','pelanggan_id'];
    public $timestamps = true;

        public function Barangs()
    {
    	return $this->belongTo('App\Barang','App\Karyawan','App\Pelanggan');
    }
}
