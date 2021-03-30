<?php

namespace Database\Seeders;

use App\Models\Hotel;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $hotels = [
            [
            'nome' => 'Plaza',
            'localizacao' => 'Porto Alegre',
            'descricao' => 'Plaza São Rafael.',
            'imagem' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'nome' => 'Magestic',
                'localizacao' => 'Porto Alegre',
                'descricao' => 'Magestic quatro estrelas',
                'imagem' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'nome' => 'Shereton Porto alegre',
                'localozação' => 'Olavo Barreto Viana, 18 , Porto Alegre',
                'descricao' => '5 estrelas',
                'imagem' => 'https://placeimg.com/640/480/arch'
            ]

        ];

        foreach ($hotels as $hotel ) {
            Hotel::create(array(
                'nome' => $hotel['nome'],
                'localizacao' => $hotel['localizacao'],
                'descricao' => $hotel['descricao'],
                'imagem' => $hotel['imagem']
            ));
        }
    }
}
