<?php

namespace App\Models;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;

    protected $visible = [  'kode_produk', 'nama_produk', 'jenis_produk', 'stock', 'harga_barang' ];
    protected $fillable = [   'kode_produk', 'nama_produk', 'jenis_produk', 'stock', 'harga_barang'];
    public $timestamps = true;

    public function beli()
    {

        return $this->hasMany('App\Models\beli', 'id_produk');

    }
    // public static function boot()
    // {
    //     parent::boot();
    //     self::deleting(function($beli){
    //         if($beli->produk->count() > 0){
    //             Alert::error('Gagal!','Data tidak bisa dihapus');
    //             return false;
    //         }
    //     });
    // }


}
