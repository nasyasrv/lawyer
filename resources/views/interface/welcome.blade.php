@extends('interface.layout.app')
@section('contents')
    <!--================ Start Home Banner Area =================-->
    <section class="home_banner_area overlay">
        <div class="banner_inner">
            <div class="container">
                <div class="row fullscreen d-flex align-items-center justify-content-center">
                    <div class="banner_content">
                        <h2 class="mt-4">
                            KANTOR HUKUM NURUL SAFII, S.H., M.H., C.MSP <br> & PARTNERS ADVOKAT – MEDIATOR – <br> KUNSULTAN
                            HUKUM
                        </h2>
                        <h5 class="mb-4"
                            style="text-align: center; font-size: 20px; color: #fff; margin-top: 30px; margin-bottom: 20px; font-family: 'Poppins', sans-serif;">
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
                    <p>Kantor Hukum Nurul Safii, S.H., M.H., C.MSP & PARTNERS adalah Kantor hukum independen yang hadir
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
                                    <h5>Hukum Ketenagakerjaan & Hubungan Industrial</h5>
                                    <p>
                                        - PHK sepihak, perselisihan hak & kepentingan <br>
                                        - Penyelesaian bipartit, tripartit, dan litigasi industrial
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
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
    <section class="service-area ">
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
                    </div>
                </div>
                <div class="col-lg-5">
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
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed eiusmod tempor incididunt labore
                            dolore magna
                            aliqua enim minim veniam quis nostrud.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <!-- single-team-member -->
                <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                    <div class="single_member">
                        <div class="author">
                            <img class="img-fluid" src="{{ asset('interface/img/team/team1.jpg') }}" alt="">
                        </div>
                        <div class="author_decs">
                            <h5>Nurul Safii, S.H., M.H., C.Msp</h5>
                            <p> <strong>Pendiri & Managing Partner</strong></p>
                            <p style="white-space: pre-line;">
                                - Advokat Dan Konsultan Hukum
                                - Magister Hukum (Konsentrasi Hukum Bisnis)
                                - C.Msp (Certified Mediation Skill Practitioner )
                                - Pengacara Ketenagakerjaan Bersertifikat
                                - Praktisi Dan Edukator Hukum, Pembicara Seminar Hukum
                                - Penggagas Layanan Hukum Digital Berbasis Edukasi & Advokasi Public
                            </p>
                        </div>
                    </div>
                </div>
                <!-- single-team-member -->
                <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                    <div class="single_member">
                        <div class="author">
                            <img class="img-fluid" src="{{ asset('interface/img/team/team2.jpg') }}" alt="">
                        </div>
                        <div class="author_decs">
                            <h5>Ethel Davis</h5>
                            <p class="profession">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mt-5">
                    <div class="single_member">
                        <div class="author">
                            <img class="img-fluid" src="{{ asset('interface/img/team/team3.jpg') }}" alt="">
                        </div>
                        <div class="author_decs">
                            <h5>Ethel Davis</h5>
                            <p class="profession">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                in reprehenderit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Team Area =================-->

    <!--================ Start CTA Area =================-->
    <div class="cta-area section_gap overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <h1>Get to Know Project Estimate?</h1>
                    <p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope.
                        It’s
                        exciting to think about setting up your own viewing station whether that is on the deck</p>
                    <a href="#" class="primary-btn">Get Free Estimate</a>
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
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img class="img-fluid" src="{{ asset('interface/img/blog/h-blog1.jpg') }}" alt="">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta">
                                <span>25 june, 2018 | By Mark Wiens</span>
                            </div>
                            <h5><a href="#">Addiction When Gambling <br>
                                    Becomes A Problem</a></h5>
                            <p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys
                                spend hours in
                                front of their desktops.</p>
                        </div>
                    </div>
                </div>
                <!-- single-blog -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img class="img-fluid" src="{{ asset('interface/img/blog/h-blog2.jpg') }}" alt="">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta">
                                <span>25 june, 2018 | By Mark Wiens</span>
                            </div>
                            <h5><a href="#">Addiction When Gambling <br>
                                    Becomes A Problem</a></h5>
                            <p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys
                                spend hours in
                                front of their desktops.</p>
                        </div>
                    </div>
                </div>
                <!-- single-blog -->
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-blog">
                        <div class="blog-thumb">
                            <img class="img-fluid" src="{{ asset('interface/img/blog/h-blog3.jpg') }}" alt="">
                        </div>
                        <div class="blog-details">
                            <div class="blog-meta">
                                <span>25 june, 2018 | By Mark Wiens</span>
                            </div>
                            <h5><a href="#">Addiction When Gambling <br>
                                    Becomes A Problem</a></h5>
                            <p>Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys
                                spend hours in
                                front of their desktops.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Blog Area =================-->
