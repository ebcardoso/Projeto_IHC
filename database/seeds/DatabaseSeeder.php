<?php

use Illuminate\Database\Seeder;
/*use database\seeds\AlimentoAlmocoSeeder;
use database\seeds\AlimentoCafeSeeder;
use database\seeds\AlimentoJantaSeeder;*/

use App\Model\AlimentoModel;

class DatabaseSeeder extends Seeder {
    public function run() {
        /*$this->call(AlimentoCafeSeeder::class);
        $this->call(AlimentoAlmocoSeeder::class);
        $this->call(AlimentoJantaSeeder::class);*/

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

        AlimentoModel::create([
            'nome'     => 'Água de coco verde',
            'porcao'   => '1 copo de 240 ml',
            'calorias' => 62,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Café com açúcar',
            'porcao'   => '1 xícara de 50 ml',
            'calorias' => 33,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Café sem açúcar',
            'porcao'   => '1 xícara de 40 ml',
            'calorias' => 3,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Caldo de cana',
            'porcao'   => '1 copo de 240 ml',
            'calorias' => 202,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Biscoito de manteiga',
            'porcao'   => '1 porção (100g)',
            'calorias' => 500,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Cream Cracker',
            'porcao'   => '5 Unidades',
            'calorias' => 155,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Bolacha Maria',
            'porcao'   => '5 Unidades',
            'calorias' => 125,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Waffer chocolate',
            'porcao'   => '5 unidade2',
            'calorias' => 205,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Amendoim c/ chocolate',
            'porcao'   => '1 colher de sopa (40g)',
            'calorias' => 120,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Pão francês',
            'porcao'   => '1 unidade (50g)',
            'calorias' => 135,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Pão de Forma Tradicional',
            'porcao'   => '1 fatia',
            'calorias' => 74,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Pão de Queijo',
            'porcao'   => '1 Unidade (20g)',
            'calorias' => 68,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Pão de hambúrguer',
            'porcao'   => '1 unidade (100g)',
            'calorias' => 278,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Baguete',
            'porcao'   => '1 fatia grossa',
            'calorias' => 70,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Achocolatado Leco',
            'porcao'   => '1 copo (200ml)',
            'calorias' => 194,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Omeletes',
            'porcao'   => '1 porção (100g)',
            'calorias' => 170,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Cachorro-quente com maionese e molho vinagrete',
            'porcao'   => '1 unidade',
            'calorias' => 510,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Cachorro-quente com ketchup',
            'porcao'   => '1 unidade',
            'calorias' => 624,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Cachorro-quente com mostarda',
            'porcao'   => '1 unidade',
            'calorias' => 314,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Cachorro-quente com ketchup e mostarda',
            'porcao'   => '1 unidade',
            'calorias' => 330,
            'tipo'     => 3
        ]);

        AlimentoModel::create([
            'nome'     => 'Bife à parmegiana',
            'porcao'   => '1 unbifeidade',
            'calorias' => 485,
            'tipo'     => 3
        ]);
    }
}