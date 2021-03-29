<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservation;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $reservations = [

            [
                'user_id' => '1',
                'room_id' => 1,
                'numero_convidados' => 4,
                'chegada' => '2021-03-21',
                'partida' => '2021-03-28'
            ],

            [
                'user_id' =>'1',
                'room_id' => 2,
                'numero_convidados' => 1,
                'chegada' => '2021-03-22',
                'partida' => '2021-03-29'
            ]
        ];
        foreach ($reservations as $reservation) {
            Reservation::create(array(
                'user_id' => $reservation['user_id'],
                'room_id' => $reservation['room_id'],
                'numero_convidados' => $reservation['numero_convidados'],
                'chegada' => $reservation['chegada'],
                'partida' => $reservation['partida']
            ));
        }
    }
}
