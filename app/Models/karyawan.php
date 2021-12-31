<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $visible = ['id_karyawan', 'nama_karyawan', 'alamat', 'nik', 'no_telp'];
    protected $fillable = ['id_karyawan', 'nama_karyawan', 'alamat', 'nik', 'no_telp'];
    public $timestamps = true;
}
