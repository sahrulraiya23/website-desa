@extends('layouts.app')

@section('title', 'Tambah Surat Baru - Website Desa Ulu Kalo')

@section('content')
    <main class="main">
        <div class="page-title" data-aos="fade">
            <div class="heading">
                <div class="container">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-lg-8">
                            <h1>Tambah Surat Baru</h1>
                            <p class="mb-0">Isi form di bawah ini untuk menambahkan surat baru.</p>
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
                                <h5 class="card-title">Form Tambah Surat</h5>

                                <form method="POST" action="{{ route('surat.store') }}">
                                    @csrf

                                    <div class="row gy-4">
                                        <div class="col-md-6">
                                            <label for="nomor_surat" class="form-label">Nomor Surat</label>
                                            <input type="text" name="nomor_surat" class="form-control" id="nomor_surat"
                                                required>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="tanggal_surat" class="form-label">Tanggal Surat</label>
                                            <input type="date" class="form-control" name="tanggal_surat"
                                                id="tanggal_surat" required>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="pengirim" class="form-label">Pengirim</label>
                                            <input type="text" class="form-control" name="pengirim" id="pengirim"
                                                required>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="perihal" class="form-label">Perihal</label>
                                            <input type="text" class="form-control" name="perihal" id="perihal"
                                                required>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="jenis_surat" class="form-label">Jenis Surat</label>
                                            <select name="jenis_surat" id="jenis_surat" class="form-select" required>
                                                <option selected disabled value="">Pilih...</option>
                                                <option value="Surat Keterangan Usaha">Surat Keterangan Usaha</option>
                                                <option value="Surat Keterangan Tidak Mampu">Surat Keterangan Tidak Mampu
                                                </option>
                                                <option value="Surat Keterangan Jual Beli">Surat Keterangan Jual Beli
                                                </option>
                                                <option value="Surat Keterangan Nikah">Surat Keterangan Nikah</option>
                                                <option value="Surat Rekomendasi Kerja">Surat Rekomendasi Kerja</option>
                                            </select>
                                        </div>

                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
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
