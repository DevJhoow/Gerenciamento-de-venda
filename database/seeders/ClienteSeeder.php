<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create(
            [
                'nome' => 'jonathan luis',
                'email' => 'jonas@gmail.com',
                'endereco' => 'Rua do zeca',
                'logradouro' => 'Rua zeca',
                'cep' => '130602559',
                'bairro' => 'Vila Uniao'
            ]
        );

        Cliente::create(
            [
                'nome' => 'teste luis',
                'email' => 'jonas@gmail.com',
                'endereco' => 'Rua do zeca',
                'logradouro' => 'Rua zeca',
                'cep' => '130602559',
                'bairro' => 'Vila Uniao'
            ]
        );
    }
}
