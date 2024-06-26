<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container px-4 px-lg-5 d-flex justify-content-center"> <!-- Mengatur navbar sebagai flex container dan menengahkannya secara horisontal -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="{{ route('index') }}" style="font-size: 12px;">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('female') }}" style="font-size: 12px;">FEMALE</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('male') }}" style="font-size: 12px;">MALE</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}" style="font-size: 12px;">ABOUT US</a></li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('index') }}">
                        <img act src="{{ asset('img/brandlogo.jpeg') }}" alt="Description" style="width: 80px; height: auto;">
                    </a>
                </li>
            </ul>
            <form class="d-flex">
                <a href="{{ route('dashboard') }}" style="font-size: 13px;">
                    <img src="{{ asset('img/account.jpg') }}" alt="My Account" style="width: 20px; height: 20px; margin-right: 20px;">
                </a>
                <a href="{{ route('cart') }}" style="font-size: 13px;">
                    <img src="{{ asset('img/cart.png') }}" alt="Cart" style="width: 20px; height: 20px; margin-right: 20px;">
                </a>
            </form>
        </div>
    </div>
</nav>

<style>
.navbar-nav .nav-link.active {
    margin-left: 370px; /* Menggeser elemen nav-link aktif sejauh 90px */
}
</style>
