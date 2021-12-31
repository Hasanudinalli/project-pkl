<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $visible = ['id', 'total_harga'];
    protected $fillable = ['id', 'total_harga'];
    public $timestamps = true;
}
