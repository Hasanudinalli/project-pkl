<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembeli extends Model
{
    use HasFactory;

    protected $visible = ['id','nama_pembeli', 'alamat', 'usia'];
    protected $fillable = [ 'id','nama_pembeli','alamat', 'usia'];
    public $timestamps = true;
    
}
