@extends('frontend.layouts.app')
@section('contents')
<style>
    .size-btn {
      width: 30px; /* Atur lebar sesuai kebutuhan */
      height: 25px; /* Atur tinggi sesuai kebutuhan */
      margin: 12px; /* Atur jarak antar tombol */
      background-color: white; /* Warna latar belakang awal */
      color: black; /* Warna teks awal */
      border: 1px solid black; /* Border hitam */
      transition: background-color 0.3s, color 0.3s; /* Efek transisi saat berubah warna */
      font-size: 10px; /* Atur ukuran teks */
      }

      .size-btn:hover {
      background-color: #f2f2f2; /* Warna latar belakang saat di-hover */
      }


      .size-btn.active {
      background-color: black; /* Warna latar belakang saat di-klik */
      color: white; /* Warna teks saat di-klik */
      }
    .btn-view-detail {
    display: inline-block;
    padding: 8px 16px; /* Atur padding sesuai kebutuhan */
    border: 1px solid black; /* Atur border */
    background-color: transparent; /* Latar belakang transparan */
    color: black; /* Warna teks */
    text-decoration: none; /* Hapus dekorasi teks */
    font-size: 14px; /* Atur ukuran teks */
    transition: background-color 0.3s, color 0.3s; /* Efek transisi saat hover */
    }
    .btn-view-detail:hover {
    background-color: black; /* Warna latar belakang saat di-hover */
    color: white; /* Warna teks saat di-hover */
    }
    .size-btn-container {
    display: flex; /* Gunakan flexbox */
    justify-content: center; /* Posisikan tombol di tengah secara horizontal */
    margin-top: 10px; /* Atur margin atas */
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
    // Ambil semua tombol ukuran
const sizeButtons = document.querySelectorAll('.size-btn');

// Tambahkan event listener untuk setiap tombol ukuran
sizeButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Hilangkan kelas 'active' dari semua tombol
        sizeButtons.forEach(btn => {
            btn.classList.remove('active');
        });

        // Tambahkan kelas 'active' ke tombol yang diklik
        button.classList.add('active');
    });
});

</script>

@endsection

