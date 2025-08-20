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
    </section><!-- /Hero Section -->

    <!-- Visi Misi Section -->
    @if (isset($visionMission))
        <section id="about" class="about section">
            <div class="container section-title" data-aos="fade-up">
                <h2>Visi & Misi</h2>
            </div>
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <h3>Visi</h3>
                        <p class="fst-italic">{{ $visionMission->vision }}</p>
                    </div>
                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                        <h3>Misi</h3>
                        <ul>
                            @foreach (is_array($visionMission->missions) ? $visionMission->missions : [] as $mission)
                                <li><i class="bi bi-check-circle"></i> <span>{{ $mission }}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Sejarah Section -->
    @if (isset($histories) && $histories->count() > 0)
        <section id="sejarah" class="services section light-background">
            <div class="container section-title" data-aos="fade-up">
                <h2>Sejarah Desa</h2>
                <p>Kilas balik perjalanan dan perkembangan Desa Ulu Kalo dari masa ke masa.</p>
            </div>
            <div class="container">
                <div class="row gy-4">
                    @foreach ($histories->take(3) as $history)
                        <div class="col-xl-4 col-lg-6" data-aos="fade-up" data-aos-delay="{{ 100 * $loop->iteration }}">
                            <div class="service-item d-flex">
                                <div class="icon flex-shrink-0"><i class="bi bi-clock-history"></i></div>
                                <div>
                                    <h4 class="title"><a href="{{ route('sejarah') }}"
                                            class="stretched-link">{{ $history->title }}</a></h4>
                                    <p class="description">{{ Str::limit($history->content, 100) }}</p>
                                    @if ($history->year)
                                        <small class="text-muted">Tahun: {{ $history->year }}</small>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-center mt-5">
                    <a href="{{ route('sejarah') }}" class="btn-get-started"
                        style="border: 2px solid #007bff; color: #007bff; padding: 10px 30px;">Lihat Semua Sejarah</a>
                </div>
            </div>
        </section>
    @endif

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
                                    <h4><a href="{{ route('potensi') }}" title="More Details">{{ $potential->title }}</a>
                                    </h4>
                                    <p>{{ Str::limit($potential->description, 80) }}</p>
                                    <a href="{{ asset('storage/' . $potential->image) }}" title="{{ $potential->title }}"
                                        data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
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

@endsection
