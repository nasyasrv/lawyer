<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="/"><img src="{{ asset('interface/img/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="{{ route('welcome') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('service') }}">Service</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('superiority') }}">Superiority</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('partner') }}">Legal Partnership</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('galery') }}">Galery</a></li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">News</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="{{ route('article') }}">Legal Opini</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('jurnal') }}">Jurnal</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('segment') }}">Segmentasi Klien</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="/contact">Kontak</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <div class="social-icons d-flex align-items-center">
                    <a href="">
                        <li><i class="fab fa-facebook"></i></li>
                    </a>
                    <a href="">
                        <li><i class="fab fa-twitter"></i></li>
                    </a>
                    <a href="">
                        <li><i class="fab fa-dribbble"></i></li>
                    </a>
                    <a href="">
                        <li><i class="fab fa-behance"></i></li>
                    </a>
                </div>
                <li class="nav-item"><a href="#" class="search">
                        <i class="lnr lnr-magnifier" id="search"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
