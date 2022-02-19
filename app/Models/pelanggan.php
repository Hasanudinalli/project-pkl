<?php

namespace App\Models;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

    protected $visible = ['id', 'kode_pelanggan', 'nama_pelanggan', 'jumlah_bayar', 'alamat'];
    protected $fillable = [ 'id', 'kode_pelanggan', 'nama_pelanggan', 'jumlah_bayar', 'alamat'];
    public $timestamps = true;



    public function beli()
    {

        return $this->hasMany('App\Models\beli', 'kode_pelanggan');

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
