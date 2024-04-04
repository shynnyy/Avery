<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container px-4 px-lg-5">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('index') }}" style="font-size: 12px;">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('female') }}" style="font-size: 12px;">FEMALE</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('male') }}" style="font-size: 12px;">MALE</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}" style="font-size: 12px;">ABOUT US</a></li>
            </ul>
            <form class="d-flex">
                <button class="btn" type="submit" style="font-size: 13px;"> <!-- Menambahkan style untuk mengurangi ukuran tombol menjadi 10px -->
                    <i class="bi-cart-fill me-1"></i>
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>
