@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuários</h1>
    </div>

    <div>
        {{-- Formulário de pesquisa --}}
        <form action="{{ route('usuario.index') }}" method="GET" class="d-flex mb-3">
            <input type="text" name="pesquisar" placeholder="Digite o nome" class="form-control me-2" />
            <button class="btn btn-primary me-2">
                <i class="fas fa-search"></i> Pesquisar
            </button>
            <a href="{{ route('cadastrar.usuario') }}" class="btn btn-success ms-auto">
                <i class="fas fa-user-plus"></i> Cadastrar Usuário
            </a>
        </form>

        {{-- Tabela de usuários --}}
        <div class="table-responsive mt-4">
            @if ($pesquisar->isEmpty())
                <p class="text-muted">Não existem dados.</p>
            @else
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesquisar as $usuario)
                            <tr>
                                <td>{{ $usuario->name }}</td>
                                <td>{{ $usuario->email }}</td>
                                <td>
                                    <a href="{{ route('atualizar.usuario', $usuario->id) }}" class="btn btn-warning btn-sm me-1">
                                        <i class="fas fa-edit"></i> Atualizar
                                    </a>

                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a onclick="deleteRegistroPaginacao('{{ route('usuario.delete') }}', {{ $usuario->id }})"
                                       class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash-alt"></i> Deletar
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
