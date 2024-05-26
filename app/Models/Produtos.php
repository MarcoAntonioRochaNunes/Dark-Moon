<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'id',
        'foto',
        'nome',
        'marca',
        'categoria',
        'estrelas',
        'valor',
        'descricao',
        'oferta',
        'tipo',
        'tamanho_pp',
        'tamanho_p',
        'tamanho_m',
        'tamanho_g',
        'tamanho_gg',

    ];
}
