@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>

    <div>
        {{-- formulario --}}
        <form action="{{ route('produto.index') }}" method="GET"> 
            <input type="text" name="pesquisar" placeholder="digite o nome">
            <button> Pesquisar </button>
            <a href="{{ route('cadastrar.produto') }}" type="button" class="btn btn-success float-end"> Cadastrar produtos</a>
        </form>

        {{-- tabela  --}}
        <div class="table-responsive mt-4">
            @if ($findProdutos->isEmpty())
                <p> Não existe Dados... </p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                        <th>Nome</th>
                        <th>Valor</th>
                        <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findProdutos as $produto)
                            <tr>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ 'R$' . ' ' . number_format($produto->valor, 2, ',', '.')}}</td>
                                <td> 
                                    <a href="{{ route('atualizar.produto', $produto->id) }}" class="btn btn-light btn-sm"> Editar </a> 

                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a onclick="deleteRegistroPaginacao('{{ route('produto.delete') }}', {{ $produto->id }})"
                                        class="btn btn-danger btn-sm"> Deletar
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

