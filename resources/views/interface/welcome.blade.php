@extends('interface.layout.app')
@section('content')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area overlay">
        <div class="banner_inner">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner_content">
                        <h2 style="font-family: 'Poppins', sans-serif;margin-bottom: -20px;"> KANTOR HUKUM </h2> <br>
                        <h2 style="font-family: 'Poppins', sans-serif;">NURUL SAFII, S.H., M.H., C.MSP  & PARTNERS</h2> <br>
                        <h3 style="font-family: 'Poppins', sans-serif;color: #fff;">ADVOKAT – MEDIATOR –  KUNSULTAN HUKUM</h3>
                        <h5 class="mb-4"
                            style="text-align: center; font-size: 20px; color: #fff; margin-top: 30px; margin-bottom: 20px; font-family: 'Times New Roman', Georgia, serif; font-style: italic;">
                            "Solusi Hukum Terpercaya, Solusi Tepat Untuk Anda"
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Home Banner Area =================-->

    <!--================ Start Video Area =================-->
    <section class="section_gap_top" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 overlay">
                    <div class="justify-content-center align-items-center d-flex">
                        <img src="{{ asset('interface/img/LOGO_NS_2.png') }}" alt="logo" class="img-fluid"
                            style="width: 400px; border-radius: 10%;">
                    </div>
                </div>
                <div class="col-lg-6 video-right">
                    <h1>PROFIL KANTOR HUKUM</h1>
                    <p style="text-align: justify;">Kantor Hukum Nurul Safii, S.H., M.H., C.MSP & PARTNERS adalah Kantor hukum independen yang hadir
                        sebagai representasi integritas, kecermatan, dan keberanian dalam menegakkan keadilan di tengah
                        kompleksitas dinamika hukum.
                        Berdiri di atas nilai-nilai luhur profesi hukum, Kantor Hukum ini didirikan oleh Nurul Safii, S.H.,
                        M.H., C.MSP, seorang advokat sekaligus konsultan strategis yang dikenal atas ketajaman analisis
                        hukumnya dan kepedulian sosialnya....</p>
                    <a href="{{ route('about') }}" class="primary-btn">Learn More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- about -->
    <section class="about-area section_gap_top mt-3" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Layanan Hukum Unggulan</h1>
                    <div class="about-inner">
                        <div class="row">
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <img class="img-fluid mb-3" src="{{ asset('interface/img/1.jpg') }}" alt="">
                                    <h5>Litigasi & Penyelesaian Sengketa</h5>
                                    <p>
                                        - Perdata: Gugatan wanprestasi, PMH, waris, perdata agraria <br>
                                        - Pidana: Pendampingan tersangka/terdakwa, eksepsi, pleidoi <br>
                                        - Tata Usaha Negara: Sengketa administrasi dan kebijakan pemerintah

                                    </p>
                                </div>
                            </div>
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <img class="img-fluid mb-3" src="{{ asset('interface/img/2.jpg') }}" alt="">
                                    <h5>Konsultasi & Pendampingan Hukum Bisnis</h5>
                                    <p>
                                        - Legal opinion, kontrak bisnis, merger & akuisisi <br>
                                        - Pendirian badan usaha, legal compliance, mitigasi risiko
                                    </p>
                                </div>
                            </div>
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <img class="img-fluid mb-3" src="{{ asset('interface/img/3.jpg') }}" alt="">
                                    <h5>Hukum Keluarga & Waris</h5>
                                    <p>
                                        - Cerai gugat/talak, pembagian harta bersama <br>
                                        - Sengketa waris Islam dan adat, perjanjian pranikah
                                    </p>
                                </div>
                            </div>
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <img class="img-fluid mb-3" src="{{ asset('interface/img/4.jpg') }}" alt="">
                                    <h5>Hukum Ketenagakerjaan & Hubungan Industrial</h5>
                                    <p>
                                        - PHK sepihak, perselisihan hak & kepentingan <br>
                                        - Penyelesaian bipartit, tripartit, dan litigasi industrial
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <img class="img-fluid mb-3" src="{{ asset('interface/img/8.jpg') }}" alt="">
                                    <h5>Hukum Agraria & Pertanahan</h5>
                                    <p>
                                        - Sengketa lahan, pendaftaran tanah, pengurusan sertifikat <br>
                                        - Advokasi hak atas tanah ulayat dan masyarakat adat
                                    </p>
                                </div>
                            </div>
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <img class="img-fluid mb-3" src="{{ asset('interface/img/6.jpg') }}" alt="">
                                    <h5>Mediasi & Negosiasi Strategis</h5>
                                    <p>
                                        - Penyelesaian sengketa tanpa pengadilan dengan pendekatan win-win <br>
                                        - Mediasi keluarga, perbankan, usaha, dan property
                                    </p>
                                </div>
                            </div>
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <img class="img-fluid mb-3" src="{{ asset('interface/img/7.jpg') }}" alt="">
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
            </div>
        </div>
    </section>
    <!-- end about -->
    <!--================ End video Area =================-->

    <!--================ Start service Area =================-->
    <section class="service-area section_gap" style="margin-bottom:0px;">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="single-service">
                        <div class="service-details mb-3">
                            <h1 style="color: white;">Alasan Memilih Kami ?</h1>
                        </div>
                        <div class="service-details">
                            <p style="color: white;">
                                <i class="fas fa-check-circle"></i> Pendampingan hukum yang tajam, solutif, dan strategis
                                <br>
                                <i class="fas fa-check-circle"></i> Tim profesional yang berdedikasi tinggi dan kompeten
                                <br>
                                <i class="fas fa-check-circle"></i> Transparansi biaya & progres perkara secara berkala <br>
                                <i class="fas fa-check-circle"></i> Pendekatan humanis dalam perkara keluarga & waris <br>
                                <i class="fas fa-check-circle"></i> Penguatan kesadaran hukum melalui edukasi public
                            </p>
                        </div>
                        <div class="get-know mt-5">
                            <h1 style="color: white;">SEGMENTASI KLIEN</h1>
                            <p style="color: white;">
                                Kami melayani spektrum klien yang luas dengan pendekatan personal dan profesional, di
                                antaranya:
                            </p>

                            <p style="white-space: pre-line; color: white;">
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
    <!--================ End service Area =================-->

    <!--================ Start Team Area =================-->
    <section class="section_gap team-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="main_title">
                        <h2>Legal Partnership</h2>
                        <p>Berikut merupakan tim sukses kami</p>
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

    <!--================ Start CTA Area =================-->
    <div class="cta-area section_gap overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1>Berikan Rating dan Ulasan anda</h1>
                    <p style="color: white;">Kami sangat menghargai pendapat anda</p>
                    <a href="{{ route('contact') }}" class="primary-btn mb-4">Kirim </a>
                </div>
                <div class="col-lg-6">
                    <div id="review-container"
                        class="rounded shadow-sm border \">
                        <div class="review-list">
                        @foreach ($reviews as $review)
                            <div class="review-item card mb-0">
                                <div class="card-body">
                                    <div class="d-flex flex-column flex-md-row align-items-md-center mb-2">
                                        <div class="star-rating me-2">
                                            @for ($i = 0; $i < $review->rating; $i++)
                                                ★
                                            @endfor
                                            @for ($i = $review->rating; $i < 5; $i++)
                                                ☆
                                            @endfor
                                        </div>
                                        <div class="fw-bold">{{ $review->name }}</div>
                                    </div>
                                    <p class="mb-1">{{ $review->message }}</p>
                                    <small class="text-muted mb-2">Dikirim pada:
                                        {{ $review->created_at->format('d F Y') }}</small>
                                </div>
                            </div>
                        @endforeach
                        <div class="review-item card mb-0">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-md-row align-items-md-center mb-2">
                                    <div class="star-rating me-2">★★★★★</div>
                                    <div class="fw-bold">Nasya Asriva</div>
                                </div>
                                <p class="mb-1">Pelayanan sangat ramah dan cepat. Sangat direkomendasikan!</p>
                                <small class="text-muted mb-2">Dikirim pada: 10 Juli 2025</small>
                            </div>
                        </div>

                        <div class="review-item card mb-0">
                            <div class="card-body">
                                <div class="d-flex flex-column flex-md-row align-items-md-center mb-2">
                                    <div class="star-rating me-2">★★★★☆</div>
                                    <div class="fw-bold">Dimas A.</div>
                                </div>
                                <p class="mb-1">Proses cukup lancar, hanya saja responnya sedikit lambat di awal.</p>
                                <small class="text-muted mb-2">Dikirim pada: 5 Juli 2025</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--================ End CTA Area =================-->

    <!--================ Start Blog Area =================-->
    <section class="section_gap blog_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="main_title">
                        <h2>Berita Terbaru dari Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- single-blog -->
                @forelse($news as $row)
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-blog">
                        <div>
                             <img src="{{ asset('storage/' . $row->picture) }}" alt="Gambar {{ $row->name }}"
                                        class="img-fluid" >
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta">
                                <span>{{ \Carbon\Carbon::parse($row->date_publish)->format('d F Y') }} | {{ $row->author }}</span>
                            </div>
                            <h5><a href="{{ $row->url }}">{{$row->title}}</a></h5>
                        </div>
                    </div>
                </div>
                @empty
                <h4>Kami belum memiliki berita</h4>
                @endforelse
            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->

    @push('script')
        <script>
            const list = document.querySelector('.review-list');
            const items = document.querySelectorAll('.review-item');
            const itemHeight = items[0].offsetHeight;
            let index = 0;

            setInterval(() => {
                index++;
                if (index >= items.length) index = 0;

                list.style.transform = `translateY(-${index * itemHeight}px)`;
            }, 4000); // Ganti ulasan setiap 4 detik
        </script>
    @endpush
