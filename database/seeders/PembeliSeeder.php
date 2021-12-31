<?php

namespace Database\Seeders;

use App\Models\Pembeli;
use Illuminate\Database\Seeder;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembeli = pembeli::create([ 'id' => '001','nama_pembeli' => 'hasan', 'alamat' => 'cilisung', 'usia' => 'juin'] );
        $pembeli = pembeli::create([ 'id' => '001','nama_pembeli' => 'hasan', 'alamat' => 'cilisung', 'usia' => 'juin'] );

        



    }
}
