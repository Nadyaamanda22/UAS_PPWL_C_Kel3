<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /** 
     * Run the database seeds. 
     */
    public function run(): void
    {
        // Creating Super Admin User 
        $superAdmin = User::create([
            'name' => 'Nadya',
            'email' => 'superadmin@roles.id',
            'password' => Hash::make('1234567')
        ]);
        $superAdmin->assignRole('Super Admin');
        // Creating Admin User 
        $admin = User::create([
            'name' => 'Salasa',
            'email' => 'admin@roles.id',
            'password' => Hash::make('1234567')
        ]);
        $admin->assignRole('Siswa');
        // Creating Product Manager User 
        $siswa = User::create([
            'name' => 'Fahri',
            'email' => 'siswa@roles.id',
            'password' => Hash::make('1234567')
        ]);
        $siswa->assignRole('Guru');

        $guru = User::create([
            'name' => 'Bella',
            'email' => 'guru@roles.id',
            'password' => Hash::make('1234567')
        ]);
        $guru->assignRole('Guru');

        $guru = User::create([
            'name' => 'Melisa',
            'email' => 'guru@roles.id',
            'password' => Hash::make('1234567')
        ]);
        $siswa->assignRole('Siswa');

        $siswa = User::create([
            'name' => 'Rhagil',
            'email' => 'siswa@roles.id',
            'password' => Hash::make('1234567')
        ]);
        $siswa->assignRole('Mahasiswa');
    }
}
