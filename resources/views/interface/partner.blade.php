@extends('interface.layout.app')
@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="{{ route('welcome') }}">Home</a>
                        <a href="{{ route('partner') }}">Legal Patnership</a>
                    </div>
                    <h2>Legal Patnership</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Team Area =================-->
    <section class="section_gap team-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="main_title">
                        <h2>Mari bertemu dengan tim kami!!</h2>
                        <p>Kami memiliki anggota tim yang akan membantu selama pelayanan berlangsung</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse ($patners as $row)
                    <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                        <div class="single-blog">
                            <div style=" width: 100%; height: 500px;">
                                <img class="img-fluid" src="{{ asset('storage/' . $row->photo) }}"
                                    alt="{{ $row->name }}" >
                            </div>
                            <div class="blog-details">
                                <div class="blog-meta">
                                    <span>{{ $row->name }}</span>
                                </div>
                                <h5><strong>{{ $row->position }}</strong></h5>
                                <p class="text-wrap text-break" style="white-space: pre-line;">
                                    {{ $row->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4>Kami belum memiliki Partner</h4>
                @endforelse
            </div>
        </div>
    </section>
    <!--================ End Team Area =================-->
@endsection