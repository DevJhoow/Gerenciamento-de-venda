@extends('index')

@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <form class="row g-3" method="POST" action="{{ route('cadastrar.produto') }}">
        @csrf
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2"> Criar Produtos </h1>
        </div>
        
        <div class="col-12">
            <label for="staticEmail2" class="visually-hidden"> Nome </label>
            <input type="text" class="form-control @error('nome') is-invalid @enderror"  name="nome"  placeholder="nome">
        </div>
        <div class="col-12">
            <label for="inputPassword2" class="visually-hidden"> Valor </label>
            <input id="mask_valor" class="form-control @error('valor') is-invalid @enderror" name="valor" placeholder="valor">
        </div>
        <div class="col-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-success" >Criar</button>
        </div>
    </form>
</div>

@endsection
