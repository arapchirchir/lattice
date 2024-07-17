<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'admin']);

        $role = Role::create(['name' => 'user']);

        // moderator
        $role = Role::create(['name' => 'moderator']);

        $admin = User::create([
            'name' => 'Lattice Admin',
            'email' => 'admin@lattice.africa',
            'password' => bcrypt('@LaticeAdmin2024.'),
        ]);

        $admin->assignRole('admin');
    }
}
