<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Language;
use App\Models\Program;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    private $roles = [
        'Superadmin',
        'Admin',
        'Authority',
        'Manager',
        'Account',
    ];


    public function run(): void
    {
        foreach ($this->roles as $role) {
            Role::create(['name' => $role]);
        };

        $this->call([
            UserSeeder::class,
            RightSeeder::class,
        ]);
    }
}
