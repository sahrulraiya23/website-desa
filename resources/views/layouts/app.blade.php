<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title', 'Website Desa Ulu Kalo')</title>

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">

    @stack('styles')
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">Desa Ulu Kalo</h1>
            </a>

            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="{{ route('home') }}"
                            class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a></li>
                    <li><a href="{{ route('sejarah') }}"
                            class="{{ request()->routeIs('sejarah') ? 'active' : '' }}">Sejarah</a></li>
                    <li><a href="{{ route('visi-misi') }}"
                            class="{{ request()->routeIs('visi-misi') ? 'active' : '' }}">Visi Misi</a></li>
                    <li><a href="{{ route('peta') }}" class="{{ request()->routeIs('peta') ? 'active' : '' }}">Peta
                            Desa</a></li>
                    <li><a href="{{ route('struktur') }}"
                            class="{{ request()->routeIs('struktur') ? 'active' : '' }}">Struktur Desa</a></li>
                    <li><a href="{{ route('potensi') }}"
                            class="{{ request()->routeIs('potensi') ? 'active' : '' }}">Potensi</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>

            <a class="btn-getstarted" href="#about">Get Started</a>

        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer accent-background">
        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span class="sitename">Desa Ulu Kalo</span>
                    </a>
                    <p>Deskripsi singkat tentang desa. Cras fermentum odio eu feugiat lide par naso tierra. Justo eget
                        nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.
                    </p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter-x"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Link Cepat</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('sejarah') }}">Sejarah</a></li>
                        <li><a href="{{ route('visi-misi') }}">Visi Misi</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Profil Desa</h4>
                    <ul>
                        <li><a href="{{ route('peta') }}">Peta Desa</a></li>
                        <li><a href="{{ route('struktur') }}">Struktur Desa</a></li>
                        <li><a href="{{ route('potensi') }}">Potensi</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Hubungi Kami</h4>
                    <p>Jalan Poros Desa</p>
                    <p>Ulu Kalo, Kecamatan Iwoimendaa</p>
                    <p>Kabupaten Kolaka, Sulawesi Tenggara</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+62 8XX XXXX XXXX</span></p>
                    <p><strong>Email:</strong> <span>info@ulukalo.desa.id</span></p>
                </div>
            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>© <span>Copyright</span> <strong class="px-1 sitename">Desa Ulu Kalo</strong> <span>All Rights
                    Reserved</span></p>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>

    <!-- Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    @stack('scripts')
</body>

</html>
