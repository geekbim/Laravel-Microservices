<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        for ($i=1; $i <= 20; $i++) { 
            User::insert([
                'id' => $i
            ]);
        }

        $this->call([
            // UserSeeder::class,
            ProductSeeder::class
        ]);
    }
}
