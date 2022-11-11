@extends('layouts.masterLanding')
@section('title', 'SIG | Stunting Kota Kupang')
@section('content')

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->

                        <a href="/" class="logo">
                            <img src="landing/assets/images/logo.png" alt="SIG" />
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#welcome" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="/peta" class="scroll-to-section">Pemetaan</a></li>
                            <li class="scroll-to-section"><a href="/dataKasus/{{ 2021 }}">Data Kasus</a></li>
                            <li class="scroll-to-section"><a href="#about">Tentang Kami</a></li>
                            <li class="scroll-to-section"><a href="#contact-us">Hubungi Kami</a></li>
                            <li class="scroll-to-section"><a href="#services">Framework & Libraries</a></li>
                            <li class="scroll-to-section"><a href="/login"><i class="fa fa-sign-in fs-5 mt-2"></i></a>
                        </ul>

                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="text-center col-lg-7 col-md-12 col-sm-12 col-xs-12"
                        data-scroll-reveal="enter top move 30px over 0.6s after 0.4s">
                        <h1><strong>Sistem Informasi Geografis Sebaran Stunting kota Kupang</strong></h1>
                        <p> Sistem Informasi Geografis (SIG) bertujuan untuk memberikan informasi mengenai
                            lokasi serta Data tingkat penyebaran Stunting di wilayah Kota Kupang
                        </p>
                        <a href="/peta" class="button-28" role="button">Lihat Sebaran Stunting </a>
                        <div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->

    </div>
    <!-- ***** Welcome Area End ***** -->

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                            <div class="features-small-item">
                                <h5 class="features-title">Mudah Diakses</h5>
                                <p>Sistem dapat diakses dimana saja dan kapan saja dengan mudah</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                            <div class="features-small-item">
                                <h5 class="features-title">Responsif</h5>
                                <p>Hadir dengan tampilan yang simpel dan minimalis serta responsif dengan semua tampilan,
                                    pengguna dapat dengan mudah menejelajahi sistem ini</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->

                        <!-- ***** Features Small Item Start ***** -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12"
                            data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <h5 class="features-title">Data Akurat</h5>
                                <p>Data ini diambil dari Dinas Kesehatan Kota Kupang dimana sistem ini dapat memberikan
                                    informasi yang tepat dan akurat.</p>
                            </div>
                        </div>
                        <!-- ***** Features Small Item End ***** -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section py-2" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('/landing') }}/assets/images/left-image.png"
                        class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>Sistem Informasi Geografis Sebaran Stunting Kota Kupang</h5>
                    </div>
                    <div class="left-text">
                        <p> Sistem ini merupakan
                            situs web yang menyediakan informasi mengenai sebaran Stunting di wilayah kota kupang.
                            Dengan menggunakan Teknologi Mapping (Leaflet API dan GeoJSON), sistem ini mampu menampilkan
                            informasi serta data jumlah kasus Setunting per-kelurahan di kota kupang. Oleh karena itu sistem
                            ini diharapkan mampu membantu Dinas Kesehatan dalam memberikan informasi yang akurat mengenai
                            sebaran
                            Stunting kepada masyarakat Kota Kupang
                            .</p>
                        {{-- <a href="#about2" class="main-button">Discover More</a> --}}
                    </div>
                </div>
            </div>
            {{-- <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div> --}}
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
    <!-- ***** Features Big Item Start ***** -->
    <section class="section py-2" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="text-center col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix" style="margin-top: 100px;">
                    {{-- <div class="left-heading">
                        <h5>Curabitur aliquam eget tellus id porta</h5>
                    </div> --}}
                    {{-- <p>Proin justo sapien, posuere suscipit tortor in, fermentum mattis elit. Aenean in feugiat purus.</p> --}}
                    <ul>
                        <li>
                            <i class="fa-brands fa-whatsapp fa-3x" style="color:#174A41"></i>
                            <div class="text"style="color:#174A41">
                            {{-- <h6>Whatsapp</h6> --}}
                            <p>081-111-111</p>
                            <br>
                        </li>
                        <li>
                            <i class="fa-brands fa-instagram fa-3x" style="color:#174A41"></i>
                            <div class="text"style="color:#174A41">
                                {{-- <h6>Instagram</h6> --}}
                                <p>@qwerty</p>
                            </div>
                            <br>
                        </li>
                        <li>
                            <i class="fa-regular fa-envelope fa-3x" style="color:#174A41"></i>
                            <div class="text"style="color:#174A41">
                                {{-- <h6>Email</h6> --}}
                                <p>qwerty@email.com</p>
                            </div>
                            <br>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="{{ asset('/landing') }}/assets/images/right-image.png"
                        class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Features Small Start ***** -->
    <section class="section py-3" id="services">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                    <div class="item service-item">
                        <div class="icon">
                            <i class="fa-brands fa-laravel fa-3x mt-4 text-white"></i>
                        </div>
                        <h5 class="service-title">LARAVEL 9</h5>
                        <p>Laravel 9 adalah versi terbaru dari Laravel, framework PHP terpopuler saat ini. Laravel 9 membawa
                            banyak fitur baru dan perubahan, seperti Symfony Mailer dan persyaratan minimal PHP 8.</p>
                        <a href="https://laravel.com" class="main-button">Kunjungi <i
                                class="fa-solid fa-location-arrow"></i></a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i class="fa-brands fa-bootstrap fa-3x mt-4 text-white"></i>
                        </div>
                        <h5 class="service-title">BOOTSTRAP 5.2</h5>
                        <p>Bootstrap 5.2 adalah versi terbaru dari salah satu front-end framework terbaik yang cepat dan
                            ringan. untuk membantu proses pengembangan website.</p>
                        <a href="https://getbootstrap.com/" class="main-button">Kunjungi <i
                                class="fa-solid fa-location-arrow"></i></a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i class="fa-brands fa-js fa-3x mt-4 text-white"></i>
                        </div>
                        <h5 class="service-title">JQUERY 3.6.1</h5>
                        <p>jQuery adalah library JavaScript yang cepat, kecil, dan kaya fitur. jQuery 3.6.1 adalah adalah
                            versi terbaru dari jQuery, Itu membuat hal-hal seperti
                            traversal dan manipulasi dokumen HTML, penanganan acara, animasi, dan Ajax jauh lebih sederhana.
                            Dengan kombinasi fleksibilitas
                            dan ekstensibilitas.</p>
                        <a href="https://jquery.com/" class="main-button">Kunjungi <i
                                class="fa-solid fa-location-arrow"></i></a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i class="fa-brands fa-airbnb fa-3x mt-4 text-white"></i>
                        </div>
                        <h5 class="service-title">ADMIN LTE 3</h5>
                        <p>AdminLTE adalah sebuah piranti lunak yang sering digunakan web developer sebagai dashboard atau
                            template backend pada pengerjaan tertentu. Sebuah dashboard Administator dibuat menggunakan
                            gabungan beberapa bahasa pemograman JTML, PHP, CSS.</p>
                        <a href="https://adminlte.io/" class="main-button">Kunjungi <i
                                class="fa-solid fa-location-arrow"></i></a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i class="fa-solid fa-map-location-dot fa-3x mt-4 text-white"></i>
                        </div>
                        <h5 class="service-title">LEAFLET 1.8.0</h5>
                        <p>Leaflet 1.8.0 adalah versi terbaru library JavaScript yang bersifat bersifat open source untuk
                            peta
                            interaktif ramah
                            seluler.
                            Dengan berat hanya sekitar 42 KB JS, ia memiliki semua fitur pemetaan yang paling dibutuhkan
                            pengembang.</p>
                        <a href="https://leafletjs.com/" class="main-button">Kunjungi <i
                                class="fa-solid fa-location-arrow"></i></a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i class="fa-regular fa-bell fa-3x mt-4 text-white"></i>
                        </div>
                        <h5 class="service-title">SWEET ALERT 2</h5>
                        <p>SweetAlert merupakan library JavaScript yang menyediakan berbagai pilihan bagi kita untuk membuat
                            berbagai jenis pop-up alert seperti alert biasa, alert error, alert success, alert konfirmasi,
                            dan sebagainya.</p>
                        <a href="https://sweetalert2.github.io/" class="main-button">Kunjungi <i
                                class="fa-solid fa-location-arrow"></i></a>
                    </div>
                    <div class="item service-item">
                        <div class="icon">
                            <i class="fa-solid fa-font-awesome fa-3x mt-4 text-white"></i>
                        </div>
                        <h5 class="service-title">FONTAWESOME 6.2.0</h5>
                        <p>Cara termudah untuk mendapatkan ikon di situs web Anda adalah dengan Font Awesome. Font Awesome
                            6.2.0
                            adalah versi terbaru dari Font Awesome, semuanya dibundel hanya dengan ikon, alat, dan
                            pengaturan
                            yang Anda butuhkan.</p>
                        <a href="https://fontawesome.com/" class="main-button">Kunjungi <i
                                class="fa-solid fa-location-arrow"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </section>


@endsection
