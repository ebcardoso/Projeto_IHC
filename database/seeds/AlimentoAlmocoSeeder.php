<?php

use Illuminate\Database\Seeder;
use App\Model\AlimentoModel;

class AlimentoAlmocoSeeder extends Seeder {
    public function run() {
        AlimentoModel::create([
            'nome'     => 'Aguardente',
            'porcao'   => '1/2 copo - 120 ml',
            'calorias' => 277,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Coca-Cola',
            'porcao'   => '1 lata de 350 ml',
            'calorias' => 137,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Coca-Cola Light',
            'porcao'   => '1 lata de 350 ',
            'calorias' => 2,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Guaraná diet',
            'porcao'   => '1 lata de 350 ml',
            'calorias' => 4,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Suco de abacaxi natural',
            'porcao'   => '1 copo de 240 ml',
            'calorias' => 100,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Suco de Maçã Natural',
            'porcao'   => '1 copo de 240 ml',
            'calorias' => 154,
            'tipo'     => 2 
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Vinho tinto seco',
            'porcao'   => '1 taça de 125 ml',
            'calorias' => 107,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Antecoxa de frango assada',
            'porcao'   => '2 unidades (100g)',
            'calorias' => 109,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Alcatra assada',
            'porcao'   => '2 fatias (150g)',
            'calorias' => 301,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Baby beef',
            'porcao'   => '1 unidade (100g)',
            'calorias' => 120,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Bacon frito',
            'porcao'   => '2 cubos (30g)',
            'calorias' => 198,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Fígado de boi frito',
            'porcao'   => '1 fatia (100g)',
            'calorias' => 210,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Filé mignon',
            'porcao'   => '1 fatia (100g)',
            'calorias' => 140,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Leitão',
            'porcao'   => '2 pedaços (170g)',
            'calorias' => 308,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Picanha',
            'porcao'   => '1 fatia (100g)',
            'calorias' => 287,
            'tipo'     => 2
        ]);
        
        AlimentoModel::create([
            'nome'     => 'Lingüiça de frango',
            'porcao'   => '1 porção (100g)',
            'calorias' => 166,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Arroz-doce',
            'porcao'   => '1 porção (100g)',
            'calorias' => 164,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Arroz branco cozido',
            'porcao'   => '1 colher de sopa (25g)',
            'calorias' => 41,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Arroz integral cozido',
            'porcao'   => '1 colher de sopa (20g)',
            'calorias' => 22,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Feijão-branco cozido',
            'porcao'   => '1 colher de sopa (20g)',
            'calorias' => 24,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Feijão cozido e desidratado',
            'porcao'   => '1 colher de sopa (20g)',
            'calorias' => 78,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Feijão-preto cozido',
            'porcao'   => '1 colher de sopa (20g)',
            'calorias' => 14,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Mandioca frita',
            'porcao'   => '1 pires de chá (100g)',
            'calorias' => 352,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Panqueca',
            'porcao'   => '1 unidade (30g)',
            'calorias' => 60,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Farofa',
            'porcao'   => '1 colher de sopa (20g)',
            'calorias' => 169,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Estrogonofe',
            'porcao'   => '1 Concha',
            'calorias' => 332,
            'tipo'     => 2
        ]);

        AlimentoModel::create([
            'nome'     => 'Arroz com feijão',
            'porcao'   => '2 colheres de sopa (40g)',
            'calorias' => 75,
            'tipo'     => 2
        ]);
    }
}