@extends('index')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form class="row g-3" method="POST" action="{{ route('atualizar.produto', $produto->id) }}">
            @csrf
            @method('PUT')

            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Editar Produto</h1>
            </div>

            <div class="col-12">
                <label for="nome" class="visually-hidden">Nome</label>
                <input
                    type="text"
                    name="nome"
                    value="{{ old('nome', $produto->nome) }}"
                    class="form-control @error('nome') is-invalid @enderror"
                    placeholder="Nome do produto"
                >
            </div>

            <div class="col-12">
                <label for="valor" class="visually-hidden">Valor</label>
                <input
                    id="mask_valor"
                    name="valor"
                    value="{{ old('valor', $produto->valor) }}"
                    class="form-control @error('valor') is-invalid @enderror"
                    placeholder="Valor"
                >
            </div>

            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save me-2"></i>Salvar
                </button>
            </div>
        </form>
    </div>
@endsection
