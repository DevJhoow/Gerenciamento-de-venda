@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-box-seam"></i> Produtos</h5>
                <p class="card-text">Total de produtos cadastrados</p>
                <a href="#" class="btn btn-light fw-bold">{{ $totalDeProdutosCadastrados }}</a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-people"></i> Clientes</h5>
                <p class="card-text">Total de clientes cadastrados</p>
                <a href="#" class="btn btn-light fw-bold">{{ $totalDeClienteCadastrados }}</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-sm-6 mb-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-cart-check"></i> Vendas</h5>
                <p class="card-text">Total de vendas cadastradas</p>
                <a href="#" class="btn btn-light fw-bold">{{ $totalDeVendaCadastrados }}</a>
            </div>
        </div>
    </div>

    <div class="col-sm-6 mb-3">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <h5 class="card-title"><i class="bi bi-person-badge"></i> Usuários</h5>
                <p class="card-text">Total de usuários cadastrados</p>
                <a href="#" class="btn btn-light fw-bold">{{ $totalDeUsuarioCadastrados }}</a>
            </div>
        </div>
    </div>
</div>
@endsection
