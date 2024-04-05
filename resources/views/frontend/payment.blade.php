@extends('auth')
@section('contents')
  <style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

.container {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0 auto;
  padding: 2rem;
  width: 50%;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

h1 {
  font-size: 2.5rem;
  color: #4a4a4a;
  margin-bottom: 2rem;
}

form {
  display: flex;
  flex-direction: column;
  width: 100%;
}

input[type="email"],
input[type="text"],
input[type="number"] {
  border: 1px solid #ccc;
  border-radius: 4px;
  padding: 0.5rem;
  margin-bottom: 1rem;
  width: 100%;
}

input[type="checkbox"] {
  margin-right: 0.5rem;
}

input[type="submit"] {
  padding: 0.5rem 2rem;
  margin-top: 2rem;
  align-self: flex-end;
}

.add {
  margin-top: 2rem;
  text-align: center;
}

.add a {
  text-decoration: none;
  color: #4a4a4a;
}
  </style>
<body>
  <h1>AVERY</h1>
  <div class="container">
    
  <form action="paymentConnect.php" method="post">
    <h2>Contact</h2>
    <input type="email" name="email" placeholder="Email" required>
    <div>
    <input type="checkbox">Email me with news and offers
    </div>
    <h3>Shipping address</h3>
    <input type="text" placeholder="Country/Region" name="country" required>
    <input type="text" placeholder="Name"  name="name" required>
    <input type="text" placeholder="Address" name="Address" required>
    <input type="text" placeholder="Apartment, suite, etc. (optional)" name="detail">
    <input type="text" placeholder="City/Town" name="city" required>
    <input type="text" placeholder="Province" name="province" >
    <input type="text" placeholder="Postal code"  name="postal">
    <input type="text" placeholder="Product" name="product">
    <input type="number" placeholder="Quantity" name="quantity">
    <input type="submit" name="submit" style="background-color: black; color: white;">Continue to shipping
  </form>

  <div class="add">
    <a href="#">Return to cart</a>
  </div>

  </div>
@endsession
