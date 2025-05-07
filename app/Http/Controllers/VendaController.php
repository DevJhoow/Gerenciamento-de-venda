<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormRequestVenda;
use App\Mail\ComprovanteDeVendaEmail;
use App\Models\Cliente;
use App\Models\Produto;
use App\Models\Venda;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class VendaController extends Controller
{
    protected $venda;

    public function __construct(Venda $venda)
    {
        $this->venda = $venda;
    }

    public function index(Request $request)
    {
        $findVendas = $this->venda->getVendasPesquisarIndex($request->input('pesquisar') ?? '');

        return view('pages.vendas.paginacao', compact('findVendas'));
    }

    public function cadastrarVendas(FormRequestVenda $request)
    {
        $findNumeracao = Venda::max('numero_da_venda') + 1;
        $findProduto = Produto::all();
        $findCliente = Cliente::all();

        if ($request->method() == "POST") {
            //cria, posta e redireciona para pagina produto.index 
            $data = $request->all();
            $data['numero_da_venda'] = $findNumeracao ; 
            Venda::create($data);

            Toastr::success('Inserido com sucesso!');

            return redirect()->route('vendas.index');
        }

        //get na pagina criar produtos
        return view('pages.vendas.create', compact('findNumeracao', 'findProduto', 'findCliente'));
    }

    public function enviaComprovantePorEmail($id)
    {
        $buscaVenda = Venda::where('id', '=', $id)->first();
        $produtonome = $buscaVenda->produto->nome ; 
        $clienteEmail = $buscaVenda->cliente->email ; 
        $clienteNome = $buscaVenda->cliente->nome ; 

        $sendMailData = [
            'produtoNome' => $produtonome,
            'clienteNome' => $clienteNome
        ];

        Mail::to($clienteEmail)->send(new ComprovanteDeVendaEmail($sendMailData));

        Toastr::success('E-mail enviado com sucesso!');
        return redirect()->route('vendas.index');
    }
}
