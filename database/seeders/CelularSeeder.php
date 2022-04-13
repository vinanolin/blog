<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Celular;

class CelularSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Celular::create([
            'nome'      => 'XIAOMI - MI 8 128GB',
            'valor'     => '2000',
    
        ]);

        Celular::create([
            'nome'      => 'XIAOMI - MI 8 64GB',
            'valor'     => '1500',

        ]);

        Celular::create([
            'nome'      => 'XIAOMI - MI 8 256GB',
            'valor'     => '2500',

        ]);

        //
    }
}
