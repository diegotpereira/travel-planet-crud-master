<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $rooms = [

            [
                'hotel_id' => 1,
                'tipo' => 'Suite de Luxo',
                'descricao' => 'Luxo Imperador',
                'preco' => 250.00,
                'imagem' => 'https://placeimg.com/640/480/arch'
            ],
            [
                'hotel_id' => 1,
                'tipo' => 'Double',
                'descricao' => 'Quarto Principal',
                'preco' => '200.00',
                'imagem' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'hotel_id' => 2,
                'tipo' => 'Suite',
                'descricao' => ' Suite presidencial',
                'preco' => 350.00,
                'imagem' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'hotel_id' => 2,
                'tipo' => 'Economy',
                'descricao' => 'Mini suite',
                'preco' => 88.99,
                'imagem' => 'https://placeimg.com/640/480/arch'
            ],

            [
                'hotel_id' => 3,
                "tipo" => 'Suite',
                'descricao' => 'Uma cama king-size ultra larga, cozinha completa',
                'preco' => '399.00',
                'imagem' => 'https://placeimg.com/640/480/arch'
            ]
        ];

        foreach ($rooms as $room) {
            Room::create(array(
                'hotel_id' => $room['hotel_id'],
                'tipo' => $room ['tipo'],
                'descricao' => $room ['descricao'],
                'preco' => $room['preco'],
                'imagem' => $room['imagem']
            ));
        }
    }
}
