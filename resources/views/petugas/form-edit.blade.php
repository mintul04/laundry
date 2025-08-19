@extends('templates.main')
@section('main')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Form Edit Petugas</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item " aria-current="page">Petugas</li>
                            <li class="breadcrumb-item active" aria-current="page">Form Edit</li>
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
                                <h4 class="card-title">Form Input Petugas</h4>
                                <a href="{{ Route('petugas.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>

                        <div class="card-body">
                            <form action="{{ Route('petugas.update', $petugas->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <label class="ps-2">Name</label>
                                <input type="text" name="name" class="form-control mb-2" value="{{ $petugas->name }}">
                                <label class="ps-2">Email</label>
                                <input type="text" name="email" class="form-control mb-2" value="{{ $petugas->email }}">
                                <label class="ps-2">Password</label>
                                <input type="password" name="password" class="form-control mb-2" value="{{ $petugas->password }}">
                                <button class="btn btn-success">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
