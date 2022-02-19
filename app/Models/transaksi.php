<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RealRashid\SweetAlert\Facades\Alert;

class transaksi extends Model
{
    use HasFactory;

    protected $visible  = ['id', 'kode_transaksi', 'nama_pelanggan', 'jenis_transaksi', 'tanggal_transaksi'];
    protected $fillable = ['id', 'kode_transaksi', 'nama_pelanggan', 'jenis_transaksi', 'tanggal_transaksi'];

    public function transaksi()
    {

        return $this->hasMany('App\Models\transaksi', 'kode_transaksi');

    }


    public static function boot()
    {
        parent::boot();
        self::deleting(function($beli){
            if($beli->transaksi->count() > 0){
                Alert::error('Gagal!','Data tidak bisa dihapus');
                return false;
            }
        });
    }
}




