{{-- pagina inicial principal --}}
<!doctype html>
<html lang="pt_BR">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.104.2">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <!-- Custom styles for this template -->
      <link href=" {{ asset('css/dashboard.css') }}" rel="stylesheet">
      <title> Gerenciameto de Vendas </title>

      <!-- Favicons -->
      @yield('styles')
      <link rel="apple-touch-icon" href="{{ asset('icones/logoB.png') }}" sizes="180x180">
      <link rel="icon" href="{{ asset('icones/logoBnormal1.png' ) }}" sizes="32x32" type="image/png">
      <link rel="icon" href="{{ asset('icones/logoBpequenino.png') }}" sizes="16x16" type="image/png">
      <link rel="manifest" href="{{ asset('icones/manifest.json') }}">
      <link rel="mask-icon" href="{{ asset('icones/safari-pinned-tab.svg') }} " color="#712cf9">
      <link rel="icon" href="{{ asset('icones/logoBnoemal.png') }}">
      <meta name="theme-color" content="#712cf9">

      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }

        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }

        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }

        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }
      </style>

    </head>
  <body>
      <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
          <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">GESTÃO</a>
          <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
          </button>
          <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
          <div class="navbar-nav">
              <div class="nav-item text-nowrap">
                   <a class="nav-link px-3" href="#">SAIR</a>
              </div>
          </div>
      </header>

      <div class="container-fluid">
        <div class="row">
          
          @include('componentes.navegacao')

          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
              @yield('content')
            

       
            </div>
          </main>
        </div>
      </div>

      @yield('scripts')
      <script src=" {{ asset('js/bootstrap.bundle.js') }} "></script>
      <script src=" {{ asset('js/chart.js') }} "></script>
      <script src=" {{ asset('js/feather.js') }} "></script>

      <script src=" {{ asset('js/dashboard.js') }}"></script>
      <script src=" {{ asset('js/color_modes.js') }} "></script>
  </body>
</html>
