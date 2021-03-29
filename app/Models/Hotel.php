<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'localizacao',
        'descricao',
        'imagem'
    ];
    public function rooms(){
        return $this->hasMany('App\Models\Room');
    }
}
