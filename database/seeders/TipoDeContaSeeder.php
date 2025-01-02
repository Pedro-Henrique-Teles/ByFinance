<?php

namespace Database\Seeders;

use App\Models\TipoDeConta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoDeContaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TipoDeConta::insert(
            [
                ['nome' => 'Corrente'],
                ['nome' => 'Poupança'],
                ['nome' => 'Salário'],
                ['nome' => 'Conjunta'],
                ['nome' => 'Universitária'],
                ['nome' => 'Empresarial'],
                ['nome' => 'Outro'],
            ]
            );
    }
}
