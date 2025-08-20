@extends('layouts.app')

@section('title', 'Beranda - Website Desa Ulu Kalo')

@section('content')

    <!-- Hero Section -->
    <section id="hero" class="hero section accent-background">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                    <h1 data-aos="fade-up">Selamat Datang di Desa Ulu Kalo</h1>
                    <p data-aos="fade-up" data-aos-delay="100">Desa yang indah, sejahtera, dan penuh potensi.</p>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="#about" class="btn-get-started">Jelajahi Desa</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out">
                    <img src="{{ asset('assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- /Hero Section -->
    <section id="services" class="services section">

        <div class="container section-title" data-aos="fade-up">
            <h2>Jelajahi Desa</h2>
            <p>Temukan informasi lengkap mengenai Desa Ulu Kalo melalui menu di bawah ini.</p>
        </div>
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-clock-history"></i>
                        </div>
                        <h4 class="title"><a href="{{ route('sejarah') }}" class="stretched-link">Sejarah Desa</a></h4>
                        <p class="description">Kilas balik dan perjalanan historis terbentuknya Desa Ulu Kalo dari masa ke
                            masa.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-bullseye"></i>
                        </div>
                        <h4 class="title"><a href="{{ route('visi-misi') }}" class="stretched-link">Visi & Misi</a></h4>
                        <p class="description">Arah, tujuan, dan cita-cita pembangunan Desa Ulu Kalo untuk masa depan yang
                            lebih baik.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-map"></i>
                        </div>
                        <h4 class="title"><a href="{{ route('peta') }}" class="stretched-link">Peta Wilayah</a></h4>
                        <p class="description">Lihat lokasi geografis, batas wilayah, dan demografi Desa Ulu Kalo secara
                            visual.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-diagram-3"></i>
                        </div>
                        <h4 class="title"><a href="{{ route('struktur') }}" class="stretched-link">Struktur Desa</a></h4>
                        <p class="description">Kenali lebih dekat jajaran aparat dan struktur organisasi pemerintahan desa
                            kami.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-gem"></i>
                        </div>
                        <h4 class="title"><a href="{{ route('potensi') }}" class="stretched-link">Potensi Desa</a></h4>
                        <p class="description">Jelajahi berbagai potensi sumber daya alam, ekonomi, dan sosial yang dimiliki
                            desa.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <h4 class="title"><a href="{{ route('login') }}" class="stretched-link">Login Aparat</a></h4>
                        <p class="description">Halaman khusus untuk aparat desa dalam mengelola konten dan data website.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- Potensi Desa Section -->
    @if (isset($potentials) && $potentials->count() > 0)
        <section id="potensi" class="portfolio section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Potensi Desa</h2>
                <p>Berbagai potensi unggulan yang dimiliki oleh Desa Ulu Kalo.</p>
            </div>
            <div class="container">
                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($potentials->take(6) as $potential)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
                            <div class="portfolio-content h-100">
                                @if ($potential->image)
                                    <img src="{{ asset('storage/' . $potential->image) }}" class="img-fluid"
                                        alt="{{ $potential->title }}">
                                @else
                                    <img src="https://placehold.co/600x400/EEE/31343c?text=Potensi+Desa" class="img-fluid"
                                        alt="{{ $potential->title }}">
                                @endif
                                <div class="portfolio-info">
                                    <h4><a href="{{ route('potensi') }}"
                                            title="More Details">{{ $potential->title }}</a>
                                    </h4>
                                    <p>{{ Str::limit($potential->description, 80) }}</p>
                                    <a href="{{ asset('storage/' . $potential->image) }}"
                                        title="{{ $potential->title }}" data-gallery="portfolio-gallery-app"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{ route('potensi') }}" title="More Details" class="details-link"><i
                                            class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif
    @if (isset($structures) && $structures->count() > 0)
        <section id="team" class="team section light-background">

            <div class="container section-title" data-aos="fade-up">
                <h2>Struktur Desa</h2>
                <p>Kenali lebih dekat jajaran aparat yang mengelola pemerintahan Desa Ulu Kalo.</p>
            </div>
            <div class="container">
                <div class="row gy-4">

                    @foreach ($structures->take(4) as $structure)
                        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up"
                            data-aos-delay="{{ 100 * ($loop->index + 1) }}">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="{{ $structure->image ? asset('storage/' . $structure->image) : 'https://placehold.co/400x400/EFEFEF/AAAAAA&text=Foto' }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $structure->name ?? 'Nama Aparat' }}</h4>
                                    <span>{{ $structure->position ?? 'Jabatan' }}</span>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                @if ($structures->count() > 4)
                    <div class="text-center mt-5">
                        <a href="{{ route('struktur') }}" class="btn btn-outline-primary">Lihat Selengkapnya</a>
                    </div>
                @endif

            </div>

        </section>
    @endif


@endsection
