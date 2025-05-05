<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestClientes;
use App\Http\Requests\FormRequestProduto;
use App\Models\Cliente;
use App\Models\Componentes;
use Illuminate\Http\Request;
use App\Models\Produto;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Http\FormRequest;
use Laravel\Prompts\Prompt;

class ClientesController extends Controller
{
    protected $cliente ; 

    public function __construct(Cliente $cliente)
    {
        $this->cliente = $cliente;
    }

    public function index(Request $request)
    {
        $findClientes = $this->cliente->getClientesPesquisarIndex($request->input('pesquisar') ?? '');

        return view('pages.clientes.paginacao', compact('findClientes'));
    }

    public function cadastrarCliente(FormRequestClientes $request)
    {
        if ($request->method() == "POST") {
            //cria, posta e redireciona para pagina produto.index 
            $data = $request->all();
            Cliente::create($data);

            Toastr::success('Inserido com sucesso!');

            return redirect()->route('clientes.index');
        }
        //get na pagina criar produtos
        return view('pages.clientes.create');
    }

    public function atualizarCliente(FormRequestProduto $request, $id)
    {
        $produto = Cliente::findOrFail($id); // já retorna 404 se o produto não for encontrado
    
        if ($request->isMethod('put')) {
            $dados = $request->validated(); // garante só os dados validos do FormRequestProduto
    
            $dados['valor'] = (new Componentes())->formatacaoMascaraDinheiroDecimal($dados['valor']);
            $produto->update($dados);
    
            Toastr::success('Editado com sucesso!');
            return redirect()->route('clientes.index');
        }
    
        return view('pages.clientes.atualizar', compact('produto'));
    }
    
    public function delete(Request $request)
    {
        Cliente::findOrFail($request->id)->delete();
    
        return response()->json(['success' => true]);
    }
    
}
