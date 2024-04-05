<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/register.css')}}" rel="stylesheet">

</head>

<body>
    <div class="register">
      <h2 class="desc">Create Account</h2>
      <form action="login" method="GET">
        <input type="email" placeholder="*Email" name="email" required>
        <input type="password" placeholder="*Password" name="password" required>
        <input type="text" placeholder="*Name" name="name" required>
        <p>By submitting this form, you accept the <u>Terms & Conditions</u></p>
        <input type="submit" value="Register"  name="submit" >
        <a href="{{ route('register')}}" name="submit" type="submit" value="Register" >
        </a>
      </form>
    </div>
  </body>

</html>
