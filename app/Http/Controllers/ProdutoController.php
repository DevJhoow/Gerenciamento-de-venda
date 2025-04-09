<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    protected $produto ; 

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {
        $pesquisar = $request->pesquisar; // esse pesquisar vem de do form, name = 'pesquisar'
        
        $findProdutos = $this->produto->getProdutosPesquisarIndex($pesquisar ?? '');

        return view('pages.produtos.paginacao', compact('findProdutos'));
    }
}
