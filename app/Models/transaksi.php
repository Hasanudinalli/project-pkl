<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;

class transaksi extends Model
{
    use HasFactory;

    protected $fillable = [ 'kode_produk', 'nama_produk', 'harga_beli'];

    public function produk()
    {

        return $this->belongsTo('App\Models\produk','kode_produk');

    }



}




