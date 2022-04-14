<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plano;

class PlanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plano::create([
            'nome'             => 'Básico',
            'descricao'        => 'Protege seu celular contra roubo, furto simples e furto qualificado!',
    
        ]);

        Plano::create([
            'nome'            => 'Completo',
            'descricao'       => 'Além de proteger seu aparelho contra roubo e furto, também protege contra danos por queda ou por líquido!',
        ]);
    }
}
