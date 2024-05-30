<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /** 
     * Run the database seeds. 
     */
    public function run(): void
    {
        $permissions = [
            'create-role',
            'edit-role',
            'delete-role',
            'create-user',
            'edit-user',
            'delete-user',
            'create-kelas',
            'edit-kelas',
            'delete-kelas',
            'view-user',
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
            'delete-guru',
        ];
        // Looping and Inserting Array's Permissions into Permission Table 
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
