<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Produto;
use App\Models\User;
use App\Models\Venda;
use Illuminate\Http\Request;

class DashbordController extends Controller
{
    public function index()
    {
        $totalDeProdutosCadastrados = $this->buscaTotalProdutosCadastrados();
        $totalDeClienteCadastrados = $this->totalDeClienteCadastrados();
        $totalDeVendaCadastrados = $this->buscaTotalVendaCadastradas();
        $totalDeUsuarioCadastrados = $this->buscaTotalUsuarioCadastradas();

        return view('pages.dashboard.dashboard', compact('totalDeProdutosCadastrados', 'totalDeClienteCadastrados', 'totalDeVendaCadastrados', 'totalDeUsuarioCadastrados'));
    }

    public function buscaTotalProdutosCadastrados()
    {
        $findProduto = Produto::all()->count();
    
        return $findProduto;
    }

    public function totalDeClienteCadastrados()
    {
        $find = Cliente::all()->count();
    
        return $find;
    }

    public function buscaTotalVendaCadastradas()
    {
        $find = Venda::all()->count();
    
        return $find;
    }

    public function buscaTotalUsuarioCadastradas()
    {
        $find = User::all()->count();
    
        return $find;
    }
}
