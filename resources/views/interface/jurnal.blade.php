@extends('interface.layout.app')
@section('content')

    <!--================Home Banner Area =================-->
    <section class="banner_area ">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="{{ route('welcome') }}">Home</a>
                        <a href="{{ route('file') }}">Jurnal</a>
                    </div>
                    <h2>Jurnal</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container">
            <div class="section-top-border">
                <h3 class="mb-30 title_color">Jurnal Kami</h3>
                <div class="progress-table-wrap">
                    <table class="table">
                        <tbody>
                            @forelse ($file as $row)
                                <tr>
                                    <td>
                                        <div class="col-lg-4 col-md-4 col-sm-6 mb-4">
                                            <div class="single-blog">
                                                <div>
                                                    <img class="img-fluid" src="{{ asset('storage/' . $row->thumbnail) }}"
                                                        alt="{{ $row->name }}">
                                                </div>
                                                <div class="blog-details">
                                                    <h5>{{ $row->title }}</h5>
                                                    <p>{{ $row->description }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td style="display: flex; gap: 10px; align-items: center;">
                                        <a href="{{ asset('storage/' . $row->pdf_file) }}" class="btn btn-primary"
                                        target="_blank">Lihat File</a>

                                        <a class="btn btn-success" href="{{ route('download-pdf', $row->id) }}">Unduh PDF <i
                                                class="fas fa-download"></i>
                                        </a>
                                    </td>

                                </tr>
                            @empty
                                <h4>Kami belum memiliki Jurnal</h4>
                            @endforelse

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->
