@extends('templates.main')
@section('main')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Tambah Layanan</h3>
                    {{-- <p class="text-subtitle text-muted"></p> --}}
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item " aria-current="page">Layanan</li>
                            <li class="breadcrumb-item active" aria-current="page">Form</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title">Form Input Layanan</h4>
                                <a href="{{ Route('layanan.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ Route('layanan.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="basicInput">Nama Layanan</label>
                                    <input type="text" name="nama_layanan" class="form-control" id="basicInput"
                                        placeholder="isi layanan laundry" />
                                    @error('nama_layanan')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Deskripsi</label>
                                    <input type="text" name="deskripsi" class="form-control" id="basicInput"
                                        placeholder="isi deskripsi" />
                                    @error('deskripsi')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Tipe</label>
                                    <select name="tipe" class="form-select">
                                        <option selected disabled>Pilih Tipe</option>
                                        <option value="satuan">Satuan</option>
                                        <option value="kiloan">Kiloan</option>
                                    </select>
                                    @error('tipe')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="basicInput">Harga</label>
                                    <input type="number" name="harga" class="form-control" id="basicInput"
                                        placeholder="isi harga" />
                                    @error('harga')
                                        <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <button class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
@endsection
