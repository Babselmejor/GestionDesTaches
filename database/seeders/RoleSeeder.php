<?php

namespace Database\Seeders;

use App\Models\Role; // Assurez-vous que le modèle Role est correctement importé
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'admin',
        ]);

        Role::create([
            'name' => 'create',
        ]);

        Role::create([
            'name' => 'users',
        ]);
    }
}
