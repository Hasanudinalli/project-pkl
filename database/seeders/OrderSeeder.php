<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $order = order::create([ 'id_transaksi' => '654','id_karyawan' => '123', 'id_obat' => '132', 'jumlah_obat' => '3000'] );
        $order1 = order::create([ 'id_transaksi' => '655','id_karyawan' => '122', 'id_obat' => '321', 'jumlah_obat' => '4000'] );

        



    }
}
