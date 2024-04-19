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
</style>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('pictures/P1.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size: 14px;">FREAK SEE THROUGH SLIM SHIRT</h5>
                            <!-- Product price-->
                           IDR
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-view-detail mt-auto" href="#">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('pictures/P2.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size: 14px;">BULB DENIM WIDE PANTS</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">IDR</span>
                           IDR
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-view-detail mt-auto" href="#">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('pictures/P3.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size: 14px;">SMOOTHIE BURTON WRAP HOOD</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">IDR</span>
                            IDR
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-view-detail mt-auto" href="#">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('pictures/P4.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size: 14px;">FEAR DENIM WIDE PANTS</h5>
                            <!-- Product price-->
                            IDR
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-view-detail mt-auto" href="#">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('pictures/P5.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size: 14px;">LUCKY SHIRRING TOP & MUFFLER</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">IDR</span>
                            IDR
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-view-detail mt-auto" href="#">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('pictures/P6.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size: 14px;">VENUS RIBBON CARGO WIDE PANTS</h5>
                            <!-- Product price-->
                            IDR
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-view-detail mt-auto" href="#">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Sale badge-->
                    <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('pictures/P7.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size: 14px;">RIBBON PLEATED SKIRT</h5>
                            <!-- Product price-->
                            <span class="text-muted text-decoration-line-through">IDR</span>
                            IDR
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-view-detail mt-auto" href="#">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-5">
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" src="{{ asset('pictures/P8.jpg') }}" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h5 class="fw-bolder" style="font-size: 14px;">LIVE SHIRRING TOP & MUFFLER</h5>
                            <!-- Product price-->
                            IDR
                        </div>
                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="s">S</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="m">M</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="l">L</button>
                            <button type="button" class="btn btn-outline-dark size-btn" data-size="xl">XL</button>
                        </div>
                    </div>
                    <!-- Product actions-->
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <div class="text-center">
                            <a class="btn btn-view-detail mt-auto" href="#">View detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
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

