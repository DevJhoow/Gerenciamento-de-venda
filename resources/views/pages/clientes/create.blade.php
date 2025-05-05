@extends('index')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form class="row g-3" method="POST" action="{{ route('cadastrar.cliente') }}">
            @csrf
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> Cadastrar novo Cliente  </h1>
            </div>
            
            <div class="col-12">
                <label for="staticEmail2" class="visually-hidden"> Nome </label>
                <input type="text" value="{{ old('nome') }}" class="form-control @error('nome') is-invalid @enderror"  name="nome"  placeholder="nome">
            </div>
            <div class="col-12">
                <label for="inputPassword2" class="visually-hidden"> E-mail </label>
                <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email">
            </div>
            
            <div class="col-12">
                <label for="inputPassword2" class="visually-hidden"> CEP </label>
                <input  id="cep" value="{{ old('cep') }}" class="form-control @error('cep') is-invalid @enderror" name="cep" placeholder="cep">
            </div>

            <div class="col-12">
                <label for="inputPassword2" class="visually-hidden"> Cidade </label>
                <input id="endereco" value="{{ old('endereco') }}" class="form-control @error('endereco') is-invalid @enderror" name="endereco" placeholder="Cidade">
            </div>

            <div class="col-12">
                <label for="inputPassword2" class="visually-hidden"> Bairro </label>
                <input id="bairro" value="{{ old('bairro') }}" class="form-control @error('bairro') is-invalid @enderror" name="bairro" placeholder="bairro">
            </div>

            <div class="col-12">
                <label for="inputPassword2" class="visually-hidden"> Logradouro </label>
                <input id="logradouro" value="{{ old('logradouro') }}" class="form-control @error('logradouro') is-invalid @enderror" name="logradouro" placeholder="logradouro">
            </div>

            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success" >Criar</button>
            </div>
        </form>
    </div>
@endsection
