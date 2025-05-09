@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">
        <i class="bi bi-people-fill me-2"></i>Clientes
    </h1>
</div>

<div>
    {{-- Formulário de busca --}}
    <form action="{{ route('clientes.index') }}" method="GET" class="d-flex align-items-center mb-3">
        <input type="text" name="pesquisar" class="form-control me-2" placeholder="Digite o nome">
        <button class="btn btn-outline-primary me-2">
            <i class="bi bi-search"></i> Pesquisar
        </button>
        <a href="{{ route('cadastrar.cliente') }}" class="btn btn-success ms-auto">
            <i class="bi bi-person-plus-fill me-1"></i> Cadastrar cliente
        </a>
    </form>

    {{-- Tabela --}}
    <div class="table-responsive mt-4">
        @if ($findClientes->isEmpty())
            <p><i class="bi bi-exclamation-circle me-1"></i>Não existem dados...</p>
        @else
            <table class="table table-striped table-sm">
                <thead class="table-light">
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
                                <a href="{{ route('atualizar.cliente', $cliente->id) }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>

                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <a onclick="deleteRegistroPaginacao('{{ route('cliente.delete') }}', {{ $cliente->id }})"
                                   class="btn btn-outline-danger btn-sm">
                                    <i class="bi bi-trash"></i> Deletar
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
