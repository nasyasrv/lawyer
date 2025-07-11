@extends('interface.layout.app')
@section('content')
    <!--================Home Banner Area =================-->
    <section class="banner_area">
        <div class="banner_inner overlay d-flex align-items-center">
            <div class="container">
                <div class="banner_content text-center">
                    <div class="page_link">
                        <a href="{{ route('welcome') }}">Home</a>
                        <a href="{{ route('about') }}" style="color:#e2a807">About Us</a>
                    </div>
                    <h2>About Us</h2>
                </div>
            </div>
        </div>
    </section>
    <!--================End Home Banner Area =================-->

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
                        kompleksitas dinamika hukum. Berdiri di atas nilai-nilai luhur profesi hukum, Kantor Hukum ini
                        didirikan oleh Nurul Safii, S.H., M.H., C.MSP, seorang advokat sekaligus konsultan strategis yang
                        dikenal atas ketajaman analisis hukumnya dan kepedulian sosialnya.
                        Kami bukan sekadar penyedia jasa hukum, melainkan mitra strategis yang mendampingi klien dalam
                        menghadapi risiko hukum, merumuskan langkah taktis, dan memenangkan setiap proses hukum secara
                        bermartabat. Dengan pendekatan yang sistematis, berbasis riset, dan berorientasi pada hasil, kami
                        meyakini bahwa keadilan bukan hanya untuk dicari tetapi untuk diperjuangkan dengan kehormatan.
                    </p>
                </div>
                <div class="col-lg-12 mt-4">
                    <h1 class="text-center">VISI</h1>
                    <p class="text-center mb-4">
                        <strong>
                        "Menjadi Kantor hukum yang unggul dan terpercaya secara nasional, dengan reputasi sebagai pelindung
                        hak-hak hukum yang tangguh, profesional, dan progresif."</strong>
                    </p>

                    <h1 class="text-center">MISI</h1>
                    <p class="mb-4" style="white-space: pre-line;">
                        1. Menyediakan layanan hukum yang berstandar tinggi, responsif, dan berorientasi solusi.
                        2. Menjaga marwah profesi advokat melalui integritas, objektivitas, dan keteladanan.
                        3. Mendorong terciptanya kepastian dan keadilan hukum bagi setiap klien.
                        4. Memberikan edukasi hukum yang membumi, mencerdaskan, dan membebaskan.
                        5. Membangun kemitraan jangka panjang dengan entitas bisnis dan institusi negara.
                    </p>
                </div>
            </div>
    </section>
    <!-- about -->
    <section class="about-area section_gap_top mt-3" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">NILAI FUNDAMENTAL</h1>
                    <div class="about-inner">
                        <div class="row">
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <h5>Integritas</h5>
                                    <p>
                                        Menjaga kejujuran sebagai fondasi dalam setiap tindakan hukum.
                                    </p>
                                </div>
                            </div>
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <h5>Keberanian </h5>
                                    <p>
                                        Bertindak tegas dalam membela kepentingan klien, tanpa kompromi pada keadilan.
                                    </p>
                                </div>
                            </div>
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <h5>Profesionalisme </h5>
                                    <p>
                                       Berpegang pada etika, kompetensi, dan ketelitian dalam setiap perkara.
                                    </p>
                                </div>
                            </div>
                            <!-- single success -->
                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <h5>Inovasi </h5>
                                    <p>
                                        – Mengintegrasikan pendekatan hukum modern dengan strategi kontemporer.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-3">
                                <div class="single-success">
                                    <h5>Kepedulian </h5>
                                    <p>
                                        Memahami bahwa hukum harus berpihak kepada yang lemah dan membutuhkan.
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
    <!-- about -->
    <section class="about-area section_gap_top mt-3 mb-3" id="about">
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
