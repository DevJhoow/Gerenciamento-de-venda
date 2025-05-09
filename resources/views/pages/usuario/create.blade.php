@extends('index')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form class="row g-3" method="POST" action="{{ route('cadastrar.usuario') }}">
            @csrf
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> Criar Novo Usuario </h1>
            </div>
            
            <div class="col-12">
                <label class="form-label"> Nome </label>
                <input type="text" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror"  name="name"  placeholder="nome">
            </div>
            <div class="col-12">
                <label class="form-label"> E-mail </label>
                <input value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="email">
            </div>
            <div class="col-12">
                <label class="form-label"> Senha </label>
                <input value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="senha">
            </div>
            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success" >Criar</button>
            </div>
        </form>
    </div>
@endsection
