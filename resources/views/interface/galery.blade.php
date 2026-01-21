@extends('interface.layout.app')
@section('content')

    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="{{ route('welcome') }}">Home</a>
                        <a href="{{ route('picture') }}">Galeri Kami</a>
                    </div>
                    <h2>Galeri Kami</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="title_color">Image Gallery</h3>
                <div class="row gallery-item">
                    @foreach ($galeries as $row)
                        <div class="col-md-4">
                            <a href="{{ asset('storage/' . $row->image) }}" class="img-gal">
                                <div class="single-gallery-image"
                                    style="background: url('{{ asset('storage/' . $row->image) }}'); background-size: cover; background-position: center;">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection