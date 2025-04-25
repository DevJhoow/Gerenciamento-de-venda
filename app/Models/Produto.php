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

    // filtrar produtos pelo nome 
    public function getProdutosPesquisarIndex(string $pesquisar = '')
    {
        return $this->when($pesquisar, function ($query, $pesquisar) {
            $query->where('nome', 'LIKE', "$pesquisar%");
        })->get();
    }
}
