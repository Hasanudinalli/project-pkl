<?php

namespace App\Models;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beli extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'kode_konsumen', 'kode_produk', 'kode_transaksi', 'kode_pelanggan', 'jumlah_produk', 'total_harga'];

    public $timestamps = true;

    public function produk()
    {

        return $this->belongsTo('App\Models\produk','kode_produk');
    }
    public function pelanggan()
    {

        return $this->belongsTo('App\Models\pelanggan','kode_pelanggan');
    }






    public static function boot()
    {
        parent::boot();
        self::deleting(function($beli){
            if($beli->pelanggan->count() > 0){
                Alert::error('Gagal!','Data tidak bisa dihapus');
                return false;
            }
        });
    }







}
