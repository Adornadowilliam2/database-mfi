<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Artisan;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'admin',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
   
        Artisan::call('passport:keys');
        Artisan::call('passport:client --personal --no-interaction');
        Artisan::call('storage:link');

    }
}
