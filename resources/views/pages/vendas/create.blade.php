@extends('index')

@section('content')
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <form class="row g-3" method="POST" action="{{ route('cadastrar.vendas') }}">
            @csrf
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2"> Cadastrar nova Venda  </h1>
            </div>
            
            <div class="col-12">
                <label for="staticEmail2" class="visually-hidden"> Numeração </label>
                <input type="text" disabled value="{{ $findNumeracao }}" class="form-control @error('numero_da_venda') is-invalid @enderror"  name="numero_da_venda"  placeholder="numero_da_venda">
            </div>

            <div class="col-12">
                   <select class="form-select" name="produto_id" >
                        <option selected> selecionar produto</option>

                        @foreach ($findProduto as $produto)
                            <option value="{{ $produto->id }}">{{$produto->nome}}</option>
                        @endforeach
                  </select>
            </div>

            <div class="col-12">
                   <select class="form-select" name="cliente_id" >
                        <option selected> selecionar cliente  </option>

                        @foreach ($findCliente as $cliente)
                            <option value="{{ $cliente->id }}">{{$cliente->nome}}</option>
                        @endforeach
                  </select>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success" >Criar</button>
            </div>
        </form>
    </div>
@endsection
