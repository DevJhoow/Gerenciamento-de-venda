@extends('index')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-primary">
            <i class="bi bi-briefcase-fill me-2"></i> Bem-vindo ao Sistema de Gestão Empresarial
        </h1>
        <p class="lead text-muted mt-3">
            Um sistema desenvolvido para **organizar seus negócios**, otimizar seu tempo e **reduzir prejuízos**. Gerencie sua loja, comércio ou empresa com clareza, controle e segurança.
        </p>
    </div>

    <div class="row g-4">
        <!-- DASHBOARD -->
        <div class="col-md-4">
            <a href="{{ route('dashboar.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow h-100 hover-shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-speedometer2 fs-1 text-primary mb-3"></i>
                        <h5 class="card-title">Dashboard</h5>
                        <p class="card-text text-muted">Veja os principais indicadores e resumos do seu negócio.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- PRODUTOS -->
        <div class="col-md-4">
            <a href="{{ route('produto.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow h-100 hover-shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-box-seam fs-1 text-primary mb-3"></i>
                        <h5 class="card-title">Produtos</h5>
                        <p class="card-text text-muted">Gerencie seu estoque de produtos de forma eficiente.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- VENDAS -->
        <div class="col-md-4">
            <a href="{{ route('vendas.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow h-100 hover-shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-currency-dollar fs-1 text-primary mb-3"></i>
                        <h5 class="card-title">Vendas</h5>
                        <p class="card-text text-muted">Controle todas as vendas com segurança e agilidade.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- CLIENTES -->
        <div class="col-md-4">
            <a href="{{ route('clientes.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow h-100 hover-shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-people fs-1 text-primary mb-3"></i>
                        <h5 class="card-title">Clientes</h5>
                        <p class="card-text text-muted">Acompanhe seus clientes e fortaleça o relacionamento.</p>
                    </div>
                </div>
            </a>
        </div>

        <!-- USUÁRIOS -->
        <div class="col-md-4">
            <a href="{{ route('usuario.index') }}" class="text-decoration-none">
                <div class="card border-0 shadow h-100 hover-shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-person-badge fs-1 text-primary mb-3"></i>
                        <h5 class="card-title">Usuários</h5>
                        <p class="card-text text-muted">Controle o acesso dos usuários ao sistema.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
