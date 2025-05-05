<?php

namespace App\Http\Controllers;
use App\Http\Requests\FormRequestProduto;
use App\Models\Componentes;
use Illuminate\Http\Request;
use App\Models\Produto;
use Brian2694\Toastr\Facades\Toastr;
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

    public function cadastrarProduto(FormRequestProduto $request)
    {
        if ($request->method() == "POST") {
            //cria, posta e redireciona para pagina produto.index 
            $data = $request->all();
            $componentes = new Componentes();
            
            $data['valor'] = $componentes->formatacaoMascaraDinheiroDecimal($data['valor']);
            Produto::create($data);

            Toastr::success('Inserido com sucesso!');

            return redirect()->route('produto.index');
        }
        //get na pagina criar produtos
        return view('pages.produtos.create');
    }

    public function atualizarProduto(FormRequestProduto $request, $id)
    {
        $produto = Produto::findOrFail($id); // já retorna 404 se o produto não for encontrado
    
        if ($request->isMethod('put')) {
            $dados = $request->validated(); // garante só os dados validos do FormRequestProduto
    
            $dados['valor'] = (new Componentes())->formatacaoMascaraDinheiroDecimal($dados['valor']);
            $produto->update($dados);
    
            Toastr::success('Editado com sucesso!');
            return redirect()->route('produto.index');
        }
    
        return view('pages.produtos.atualizar', compact('produto'));
    }
    
    public function delete(Request $request)
    {
        Produto::findOrFail($request->id)->delete();
    
        return response()->json(['success' => true]);
    }
    
}
