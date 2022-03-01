<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;

class transaksi extends Model
{
    use HasFactory;

    protected $visible  = ['id', 'kode_transaksi', 'nama_pelanggan', 'jenis_transaksi', 'tanggal_transaksi'];
    protected $fillable = ['id',  'kode_transaksi', 'jenis_transaksi', 'tanggal_transaksi'];

    public function beli()
    {

        return $this->hasMany('App\Models\beli', 'kode_transaksi');

    }



}




