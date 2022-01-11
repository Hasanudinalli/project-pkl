<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $visible = ['id_transaksi','id_karyawan', 'id_obat', 'jumlah_obat'];
    protected $fillable = [ 'id_transaksi','id_karyawan','id_obat', 'jumlah_obat'];
    public $timestamps = true;
}
