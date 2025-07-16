<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero_da_venda',
        'produto_id',
        'cliente_id',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function getVendasPesquisarIndex(string $pesquisar = '')
    {
        return $this->with('produto') // carrega os dados do produto
            ->when($pesquisar, function ($query, $pesquisar) {
                $query->whereHas('produto', function ($q) use ($pesquisar) {
                    $q->where('nome', 'LIKE', "%$pesquisar%");
                });
            })
            ->join('produtos', 'vendas.produto_id', '=', 'produtos.id')
            ->orderBy('produtos.nome') // ordena alfabeticamente pelo nome do produto
            ->select('vendas.*') // importante: evita conflito de colunas
            ->get();
    }

}
