{{-- pagina inicial principal --}}
<!doctype html>
<html lang="pt_BR">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.104.2">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
      <!-- Custom styles for this template -->
      <link href=" {{ asset('css/dashboard.css') }}" rel="stylesheet">
      <title> Gerenciameto de Vendas </title>

      <!-- Favicons -->
      @yield('styles')
      <link rel="manifest" href="{{ asset('icones/manifest.json') }}">
      <link rel="mask-icon" href="{{ asset('icones/safari-pinned-tab.svg') }} " color="#712cf9">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

      <link rel="icon" href="{{ asset('icones/logoBnoemal.png') }}">

      <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
      
      <meta name="theme-color" content="#712cf9">

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
              </main>
          </div>
      </div>

      @yield('scripts')
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>


      <script src=" {{ asset('js/bootstrap.bundle.js') }} "></script>
      <script src=" {{ asset('js/chart.js') }} "></script>
      <script src=" {{ asset('js/feather.js') }} "></script>
      <script src=" {{ asset('js/dashboard.js') }}"></script>
      <script src=" {{ asset('js/color_modes.js') }} "></script>

       {{-- InputMask --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>

       {{-- BlocUI loading --}}
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.js"></script>

       <script src="/js/projeto.js"></script>

       <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
       {!! Toastr::message() !!}
  </body>
</html>
