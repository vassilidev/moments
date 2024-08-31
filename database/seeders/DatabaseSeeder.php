<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'     => 'Vassili JOFFROY',
            'email'    => 'vassili@the-forge.agency',
            'password' => bcrypt('password'),
        ]);
    }
}
