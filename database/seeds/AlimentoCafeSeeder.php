<?php

use Illuminate\Database\Seeder;
use App\Model\AlimentoModel;

class AlimentoCafeSeeder extends Seeder {
    public function run() {
        AlimentoModel::create([
            'nome'     => 'Água de coco verde',
            'porcao'   => '1 copo de 240 ml',
            'calorias' => 62,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Café com açúcar',
            'porcao'   => '1 xícara de 50 ml',
            'calorias' => 33,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Café sem açúcar',
            'porcao'   => '1 xícara de 40 ml',
            'calorias' => 3,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Caldo de cana',
            'porcao'   => '1 copo de 240 ml',
            'calorias' => 202,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Biscoito de manteiga',
            'porcao'   => '1 porção (100g)',
            'calorias' => 500,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Cream Cracker',
            'porcao'   => '5 Unidades',
            'calorias' => 155,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Bolacha Maria',
            'porcao'   => '5 Unidades',
            'calorias' => 125,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Waffer chocolate',
            'porcao'   => '5 unidade2',
            'calorias' => 205,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Amendoim c/ chocolate',
            'porcao'   => '1 colher de sopa (40g)',
            'calorias' => 120,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Pão francês',
            'porcao'   => '1 unidade (50g)',
            'calorias' => 135,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Pão de Forma Tradicional',
            'porcao'   => '1 fatia',
            'calorias' => 74,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Pão de Queijo',
            'porcao'   => '1 Unidade (20g)',
            'calorias' => 68,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Pão de hambúrguer',
            'porcao'   => '1 unidade (100g)',
            'calorias' => 278,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Baguete',
            'porcao'   => '1 fatia grossa',
            'calorias' => 70,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Achocolatado Leco',
            'porcao'   => '1 copo (200ml)',
            'calorias' => 194,
            'tipo'     => 1
        ]);

        AlimentoModel::create([
            'nome'     => 'Omeletes',
            'porcao'   => '1 porção (100g)',
            'calorias' => 170,
            'tipo'     => 1
        ]);
    }
}