<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'hotel_id',
        'tipo',
        'descricao',
        'preco',
        'imagem'
    ];
    public function hotel(){
        return $this->belongsTo('App\Models\Hotel');
    }
}
