<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = karyawan::create(['id' => '001', 'nama_karyawan' => 'usop', 'alamat' => 'cilisung', 'nik' => '002', 'no_telp' => '003'] );
        $karyawan1 = karyawan::create(['id' => '002', 'nama_karyawan' => 'usep', 'alamat' => 'cileunyi', 'nik' => '003', 'no_telp' => '004'] );

        



    }
}
