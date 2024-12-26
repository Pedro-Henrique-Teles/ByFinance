<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::insert(
            [
                ['codigo' => '1', 'nome' => 'Receita'],
                ['codigo' => '1.1', 'nome' => 'Aluguel'],
                ['codigo' => '1.2', 'nome' => 'Salário'],
                ['codigo' => '1.3', 'nome' => 'Dividendos'],
                ['codigo' => '1.4', 'nome' => 'Prêmios'],
                ['codigo' => '1.5', 'nome' => 'Venda de bens'],
                ['codigo' => '2', 'nome' => 'Alimentação'],
                ['codigo' => '2.1', 'nome' => 'Restaurante'],
                ['codigo' => '2.2', 'nome' => 'Supermercado'],
                ['codigo' => '2.3', 'nome' => 'Delivery'],
                ['codigo' => '3', 'nome' => 'Moradia'],
                ['codigo' => '3.1', 'nome' => 'Aluguel'],
                ['codigo' => '3.2', 'nome' => 'Condomínio'],
                ['codigo' => '3.3', 'nome' => 'IPTU'],
                ['codigo' => '3.4', 'nome' => 'Manutenção'],
                ['codigo' => '4', 'nome' => 'Transporte'],
                ['codigo' => '4.1', 'nome' => 'Combustível'],
                ['codigo' => '4.2', 'nome' => 'Manutenção de veículo'],
                ['codigo' => '4.3', 'nome' => 'Transporte público'],
                ['codigo' => '4.4', 'nome' => 'Aplicativos de transporte'],
                ['codigo' => '5', 'nome' => 'Saúde'],
                ['codigo' => '5.1', 'nome' => 'Consultas médicas'],
                ['codigo' => '5.2', 'nome' => 'Medicamentos'],
                ['codigo' => '5.3', 'nome' => 'Exames'],
                ['codigo' => '5.4', 'nome' => 'Plano de saúde'],
                ['codigo' => '6', 'nome' => 'Educação'],
                ['codigo' => '6.1', 'nome' => 'Mensalidade escolar'],
                ['codigo' => '6.2', 'nome' => 'Livros'],
                ['codigo' => '6.3', 'nome' => 'Cursos e treinamentos'],
                ['codigo' => '7', 'nome' => 'Lazer'],
                ['codigo' => '7.1', 'nome' => 'Cinema'],
                ['codigo' => '7.2', 'nome' => 'Viagens'],
                ['codigo' => '7.3', 'nome' => 'Shows e eventos'],
                ['codigo' => '8', 'nome' => 'Despesas pessoais'],
                ['codigo' => '8.1', 'nome' => 'Vestuário'],
                ['codigo' => '8.2', 'nome' => 'Cuidados pessoais'],
                ['codigo' => '9', 'nome' => 'Dívidas e Empréstimos'],
                ['codigo' => '9.1', 'nome' => 'Empréstimos'],
                ['codigo' => '9.2', 'nome' => 'Financiamentos'],
                ['codigo' => '10', 'nome' => 'Investimentos'],
                ['codigo' => '10.1', 'nome' => 'Ações'],
                ['codigo' => '10.2', 'nome' => 'Fundos imobiliários'],
                ['codigo' => '10.3', 'nome' => 'Criptomoedas'],
                ['codigo' => '11', 'nome' => 'Outros'],
            ]
        );
    }
}
