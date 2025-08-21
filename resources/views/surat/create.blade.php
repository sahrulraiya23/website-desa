@extends('layouts.app')

@section('title', 'Ajukan Surat Baru - Website Desa Ulu Kalo')

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Form Pengajuan Surat</h1>
                            <p class="mb-0">Isi form di bawah ini untuk mengajukan permohonan surat baru.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="surat-create-content" class="surat-create-content section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Detail Permohonan Surat</h5>

                                <form method="POST" action="{{ route('surat.store') }}">
                                    @csrf

                                    <div class="row gy-4">
                                        <div class="col-md-12">
                                            <label for="jenis_surat" class="form-label">Jenis Surat</label>
                                            <select name="jenis_surat" id="jenis_surat" class="form-select" required>
                                                <option selected disabled value="">Pilih jenis surat...</option>
                                                <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                                <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu
                                                </option>
                                                <option value="Surat Keterangan Jual Beli">Surat Keterangan Jual Beli
                                                </option>
                                                <option value="Surat Keterangan Nikah">Surat Keterangan Nikah</option>
                                                <option value="Surat Rekomendasi Kerja">Surat Rekomendasi Kerja</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="perihal" class="form-label">Perihal</label>
                                            <input type="text" class="form-control" name="perihal" id="perihal"
                                                required
                                                placeholder="Contoh: Permohonan untuk membuka usaha toko kelontong">
                                        </div>

                                        <div class="col-md-12">
                                            <label for="keterangan_pemohon" class="form-label">Keterangan /
                                                Keperluan</label>
                                            <textarea class="form-control" name="keterangan_pemohon" id="keterangan_pemohon" rows="5" required
                                                placeholder="Jelaskan secara singkat keperluan Anda mengajukan surat ini."></textarea>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Kirim Pengajuan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
