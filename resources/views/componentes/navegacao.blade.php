{{-- componente navegação lateral --}}

<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        {{-- dashboard --}}
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="{{ route('dashboar.index') }}">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        {{-- vendas --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('vendas.index') }}">
            <span data-feather="file" class="align-text-bottom"></span>
            Vendas
          </a>
        </li>
        {{-- produtos --}}
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('produto.index') }} ">
            <span data-feather="shopping-cart" class="align-text-bottom"></span>
            Produtos
          </a>
        </li>
        {{-- clientes --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('clientes.index') }}">
            <span data-feather="users" class="align-text-bottom"></span>
            Clientes
          </a>
        </li>
        {{-- USUARIOS --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('usuario.index') }}">
            <span data-feather="users" class="align-text-bottom"></span>
            Usuarios
          </a>
        </li>
      </div>
  </nav