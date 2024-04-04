<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('frontend/css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        @include('frontend.layouts.navbar')


        <!-- Section-->
        <div class="content">
            @yield('contents')
        </div>

        <!-- Footer-->
        @include('frontend.layouts.footer')

        <!-- Bootstrap core JS-->
        <script src="{{ asset('frontend/vendor/bootstrap5/bootstrap.bundle.min.js')}}"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('frontend/js/script.js')}}"></script>
    </body>
</html>
