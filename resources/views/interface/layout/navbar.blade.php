<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="/"><img src="{{ asset('interface/img/LOGO_NS.png') }}" alt="" style="width:250px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item {{ Route::is('welcome') ? 'active' : ''  }}"><a class="nav-link" href="{{ route('welcome') }}">Home</a></li>
                <li class="nav-item {{ Route::is('about') ? 'active' : '' }}"><a class="nav-link" href="{{ route('about') }}">Tentang Kami</a></li>
                <li class="nav-item {{ Route::is('service') ? 'active' : '' }}"><a class="nav-link" href="{{ route('service') }}">Layanan Kami</a></li>
                <li class="nav-item {{ Route::is('partner') ? 'active' : '' }}"><a class="nav-link" href="{{ route('partner') }}">Legal Partnership</a></li>
                <li class="nav-item {{ Route::is('picture') ? 'active' : '' }}"><a class="nav-link" href="{{ route('picture') }}">Galery</a></li>
                <li class="nav-item submenu dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">Karya Ilmiah</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item {{ Route::is('article') ? 'active' : '' }}"><a class="nav-link" href="{{ route('article') }}">Legal Opini</a></li>
                        <li class="nav-item {{ Route::is('file') ? 'active' : '' }}"><a class="nav-link" href="{{ route('file') }}">Jurnal</a></li>
                        <li class="nav-item {{ Route::is('break-news') ? 'active' : '' }}"><a class="nav-link" href="{{ route('break-news') }}">Berita</a></li>
                    </ul>
                </li>
                <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact')}}">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>
