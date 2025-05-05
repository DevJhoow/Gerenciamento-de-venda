@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Clientes</h1>
    </div>

    <div>
        {{-- formulario --}}
        <form action="{{ route('clientes.index') }}" method="GET"> 
            <input type="text" name="pesquisar" placeholder="digite o nome">
            <button> Pesquisar </button>
            <a href="{{ route('cadastrar.cliente') }}" type="button" class="btn btn-success float-end"> Cadastrar cliente</a>
        </form>

        {{-- tabela  --}}
        <div class="table-responsive mt-4">
            @if ($findClientes->isEmpty())
                <p> Não existe Dados... </p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>CEP</th>
                            <th>Endereço</th>
                            <th>Bairro</th>
                            <th>Cidade</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($findClientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nome }}</td>
                                <td>{{ $cliente->email }}</td>
                                <td>{{ $cliente->cep }}</td>
                                <td>{{ $cliente->logradouro }}</td>
                                <td>{{ $cliente->bairro }}</td>
                                <td>{{ $cliente->endereco }}</td>
                                <td> 
                                    <a href="{{ route('atualizar.cliente', $cliente->id) }}" class="btn btn-light btn-sm"> Editar </a> 

                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a onclick="deleteRegistroPaginacao('{{ route('cliente.delete') }}', {{ $cliente->id }})"
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

