<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'endereco',
        'logradouro',
        'cep',
        'bairro',
    ];

    // filtrar produtos pelo nome 
    public function getClientesPesquisarIndex(string $pesquisar = '')
    {
        return $this->when($pesquisar, function ($query, $pesquisar) {
            $query->where('nome', 'LIKE', "$pesquisar%");
        })->get();
    }
}

    
       
