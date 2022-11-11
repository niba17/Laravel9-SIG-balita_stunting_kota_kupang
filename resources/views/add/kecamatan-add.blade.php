@extends('layouts.master')
@section('title', 'SIG | Tambah Data')
@section('content')

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="content-wrapper">

            <section class="content p-4">
                <div class="container-fluid">

                    <a href="/kecamatan" class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-backward"></i>
                        Kembali</a>

                    <div class="card shadow card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><b>Tambah Data Kecamatan</b></h3>
                        </div>

                        <form action="/kecamatan-store" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="nama">Kecamatan</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" value="{{ old('nama') }}"
                                                placeholder="Nama Kecamatan...">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="geojson">geoJSON</label>
                                            <select class="form-select @error('geojson') is-invalid @enderror"
                                                aria-label="Default select example" id="geojson" name="geojson">
                                                <option value="" selected disabled>Pilih geoJSON...</option>
                                                <option value="alak.geojson">Alak</option>
                                                <option value="kelapa-lima.geojson">Kelapa Lima</option>
                                                <option value="kota-lama.geojson">Kota Lama</option>
                                                <option value="kota-raja.geojson">Kota Raja</option>
                                                <option value="maulafa.geojson">Maulafa</option>
                                                <option value="oebobo.geojson">Oebobo</option>

                                            </select>
                                            @error('geojson')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="warna_fill">Warna Fill</label>
                                            <div class="input-group" data-colorpicker-id="2">
                                                <input type="color"
                                                    class="form-control @error('warna_fill') is-invalid @enderror"
                                                    data-original-title="" title="" id="warna_fill" name="warna_fill"
                                                    value="#ffffff">
                                                @error('warna_fill')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-sm">Tambah <i
                                        class="fa-solid fa-check"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    @endsection
