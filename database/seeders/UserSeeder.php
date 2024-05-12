<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Import de la classe Hash
use App\Models\User; // Import de la classe User

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('password')
        ]);

        $create = User::create([
            'name' => 'create',
            'email' => 'create@create.com',
            'password' => Hash::make('password')
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('password')
        ]);

        $admin->roles()->attach([1,2]);
        $create->roles()->attach([2]);
        $user->roles()->attach([3]);
    }
}
