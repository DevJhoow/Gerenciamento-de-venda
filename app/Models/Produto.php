<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'nome',
        'valor'
    ];

    // metodo filtro de busca 
    public function getProdutosPesquisarIndex(string $presquisar = '')
    {
        return $this->when($presquisar, function ($query, $pesquisar) {
            $query->where('nome', 'LIKE', "$pesquisar%");
        })->get();
    }
}
