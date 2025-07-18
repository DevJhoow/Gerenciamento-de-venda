@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Vendas</h1>
    </div>

    <div>
        {{-- formulario --}}
        <form action="{{ route('vendas.index') }}" method="GET"> 
            <input type="text" name="pesquisar" placeholder="produto...">
            <button> Pesquisar </button>
            <a href="{{ route('cadastrar.vendas') }}" type="button" class="btn btn-success float-end"> Cadastrar venda</a>
        </form>

        {{-- tabela  --}}
        <div class="table-responsive mt-4">
            @if ($findVendas->isEmpty())
                <p> Não existe Dados... </p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Numeração</th>
                            <th>Produto</th>
                            <th>Cliente</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findVendas as $venda)
                            <tr>
                                <td>{{ $venda->numero_da_venda }}</td>
                                <td>{{ $venda->produto->nome }}</td>
                                <td>{{ $venda->cliente->nome }}</td>

                                <td> 
                                    <a href=" {{ route('enviaComprovantePorEmail.vendas', $venda->id) }}" class="btn btn-light btn-sm"> 
                                        Enviar Email  
                                    </a> 
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection

