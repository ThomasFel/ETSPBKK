<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" sizes="32x32" href='{{ asset("/image/icon.png") }}'>
    <link rel="stylesheet"  type="text/css" href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"  type="text/css" href="{{ asset('/vendor/custom/css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.0/css/all.min.css"/>
    <!-- <link rel="stylesheet" href="~/css/site.css"/> -->
</head>
<body style="background-image:url('{{ asset('/image/bg.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed;">
    @include('sweetalert::alert')
    <div>
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
                <div class="container text-light">
                    <a class="navbar-brand" style="font-weight: 600;" href="/">BlockDev</a>
                    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/profile">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/company">Company</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/service">Service</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/collaboration">Collaboration</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/news">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="/order">Order</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="intro-example" class="p-5 text-center bg-image">
                <div class="d-flex justify-content-center align-items-center h-100 text-center">
                    <div class="text-white">
                    <h1 class="mb-3 display-2 fw-bold">{{ $title ?? 'BLOCKDEV' }}</span></h1>
                    <h4 class="mb-4">@yield('desc')</h4>
                    <a class="btn btn-outline-light btn-lg m-2" href='#@yield("detail")' role="button">Read More</a>
                    </div>
                </div>
            </div>
        </header>

        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
        
        <div id="main" class="container">
            @yield('content')
        </div>
        
        <footer class="border-top footer text-light">
            <p class="text-center mt-3">All right reserved &copy; {{ now()->year }} - BlockDev</p>
        </footer>
    </div>
    
    <script src="{{ asset('/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendor/custom/js/site.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
</body>
</html>