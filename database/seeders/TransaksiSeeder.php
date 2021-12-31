<?php

namespace Database\Seeders;

use App\Models\Transaksi;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = transaksi::create(['id' => '001', 'total_harga' => '4000'] );
        $transaksi1 = transaksi::create(['id' => '002', 'total_harga' => '5000'] );

        



    }
}
