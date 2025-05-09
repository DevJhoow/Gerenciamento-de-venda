@extends('index')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuarios</h1>
    </div>

    <div>
        {{-- formulario --}}
        <form action="{{ route('usuario.index') }}" method="GET"> 
            <input type="text" name="pesquisar" placeholder="digite o nome">
            <button> Pesquisar </button>
            <a href="{{ route('cadastrar.usuario') }}" type="button" class="btn btn-success float-end"> Cadastrar Usuarios </a>
        </form>

        {{-- tabela  --}}
        <div class="table-responsive mt-4">
            @if ($pesquisar->isEmpty())
                <p> Não existe Dados... </p>
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
                                    <a href="{{ route('atualizar.usuario', $usuario->id) }}" class="btn btn-light btn-sm"> Editar </a> 

                                    <meta name="csrf-token" content="{{ csrf_token() }}">
                                    <a onclick="deleteRegistroPaginacao('{{ route('usuario.delete') }}', {{ $usuario->id }})"
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

