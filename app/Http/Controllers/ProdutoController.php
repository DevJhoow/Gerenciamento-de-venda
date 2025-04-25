<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestProduto;
use Illuminate\Http\Request;
use App\Models\Produto;
use Laravel\Prompts\Prompt;

class ProdutoController extends Controller
{
    protected $produto ; 

    public function __construct(Produto $produto)
    {
        $this->produto = $produto;
    }

    public function index(Request $request)
    {
        $findProdutos = $this->produto->getProdutosPesquisarIndex($request->input('pesquisar') ?? '');

        return view('pages.produtos.paginacao', compact('findProdutos'));
    }

    public function delete(Request $request)
    {
        $id = $request->id; //atribui o id da minha requisição no id
        $buscarRegistro = Produto::find($id); // esse id é de algum objeto dessa classe 
        $buscarRegistro->delete(); // que irei deletar ele 

        return response()->json(['success' => true]);
    }

    public function cadastrarProduto(FormRequestProduto $request)
    {
        if ($request->method() == "POST") {
            $data = $request->all();
            Produto::create($data);

            return redirect()->route('produto.index');
        }

        return view('pages.produtos.create');
    }
}
