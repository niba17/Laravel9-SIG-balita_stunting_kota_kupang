@extends('layouts.master')
@section('title', 'SIG | Ubah Data')
@section('content')

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="content-wrapper">

            <section class="content p-4">
                <div class="container-fluid">

                    <a href="/kecamatan" class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-backward"></i>
                        Kembali</a>

                    <div class="card shadow card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><b>Ubah Data Kecamatan</b></h3>
                        </div>

                        <form action="/kecamatan-update/{{ $kecamatan->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="nama">Kecamatan</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" value="{{ $kecamatan->nama }}"
                                                placeholder="Nama Kecamatan...">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            @php
                                                $geojson = ['alak.geojson', 'kelapa-lima.geojson', 'kota-lama.geojson', 'kota-raja.geojson', 'maulafa.geojson', 'oebobo.geojson'];
                                            @endphp
                                            <label for="geojson">geoJSON</label>
                                            <select class="form-select @error('geojson') is-invalid @enderror"
                                                aria-label="Default select example" id="geojson" name="geojson">
                                                @foreach ($geojson as $item)
                                                    <option value="{{ $item }}"
                                                        @if (isset($kecamatan->geojson)) @if ($kecamatan->geojson == $item) {{ 'selected' }} @endif
                                                    @else { {{ '' }} } @endif>
                                                        {{ $item }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('geojson')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="warna_fill">Warna Fill</label>
                                                <div class="input-group" data-colorpicker-id="2">
                                                    <input type="color"
                                                        class="form-control @error('warna_fill') is-invalid @enderror"
                                                        data-original-title="" title="" id="warna_fill"
                                                        name="warna_fill" value="{{ $kecamatan->warna_fill }}">
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
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-sm">Ubah <i class="fa-solid fa-check"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    @endsection
