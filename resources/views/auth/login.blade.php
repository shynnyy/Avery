<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="{{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i') }}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <style>
        body,
        html {
            height: 100%;
            font-family: 'Nunito', sans-serif;
        }

        .bg-gradient-primary {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.9) 0%, rgba(230, 230, 230, 0.9) 100%);
            background-image: none;
        }

        .card {
            border: 1px solid #ccc;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
        }

        .btn-primary {
            background-color: #333;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            background-color: #555;
        }

        .form-control-user {
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .custom-control-input:checked~.custom-control-label::before {
            background-color: #444;
            border-color: #444;
        }

        .text-gray-900 {
            color: #333 !important;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h4 {
            color: #222;
        }

        .small,
        a.small {
            color: #666;
        }

        a.small:hover {
            color: #444;
        }

        /* Add subtle animation to the form elements */
        .form-control-user,
        .btn-primary,
        .custom-control-label {
            transition: all 0.3s ease-in-out;
        }

        .form-control-user:focus {
            box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.2);
        }

        .custom-control-input:focus~.custom-control-label::before {
            box-shadow: 0 0 0 2px rgba(52, 58, 64, 0.2);
        }

        /* Enhance the appearance of the alert box */
        .alert-danger {
            color: #721c24;
            background-color: #f8d7da;
            border-color: #f5c6cb;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }

        /* Additional styles for vertical centering */
        .vertical-align-middle {
            min-height: 100vh;
            /* Full height */
            display: flex;
            align-items: center;
            /* Align vertically */
            justify-content: center;
            /* Align horizontally */
        }

        .card {
            margin-bottom: 0;
            /* Remove bottom margin of the card for better centering */
        }
    </style>

</head>

<!-- Navbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <a class="navbar-brand" href="#">
        <img src="{{ asset('img/brandlogo.jpeg') }}" alt="Your Logo" height="30"> <!-- Adjust the path and height as needed -->
    </a>
</nav>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center vertical-align-middle">

            <div class="col-md-9 col-lg-7 col-xl-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form action="{{ route('login.action') }}" method="POST" class="user">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password"
                                                class="form-control form-control-user" id="exampleInputPassword"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input name="remember" type="checkbox" class="custom-control-input"
                                                    id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit"
                                            class="btn btn-primary btn-block btn-user">SignIn</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{ route('register') }}">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

</body>
</html>
