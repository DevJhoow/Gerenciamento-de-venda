{{-- componente navegação lateral --}}
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
          {{-- dashboard --}}
          <li class="nav-item">
              <a class="nav-link" href="{{ route('dashboar.index') }}">
                  <i class="bi bi-speedometer2 me-2"></i>
                  Dashboard
              </a>
          </li>

          {{-- vendas --}}
          <li class="nav-item">
              <a class="nav-link" href="{{ route('vendas.index') }}">
                  <i class="bi bi-receipt me-2"></i>
                  Vendas
              </a>
          </li>

          {{-- produtos --}}
          <li class="nav-item">
              <a class="nav-link" href="{{ route('produto.index') }}">
                  <i class="bi bi-box-seam me-2"></i>
                  Produtos
              </a>
          </li>

          {{-- clientes --}}
          <li class="nav-item">
              <a class="nav-link" href="{{ route('clientes.index') }}">
                  <i class="bi bi-people me-2"></i>
                  Clientes
              </a>
          </li>

          {{-- usuários --}}
          <li class="nav-item">
              <a class="nav-link" href="{{ route('usuario.index') }}">
                  <i class="bi bi-person-badge me-2"></i>
                  Usuários
              </a>
          </li>
      </ul>
  </div>
</nav>
