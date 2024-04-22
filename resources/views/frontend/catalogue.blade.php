@extends('frontend.layouts.app')
@section('contents')
    @if ($isIndexPage)
        <header class="bg-dark py-5 header-container">
            <div class="container px-4 px-lg-5 my-5 header-content">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Avery</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Averything is Your Need Averything is Younique</p>
                </div>
            </div>
        </header>
    @endif
    <style>
        .header-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 25vh;
        }

        .header-content {
            text-align: center;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-left: 3rem !important;
            padding-right: 3rem !important;
            padding-bottom: 3rem !important;
        }

        .size-btn {
            width: 30px;
            height: 25px;
            margin: 12px;
            background-color: white;
            color: black;
            border: 1px solid black;
            transition: background-color 0.3s, color 0.3s;
            font-size: 10px;
        }

        .size-btn:hover {
            background-color: #f2f2f2;
        }

        .size-btn.active {
            background-color: black;
            color: white;
        }

        .btn-view-detail {
            display: inline-block;
            padding: 8px 16px;
            border: 1px solid black;
            background-color: transparent;
            color: black;
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn-view-detail:hover {
            background-color: black;
            color: white;
        }

        .size-btn-container {
            display: flex;
            justify-content: center;
            margin-top: 10px;
        }

        .color-option-container {
            display: flex;
            justify-content: center;
        }
        .card-img-top {
            width: 280px;
            height: 336px;
            object-fit: cover;
        }
    </style>

    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div id="product-cards" class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Product cards will be dynamically generated here -->
                @foreach ($Products as $product)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset($product->img) }}" alt="Product Image" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder" style="font-size: 14px;">{{ $product->name }}</h5>
                                    IDR {{ $product->price }}
                                </div>
                                <div class="mt-3">
                                    <div class="size-btn-container">
                                        @foreach ($Sizes as $size)
                                            <button type="button" class="btn btn-outline-dark size-btn"
                                                data-size="{{ $size->name }}">{{ $size->name }}</button>
                                        @endforeach
                                    </div>
                                    <div class="color-option-container mt-3">
                                        <span style="font-size: 10px;">୨ৎ color only available as the product
                                            display୨ৎ</span>
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
                @endforeach
            </div>
        </div>
    </section>

    <script>
        const products = @json($Products);

        function sortProducts(sortBy) {
            let sortedProducts = [];

            if (sortBy === 'highest') {
                sortedProducts = products.slice().sort((a, b) => b.price - a.price);
            } else if (sortBy === 'lowest') {
                sortedProducts = products.slice().sort((a, b) => a.price - b.price);
            } else if (sortBy === 'newest') {
                sortedProducts = products.slice().sort((a, b) => new Date(b.created_at) - new Date(a.created_at));
            }

            const productCards = document.getElementById('product-cards');
            productCards.innerHTML = '';

            sortedProducts.slice(0, 8).forEach(product => {
                const card = `
                    <div class="col mb-5">
                        <div class="card h-100">
                            <img class="card-img-top" src="{{ asset('pictures') }}/${product.img}" alt="..." />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <h5 class="fw-bolder" style="font-size: 14px;">${product.product_name}</h5>
                                    ${product.price} IDR
                                </div>
                                <div class="mt-3">
                                    @foreach ($Sizes as $size)
                                        <button type="button" class="btn btn-outline-dark size-btn" data-size="{{ $size->name }}">{{ $size->name }}</button>
                                    @endforeach
                                </div>
                                <div class="mt-3">
                                    <div class="color-option-container mt-3">
                                        <span style="font-size: 10px; height: 20px; border-radius:40%; ">୨ৎ color only available as the display product ୨ৎ</span>
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
        }

        function getSortByFromUrl() {
            const urlParams = new URLSearchParams(window.location.search);
            return urlParams.get('sortBy') || 'newest';
        }

        window.onload = function() {
            const sortBy = getSortByFromUrl();
            sortProducts(sortBy);
        };

        document.querySelectorAll('.dropdown-item').forEach(item => {
            item.addEventListener('click', event => {
                const sortBy = event.target.textContent.toLowerCase();
                sortProducts(sortBy);
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            const sizeButtons = document.querySelectorAll('.size-btn');

            sizeButtons.forEach(button => {
                button.addEventListener('click', () => {
                    sizeButtons.forEach(btn => {
                        btn.classList.remove('active');
                    });

                    // Tambahkan kelas 'active' ke tombol yang diklik
                    button.classList.add('active');
                });
            });
        });
    </script>
@endsection
