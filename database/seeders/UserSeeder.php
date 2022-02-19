<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'admin',
            'display_name' => 'izin admin',
        ]);

        $pengguna = Role::create([
            'name' => 'pengguna',
            'display_name' => 'izin pengguna',
        ]);

        $kasir = Role::create([
            'name' => 'kasir',
            'display_name' => 'izin kasir',
        ]);

        $UserAdmin = new User();
        $UserAdmin->name = 'hasanudin';
        $UserAdmin->email = 'admin@gmail.com';
        $UserAdmin->password = Hash::make('12345678');
        $UserAdmin->save();
        $UserAdmin->attachRole($admin);

        $UserPengguna = new User();
        $UserPengguna->name = 'hasan';
        $UserPengguna->email = 'hasanudin@gmail.com';
        $UserPengguna->password = Hash::make('12345678');
        $UserPengguna->save();
        $UserPengguna->attachRole($pengguna);

        $UserKasir = new User();
        $UserKasir->name = 'udin';
        $UserKasir->email = 'udin@gmail.com';
        $UserKasir->password = Hash::maKe('12345678');
        $UserKasir->save();
        $UserKasir->attachRole($kasir);

        $UserKasirSatu = new User();
        $UserKasirSatu->name = 'abraham';
        $UserKasirSatu->email = 'abraham@gmail.com';
        $UserKasirSatu->password = Hash::maKe('12345678');
        $UserKasirSatu->save();
        $UserKasirSatu->attachRole($kasir);
    }
}
