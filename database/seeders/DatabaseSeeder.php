<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\App;

use App\Models\User;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        /*$this->call(UserSeeder::class);*/

        User::factory(5)->create();
    }
}
