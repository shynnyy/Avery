@extends('frontend.layouts.app')

@section('contents')

<header class="bg-dark py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Avery</h1>
            <p class="lead fw-normal text-white-50 mb-0">Averything is Your need Averything is Younique</p>
        </div>
    </div>
</header>

<style>
    .size-btn {
      width: 30px; /* Adjust width as needed */
      height: 25px; /* Adjust height as needed */
      margin: 12px; /* Adjust margin as needed */
      background-color: white; /* Initial background color */
      color: black; /* Initial text color */
      border: 1px solid black; /* Black border */
      transition: background-color 0.3s, color 0.3s; /* Transition effect */
      font-size: 10px; /* Adjust font size as needed */
      }

    .size-btn:hover {
      background-color: #f2f2f2; /* Background color on hover */
    }

    .size-btn.active {
      background-color: black; /* Background color when clicked */
      color: white; /* Text color when clicked */
    }

    .btn-view-detail {
      display: inline-block;
      padding: 8px 16px; /* Adjust padding as needed */
      border: 1px solid black; /* Set border */
      background-color: transparent; /* Transparent background */
      color: black; /* Text color */
      text-decoration: none; /* Remove text decoration */
      font-size: 14px; /* Adjust font size as needed */
      transition: background-color 0.3s, color 0.3s; /* Transition effect */
    }

    .btn-view-detail:hover {
      background-color: black; /* Background color on hover */
      color: white; /* Text color on hover */
    }

    .size-btn-container {
      display: flex; /* Use flexbox */
      justify-content: center; /* Center buttons horizontally */
      margin-top: 10px; /* Adjust top margin */
    }

    .color-option-container {
      display: flex;
      justify-content: center;
    }
</style>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div id="product-cards" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <!-- Product cards will be dynamically generated here -->  
        </div>
    </div>
</section>

<script>
    const products = [
        { name: 'FREAK SEE THROUGH SLIM SHIRT', image: 'pictures/P1.jpg', color:'#E59BE9' , colorName: 'Purple' , price:'289.000' },
        { name: 'BULB DENIM WIDE PANTS', image: 'pictures/P2.jpg', color: '#C4E4FF', colorName: 'White denim', price:'339.000'  },
        { name: 'SMOOTHIE BURTON WRAP HOOD', image: 'pictures/P3.jpg', color: 'rgb(90, 89, 89)', colorName: 'Dark gray' , price:'278.000' },
        { name: 'FEAR DENIM WIDE PANTS', image: 'pictures/P4.jpg', color: 'rgb(47, 52, 104)', colorName: 'Blue denim', price:'432.000'  },
        { name: 'LUCKY SHIRRING TOP & MUFFLER', image: 'pictures/P5.jpg', color: 'rgb(90, 89, 89)', colorName: 'Dark gray' , price:'189.000' },
        { name: 'VENUS RIBBON CARGO WIDE PANTS', image: 'pictures/P6.jpg', color: 'Beige', price:'250000'  },
        { name: 'RIBBON PLEATED SKIRT', image: 'pictures/P7.jpg', color: 'rgb(90, 89, 89)', colorName: 'Dark gray', price:'167.000'  },
        { name: 'LIVE SHIRRING TOP & MUFFLER', image: 'pictures/P8.jpg', color: 'Black', price:'159.000'  },
        { name: 'NON-FADED SLAP RAW DENIM PANTS', image: 'pictures/p1.jpeg', color: 'rgb(47, 52, 104)', colorName: 'Denim Blue', price: '387.000' },
        { name: 'MODERN CHECK SHIRT', image: 'pictures/p7.png', color: 'Black', price: '457.000' },
        { name: 'EMBO WASHING BANDING DENIM PANTS', image: 'pictures/p2.jpeg', color: 'Black', price: '377.000' },
        { name: 'DENIM CROP BIKER JACKET', image: 'pictures/p5.png', color: 'rgb(90, 89, 89)', colorName: 'Dark gray', price: '897.000' },
        { name: 'BIG HAT HOODIE', image: 'pictures/p6.jpeg', color: 'Black', price: '789.000' },
        { name: 'MUD TIN WASHING CARGO DENIM PANTS', image: 'pictures/p3.jpeg', color: 'Beige' , price: '377.000'},
        { name: 'BY ROLL UP DENIM SHIRT', image: 'pictures/p8.jpeg', color: '#C4E4FF', colorName: 'Denim', price: '255.000' },
        { name: 'POINT BRUSH DENIM PANTS', image: 'pictures/p4.jpeg', color: 'Black', price: '365.000' }
    ];

    const shuffleProducts = () => {
        const shuffledProducts = products.sort(() => Math.random() - 0.5);
        const productCards = document.getElementById('product-cards');
        productCards.innerHTML = '';

        shuffledProducts.slice(0, 8).forEach(product => {
            const card = `
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ asset('${product.image}') }}" alt="..." />
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder" style="font-size: 14px;">${product.name}</h5>
                                IDR ${product.price}
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                                <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                                <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                                <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                            </div>
                            <div class="mt-3">
                                <div class="color-option-container mt-3">
                                    <div class="color-option" style="background-color: ${product.color}; width: 20px; height: 20px; border-radius: 50%; display: inline-block;"></div>
                                    <span style="font-size: 12px;">${product.colorName || product.color}</span>
                                </div>
                            </div>
                            <div>
                                <a class="size-guide" href="{{ route('fitting') }}"> Size Guide</a>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-view-detail mt-auto" href="#">Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            productCards.innerHTML += card;
        });
    };

    shuffleProducts();
</script>
<script>
    // Get all size buttons
const sizeButtons = document.querySelectorAll('.size-btn');

// Add event listener to each size button
sizeButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Remove 'active' class from all buttons
        sizeButtons.forEach(btn => {
            btn.classList.remove('active');
        });

        // Add 'active' class to the clicked button
        button.classList.add('active');
    });
});

</script>

@endsection
