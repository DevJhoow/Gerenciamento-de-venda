@extends('index')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form class="row g-3 w-50" method="POST" action="{{ route('cadastrar.cliente') }}">
        @csrf

        <div class="w-100 border-bottom pb-2 mb-3">
            <h1 class="h4 text-center">
                <i class="bi bi-person-plus-fill me-2"></i>Cadastrar Novo Cliente
            </h1>
        </div>

        <div class="col-12">
            <label class="form-label">
                <i class="bi bi-person-fill me-1"></i>Nome
            </label>
            <input type="text" name="nome" placeholder="Nome"
                value="{{ old('nome') }}"
                class="form-control @error('nome') is-invalid @enderror">
        </div>

        <div class="col-12">
            <label class="form-label">
                <i class="bi bi-envelope-fill me-1"></i>Email
            </label>
            <input type="email" name="email" placeholder="Email"
                value="{{ old('email') }}"
                class="form-control @error('email') is-invalid @enderror">
        </div>

        <div class="col-12">
            <label class="form-label">
                <i class="bi bi-geo-alt-fill me-1"></i>CEP
            </label>
            <input type="text" id="cep" name="cep" placeholder="CEP"
                value="{{ old('cep') }}"
                class="form-control @error('cep') is-invalid @enderror">
        </div>

        <div class="col-12">
            <label class="form-label">
                <i class="bi bi-building me-1"></i>Cidade
            </label>
            <input type="text" id="endereco" name="endereco" placeholder="Cidade"
                value="{{ old('endereco') }}"
                class="form-control @error('endereco') is-invalid @enderror">
        </div>

        <div class="col-12">
            <label class="form-label">
                <i class="bi bi-geo me-1"></i>Bairro
            </label>
            <input type="text" id="bairro" name="bairro" placeholder="Bairro"
                value="{{ old('bairro') }}"
                class="form-control @error('bairro') is-invalid @enderror">
        </div>

        <div class="col-12">
            <label class="form-label">
                <i class="bi bi-signpost-2-fill me-1"></i>Logradouro
            </label>
            <input type="text" id="logradouro" name="logradouro" placeholder="Logradouro"
                value="{{ old('logradouro') }}"
                class="form-control @error('logradouro') is-invalid @enderror">
        </div>

        <div class="col-12 d-flex justify-content-center mt-3">
            <button type="submit" class="btn btn-success">
                <i class="bi bi-check-circle-fill me-1"></i>Cadastrar
            </button>
        </div>
    </form>
</div>
@endsection
