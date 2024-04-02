<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="{{ asset('frontend/style.css')}}">
</head>
<body>
    @include('frontend.layouts.navbar')
    <div class="content">
        @yield('contents')
    </div>
    @include('frontend.layouts.footer')
</body>
</html>
