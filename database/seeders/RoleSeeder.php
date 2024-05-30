<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /** 
     * Run the database seeds. 
     */
    public function run(): void
    {
        Role::create(['name' => 'Super Admin']);
        $admin = Role::create(['name' => 'Admin']);
        $siswa = Role::create(['name' => 'Siswa']);
        $guru = Role::create(['name' => 'Guru']);
        $admin->givePermissionTo([
            'create-user',
            'edit-user',
            'delete-user',
            'create-kelas',
            'edit-kelas',
            'delete-kelas',
            'view-kelas',
            'view-pelajaran',
            'view-siswa',
            'view-guru',
            'create-pelajaran',
            'edit-pelajaran',
            'delete-pelajaran',
            'create-siswa',
            'edit-siswa',
            'delete-siswa',
            'create-guru',
            'edit-guru',
            'delete-guru'
        ]);
        $guru->givePermissionTo([
            'view-user',
            'view-kelas',
            'view-siswa',
            'view-pelajaran'
        ]);
        $siswa->givePermissionTo([
            'view-kelas',
            'view-pelajaran'
        ]);
    }
}
