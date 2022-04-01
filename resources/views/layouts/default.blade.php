<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body style="background-image:url('{{ asset('/image/bg.jpg') }}'); background-repeat: no-repeat; background-attachment: fixed;">
    <div>
        <header>
            @include('includes.header')
        </header>
        <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
            <i class="fas fa-arrow-up"></i>
        </button>
        <div id="main" class="container">
            @yield('content')
        </div>
        <footer class="border-top footer text-light">
            @include('includes.footer')
        </footer>
    </div>
    <script src="{{ asset('/vendor/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/vendor/popper/popper.min.js') }}"></script>
    <script src="{{ asset('/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('/vendor/custom/js/site.js') }}"></script>
</body>
</html>