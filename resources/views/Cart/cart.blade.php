@extends('frontend.layouts.app')
@section('contents')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Custom styles for cart page */
        .cart-container {
            display: flex;
            flex-direction: column; /* Arrange items in a column */
        }

        .cart-item {
            position: relative;
            display: flex;
            align-items: center;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
            margin-bottom: 20px; /* Add margin between cart items */
        }

        .cart-item:last-child {
            margin-bottom: 0; /* Remove margin for the last cart item */
        }

        .cart-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .product-image {
            width: 120px;
            height: auto;
            margin-right: 20px;
            border-radius: 5px;
        }

        .product-details {
            flex: 1;
        }

        .product-name {
            font-size: 20px;
            margin-bottom: 5px;
            color: #333;
        }

        .product-info {
            font-size: 16px;
            margin-bottom: 10px;
            color: #666;
        }

        .product-price {
            font-size: 18px;
            margin-bottom: 15px;
            color: #333;
        }

        .payment-button {
            margin-top: auto; /* Push payment button to the bottom */
            padding: 8px 12px; /* Adjust padding for smaller size */
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px; /* Adjust font size for smaller size */
            cursor: pointer;
            transition: background-color 0.3s ease;
            align-self: flex-end; /* Align to the right */
        }

        .payment-button:hover {
            background-color: #45a049;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .delete-button:hover {
            background-color: #d32f2f;
        }
    </style>
</head>

<body>
    <div class="cart-container">
        <div class="cart-item">
            <img src="product-image.jpg" alt="Product Image" class="product-image">
            <div class="product-details">
                <h3 class="product-name">Product Name</h3>
                <p class="product-info">Size: M | Color: Black</p>
                <p class="product-price">$XX.XX</p>
            </div>
            <button class="delete-button">Delete</button>
        </div>
        <button class="payment-button">Proceed to Payment</button>
    </div>
</body>

@endsection
