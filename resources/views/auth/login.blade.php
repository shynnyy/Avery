<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Login</title>
    <!-- Custom styles for this template-->
    <link href="{{ asset('public.css.logion') }}" rel="stylesheet">
    <style>
        /* CSS untuk kotak tengah dengan latar belakang hitam blur */
        .center-box {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7); /* Warna hitam dengan opacity 70% */
            padding: 80px; /* Lebih besar padding */
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5); /* Efek bayangan */
            max-width: 90%;
            max-height: 90%;
            overflow-y: auto; /* Scrolling jika konten melebihi kotak */
            width: 60%; /* Lebar kotak hitam */
        }
        .center-content {
            max-width: 1000px;
            margin: 0 auto;
        }
        .center-content h1 {
            margin-top: 0;
            text-align: center;
            color: #fff; /* Warna teks putih */
        }

        /* CSS untuk tampilan dua kolom */
        .container-wrapper {
            display: flex;
            max-width: 900px;
            margin: 20px auto; /* Mengurangi margin untuk tampilan yang lebih rapi */
        }
        .container {
            flex: 1;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid black;
            margin-right: 30px;
        }
        .container:last-child {
            margin-right: 0;
        }
        .container h2 {
            text-align: center;
        }
        .container hr {
            height: 2px;
            background-color: black;
            margin-bottom: 10px;
        }
        .container form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container input[type="email"],
        .container input[type="password"] {
            width: 250px;
            padding: 10px; /* Perbesar tinggi input */
            margin-top: 10px;
            margin-bottom: 15px; /* Perpanjang jarak bawah input */
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; /* Memastikan padding dan border tidak menambah lebar elemen */
        }
        .container button {
            width: 100%;
            padding: 15px;
            margin-top: 30px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .container button:hover {
            background-color: #333; /* Ubah warna ketika dihover */
        }
        /* Menyejajarkan tombol Sign In ke kiri */
        .signIn {
            align-self: flex-start;
        }
        /* Paragraf untuk pesan log in */
        .login-message {
            color: gray;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="bg-gradient-primary">
    <div class="center-box">
        <div class="center-content">
            <h1>WELCOME TO AVERY</h1>
            <div class="container-wrapper">
                <div class="container fade-in">
                    <h2>Sign In</h2>
                    <hr>
                    <p class="login-message">Log in with your email and password</p>
                    <!-- Isi dari form Sign In -->
                    <form action="index" method="GET" target="content">
                        <input type="email" id="email" placeholder="Enter your email" name="email" required>
                        <input type="password" id="password" placeholder="Enter your password" name="password" required>
                        <button class="signIn" id="loginBtn" disabled style="margin-top: 17px;">SIGN IN</button>
                    </form>
                    <script>
                        function checkInputs() {
                            const emailInput = document.getElementById('email');
                            const passwordInput = document.getElementById('password');
                            const loginBtn = document.getElementById('loginBtn');

                            if (emailInput.value.trim() !== '' && passwordInput.value.trim() !== '') {
                                loginBtn.removeAttribute('disabled');
                            } else {
                                loginBtn.setAttribute('disabled', 'disabled');
                            }
                        }

                        document.addEventListener('DOMContentLoaded', function () {
                            const emailInput = document.getElementById('email');
                            const passwordInput = document.getElementById('password');

                            emailInput.addEventListener('input', checkInputs);
                            passwordInput.addEventListener('input', checkInputs);
                        });
                    </script>
                </div>
                <div class="container fade-in">
                    <h2>Create Account</h2>
                    <hr>
                    <p class="login-message">Click on create an account and get many benefits</p>
                    <!-- Isi dari form Create Account -->
                    <ul>
                        <li>Order quickly and easily</li>
                        <li>Overview and management of personal data</li>
                        <li>Order Overview</li>
                        <li>Details on order and order status</li>
                        <li>Newsletter subscription + early access</li>
                    </ul>
                    <a href="{{ route('login') }}">
                        <button class="create-acc" style="margin-bottom: 5px;">CREATE ACCOUNT</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
