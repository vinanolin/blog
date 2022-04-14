<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\CelularSeeder;
use Database\Seeders\PlanoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    
    {
        $this->call([
            CelularSeeder::class,
            PlanoSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
    }
}
