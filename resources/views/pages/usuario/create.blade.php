@extends('index')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <form class="card p-4 shadow-sm" style="width: 100%; max-width: 500px;" method="POST" action="{{ route('cadastrar.usuario') }}">
        @csrf

        <h2 class="mb-4 text-center">
            <i class="fas fa-user-plus"></i> Criar Novo Usuário
        </h2>

        {{-- Nome --}}
        <div class="mb-3">
            <label class="form-label"><i class="fas fa-user"></i> Nome</label>
            <input type="text" name="name" value="{{ old('name') }}"
                   class="form-control @error('name') is-invalid @enderror" placeholder="Digite o nome">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Email --}}
        <div class="mb-3">
            <label class="form-label"><i class="fas fa-envelope"></i> E-mail</label>
            <input type="email" name="email" value="{{ old('email') }}"
                   class="form-control @error('email') is-invalid @enderror" placeholder="Digite o e-mail">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Senha --}}
        <div class="mb-4">
            <label class="form-label"><i class="fas fa-lock"></i> Senha</label>
            <input type="password" name="password"
                   class="form-control @error('password') is-invalid @enderror" placeholder="Digite a senha">
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        {{-- Botão --}}
        <div class="d-grid">
            <button type="submit" class="btn btn-success">
                <i class="fas fa-save"></i> Criar
            </button>
        </div>
    </form>
</div>
@endsection
