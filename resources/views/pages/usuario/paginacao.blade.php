@extends('index')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center border-bottom pb-2 mb-4">
        <h2 class="h4 mb-0"><i class="bi bi-person-badge me-2 text-primary"></i> Usuários</h2>
        <a href="{{ route('cadastrar.usuario') }}" class="btn btn-success btn-sm">
            <i class="bi bi-plus-circle me-1"></i> Cadastrar Usuário
        </a>
    </div>

    {{-- Formulário de busca --}}
    <form action="{{ route('usuario.index') }}" method="GET" class="row g-2 mb-4">
        <div class="col-md-6">
            <input type="text" name="pesquisar" class="form-control" placeholder="Digite o nome do usuário">
        </div>
        <div class="col-auto">
            <button class="btn btn-primary">
                <i class="bi bi-search"></i> Pesquisar
            </button>
        </div>
    </form>

    {{-- Tabela --}}
    <div class="table-responsive">
        @if ($pesquisar->isEmpty())
            <div class="alert alert-warning text-center">
                <i class="bi bi-exclamation-circle"></i> Nenhum usuário encontrado.
            </div>
        @else
            <table class="table table-bordered table-hover align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th style="width: 150px;">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pesquisar as $usuario)
                        <tr>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td>
                                <a href="{{ route('atualizar.usuario', $usuario->id) }}" class="btn btn-outline-secondary btn-sm">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <a onclick="deleteRegistroPaginacao('{{ route('usuario.delete') }}', {{ $usuario->id }})"
                                   class="btn btn-outline-danger btn-sm">
                                   <i class="bi bi-trash"></i>
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
