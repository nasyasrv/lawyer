@extends('interface.layout.app')
@section('content')

<!--================Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner overlay d-flex align-items-center">
        <div class="container">
            <div class="banner_content text-center">
                <div class="page_link">
                    <a href="{{route('welcome')}}">Home</a>
                    <a href="{{ route('service') }}">Layanan Kami</a>
                </div>
                <h2>Layanan Kami</h2>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->

<!--================ Start service-2 Area =================-->
<section class="service-area-2 section_gap">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6">
                <div class="service-2-left">
                    <div class="get-know">
                        <h1>ALASAN MEMILIH KAMI</h1>
                        <p>
                            <i class="fas fa-check-circle"></i> Pendampingan hukum yang tajam, solutif, dan strategis
                            <br>
                            <i class="fas fa-check-circle"></i> Tim profesional yang berdedikasi tinggi dan kompeten
                            <br>
                            <i class="fas fa-check-circle"></i> Transparansi biaya & progres perkara secara berkala <br>
                            <i class="fas fa-check-circle"></i> Pendekatan humanis dalam perkara keluarga & waris <br>
                            <i class="fas fa-check-circle"></i> Penguatan kesadaran hukum melalui edukasi public
                        </p>
                    </div>

                    <div class="get-know">
                        <h1>SEGMENTASI KLIEN</h1>
                        <p>
                            Kami melayani spektrum klien yang luas dengan pendekatan personal dan profesional, di
                            antaranya:
                        </p>

                        <p style="white-space: pre-line;">
                            - Perorangan dan keluarga
                            - Usaha mikro, kecil, dan menengah (UMKM)
                            - Perusahaan swasta dan korporasi nasional
                            - Instansi pemerintahan dan BUMDes
                            - Lembaga pendidikan, yayasan, dan organisasi sosial

                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="service-2-right">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="left-image">
                                <div class="s-img"><img class="img-fluid"
                                        src="{{ asset('interface/img/service/service4.jpg') }}" alt=""></div>
                                <div class="s-img"><img class="img-fluid"
                                        src="{{ asset('interface/img/service/service5.jpg') }}" alt=""></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="right-image">
                                <div class="s-img"><img class="img-fluid"
                                        src="{{ asset('interface/img/service/service6.jpg') }}" alt=""></div>
                                <div class="s-img"><img class="img-fluid"
                                        src="{{ asset('interface/img/service/service7.jpg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End service-2 Area =================-->

<!--================ Start service Area =================-->
<section class="service-area section_gap" style="margin:0px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="main_title">
                    <h1>LAYANAN HUKUM UNGGULAN</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div>
                        <img class="img-fluid" src="{{ asset('interface/img/1.jpg') }}" alt="">
                    </div>
                    <div class="service-details">
                        <h5>Litigasi & Penyelesaian Sengketa</h5>
                        <p>
                            - Perdata: Gugatan wanprestasi, PMH, waris, perdata agraria <br>
                            - Pidana: Pendampingan tersangka/terdakwa, eksepsi, pleidoi <br>
                            - Tata Usaha Negara: Sengketa administrasi dan kebijakan pemerintah

                        </p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div>
                        <img class="img-fluid" src="{{ asset('interface/img/2.jpg') }}" alt="">
                    </div>
                    <div class="service-details">
                        <h5>Konsultasi & Pendampingan Hukum Bisnis</h5>
                        <p>
                            - Legal opinion, kontrak bisnis, merger & akuisisi <br>
                            - Pendirian badan usaha, legal compliance, mitigasi risiko
                        </p>
                    </div>
                </div>
            </div>
            <!-- single service -->
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div>
                        <img class="img-fluid" src="{{ asset('interface/img/3.jpg') }}" alt="">
                    </div>
                    <div class="service-details">
                        <h5>Hukum Keluarga & Waris</h5>
                        <p>
                            - Cerai gugat/talak, pembagian harta bersama <br>
                            - Sengketa waris Islam dan adat, perjanjian pranikah
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div>
                        <img class="img-fluid" src="{{ asset('interface/img/4.jpg') }}" alt="">
                    </div>
                    <div class="service-details">
                        <h5>Hukum Ketenagakerjaan & Hubungan Industrial</h5>
                        <p>
                            - PHK sepihak, perselisihan hak & kepentingan <br>
                            - Penyelesaian bipartit, tripartit, dan litigasi industrial
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div>
                        <img class="img-fluid" src="{{ asset('interface/img/8.jpg') }}" alt="">
                    </div>
                    <div class="service-details">
                        <h5>Hukum Agraria & Pertanahan</h5>
                        <p>
                            - Sengketa lahan, pendaftaran tanah, pengurusan sertifikat <br>
                            - Advokasi hak atas tanah ulayat dan masyarakat adat
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div>
                        <img class="img-fluid" src="{{ asset('interface/img/6.jpg') }}" alt="">
                    </div>
                    <div class="service-details">
                        <h5>Mediasi & Negosiasi Strategis</h5>
                        <p>
                            - Penyelesaian sengketa tanpa pengadilan dengan pendekatan win-win <br>
                            - Mediasi keluarga, perbankan, usaha, dan property
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="single-service">
                    <div>
                        <img class="img-fluid" src="{{ asset('interface/img/7.jpg') }}" alt="">
                    </div>
                    <div class="service-details">
                        <h5>Surat- menyurat </h5>
                        <p>
                            - Surat Pelaporan/ Surat Pengaduan <br>
                            - Surat Permohonan Klarifikasi <br>
                            - Surat Somasi <br>
                            - Surat Perjanjian <br>
                            - Surat keberatan dan Penolakan <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ End service Area =================-->
