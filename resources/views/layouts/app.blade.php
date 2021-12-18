<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="shortcut icon" href="{{ asset('img/icon.png') }}" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    @yield('css')
</head>
<body>
    @include('layouts.modal')
    @include('layouts.alert')
    <div id="app" class="w-100">

        <div class="row g-0">
            @if(Auth::user())
            <div class="col-md-2 min-vh-100 bg-cbm">
                <div class="sticky-top">
                <nav class="navbar navbar-light bg-cbm-2 p-0" style="height:5em">
                    <a class="navbar-brand py-0 px-3" href="{{ route('home') }}">
                      <!-- <div class="logo-admin"></div> -->
                      <img src="{{ asset('img/cbm-dark.svg') }}" alt="" width="100%" class="opacity-0">
                    </a>
                </nav>
                <div class="list-group list-group-flush nav-admin line-h-2">
                    <a href="{{ route('home') }}" class="list-group-item list-group-item-action"><i class="bi bi-asterisk me-3"></i> Dashboard</a>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#nav-1" aria-expanded="true">
                    <div>
                        <i class="bi bi-hdd-rack-fill me-3"></i>Project
                  </div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </a>
                <div class="bg-lab-2 collapse" id="nav-1" style="">

                <div class="list-group list-group-flush nav-res">
                  <a href="{{ route('projects.index') }}" class="list-group-item list-group-item-action "><i class="bi bi-dot me-3"></i>Table Project</a>
                  <a href="{{ route('projects.create') }}" class="list-group-item list-group-item-action "><i class="bi bi-dot me-3"></i>Tambah Project</a>
                </div>
                
              </div>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#nav-2" aria-expanded="true">
                    <div>
                        <i class="bi bi-chat-square-text-fill me-3"></i>Blog
                  </div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </a>
                <div class="bg-lab-2 collapse" id="nav-2" style="">

                <div class="list-group list-group-flush nav-res">
                  <a href="{{ route('blogs.index') }}" class="list-group-item list-group-item-action "><i class="bi bi-dot me-3"></i>Table Blog</a>
                  <a href="{{ route('blogs.create') }}" class="list-group-item list-group-item-action "><i class="bi bi-dot me-3"></i>Tambah Blog</a>
                </div>
                
              </div>
                    <a href="javascript:void(0)" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="collapse" data-bs-target="#nav-3" aria-expanded="true">
                    <div>
                    <i class="bi bi-file-earmark-break-fill me-3"></i>Sliders
                  </div>
                  <div><i class="bi bi-chevron-down"></i></div>
                </a>
                <div class="bg-lab-2 collapse" id="nav-3" style="">

                <div class="list-group list-group-flush nav-res">
                  <a href="{{ route('sliders.index') }}" class="list-group-item list-group-item-action "><i class="bi bi-dot me-3"></i>Table Sliders</a>
                  <a href="{{ route('sliders.create') }}" class="list-group-item list-group-item-action "><i class="bi bi-dot me-3"></i>Tambah Sliders</a>
                </div>
                
              </div>
              <a class="list-group-item list-group-item-action text-badge">Other</a>
              <a href="{{ route('mailist') }}" class="list-group-item list-group-item-action"><i class="bi bi-chat-square-quote-fill me-3"></i>Contact Mail</a>
              <a href="{{ url('') }}" target="_blank" class="list-group-item list-group-item-action"><i class="bi bi-arrow-up-right-square-fill me-3"></i>Website</a>
            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#modalLogout" class="list-group-item list-group-item-action"><i class="bi bi-x-octagon-fill me-3"></i>Logout now</a>
                </div>
                    
                </div>
            </div>
            @endif
            @guest
            <div class="col-md">
            @else
            <div class="col-md-10">
            @endguest
            @if(Auth::user())
                <header class="sticky-top">
                <nav class="navbar navbar-light bg-white shadow-sm" style="height:5em">
                <div class="container mx-3">
                    <div>
                        <h5 class="m-0 fw-bold">
                            Dashboard
                        </h5>
                    </div>
                    <div>
                    <ul class="nav justify-content-end nav-top">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ asset('img/user.png') }}" alt="" width="40" class="rounded-pill me-2">Account
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-4" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('account') }}">Setting Account</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#modalLogout">Logout</a></li>
                        </ul>
                        </li>
                    </ul>
                    </div>
                </div>
                </nav>
                </header>
                @endif
                <main class="p-4">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    </div>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
      Image: {
        zoom: true,
      },
    });
    </script>
    @yield('js')
</body>
</html>
