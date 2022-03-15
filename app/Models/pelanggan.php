<?php

namespace App\Models;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    use HasFactory;

    protected $visible = ['id',  'nama_pelanggan', 'jumlah_bayar', 'alamat'];
    protected $fillable = [ 'id',  'nama_pelanggan', 'jumlah_bayar', 'alamat'];
    public $timestamps = true;



    public function beli()
    {

        return $this->hasMany('App\Models\beli', 'kode_pelanggan');

    }

}
