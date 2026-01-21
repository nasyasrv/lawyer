@extends('interface.layout.app')
@section('content')

<!--================ Start Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="{{ route('welcome') }}">Home</a>
                        <a href="{{ route('break-news') }}">Berita Terbaru dari Kami</a>
                    </div>
                    <h2>Berita Terbaru dari Kami</h2>
                </div>
            </div>
        </div>
    </section>
<!--================ End Home Banner Area =================-->

<!--================Blog Categorie Area =================-->
<section class="blog_categorie_area">
    <div class="container">
        <div class="row justify-content-center">
            <!-- single-blog -->
            @forelse($news as $row)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-blog">
                            <div>
                                <img src="{{ asset('storage/' . $row->picture) }}" alt="Gambar {{ $row->name }}"
                                    class="img-fluid">
                            </div>
                            <div class="blog-details">
                                <div class="blog-meta">
                                    <span>{{ \Carbon\Carbon::parse($row->date_publish)->format('d F Y') }} |
                                        {{ $row->author }}</span>
                                </div>
                                <h5><a href="{{ $row->url }}">{{ $row->title }}</a></h5>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4>Kami belum memiliki berita</h4>
                @endforelse
        </div>
    </div>
</section>
<!--================Blog Categorie Area =================-->
@endsection