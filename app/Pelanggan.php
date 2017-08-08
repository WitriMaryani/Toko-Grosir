<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    //
    protected $table = 'Pelanggan';
    protected $fillable = ['nama'];
    protected $visible = ['nama'];
    public $timestamps = true;

        public function transaksis()
    {
    	return $this->hasMany('App\Transaksi');
    }
}
