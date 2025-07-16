@extends('index')

@section('content')
    <div class="container py-5">
        <div class="card shadow border-0">
            <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                <h4 class="mb-0">
                    <i class="bi bi-plus-circle me-2"></i> Cadastrar Nova Venda
                </h4>
            </div>

            <form method="POST" action="{{ route('cadastrar.vendas') }}" class="p-4 bg-white">
                @csrf

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-hash me-1 text-primary"></i> Número da Venda
                    </label>
                    <input type="text" 
                           disabled 
                           value="{{ $findNumeracao }}" 
                           class="form-control bg-light @error('numero_da_venda') is-invalid @enderror"  
                           name="numero_da_venda"  
                           placeholder="Número da Venda">
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-box-seam me-1 text-primary"></i> Produto
                    </label>
                    <select class="form-select" name="produto_id" required>
                        <option value="">Selecionar produto</option>
                        @foreach ($findProduto as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">
                        <i class="bi bi-person-circle me-1 text-primary"></i> Cliente
                    </label>
                    <select class="form-select" name="cliente_id" required>
                        <option value="">Selecionar cliente</option>
                        @foreach ($findCliente as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle me-1"></i> Criar Venda
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
