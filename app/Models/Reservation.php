<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'room_id',
        'numero_convidados',
        'chegada',
        'partida'
    ];

    public function room(){
        return $this->belongsTo('App\Models\Room');
    }
}
