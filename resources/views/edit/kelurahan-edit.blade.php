@extends('layouts.master')
@section('title', 'SIG | Ubah Data')
@section('content')

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="content-wrapper">

            <section class="content p-4">
                <div class="container-fluid">

                    <a href="/kelurahan" class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-backward"></i>
                        Kembali</a>

                    <div class="card shadow card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><b>Ubah Data Kelurahan</b></h3>
                        </div>

                        <form action="/kelurahan-update/{{ $kelurahan->id }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="nama">Kelurahan</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" value="{{ $kelurahan->nama }}"
                                                placeholder="Nama Kelurahan...">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">

                                        <div class="form-group">
                                            <label for="puskesmas_id">Puskesmas</label>
                                            <select class="form-select" aria-label="Default select example"
                                                id="puskesmas_id" name="puskesmas_id">
                                                @foreach ($puskesmas as $item)
                                                    <option value="{{ $item->id }}"
                                                        @if (isset($kelurahan->puskesmas->nama)) @if ($kelurahan->puskesmas->nama == $item->nama) {{ 'selected' }} @endif
                                                    @else { {{ '' }} } @endif>
                                                        {{ $item->nama }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-4">

                                        <div class="form-group">
                                            @php $geojson = ['airmata.geojson', 'airnona.geojson', 'alak.geojson', 'bakunase.geojson','bakunase-II.geojson', 'batuplat.geojson', 'bello.geojson', 'bonipoi.geojson', 'fatubesi.geojson', 'fatufeto.geojson', 'fatukoa.geojson', 'fatululi.geojson', 'fontein.geojson', 'kayu-putih.geojson', 'kelapa-lima.geojson', 'kolhua.geojson', 'kuanino.geojson', 'lahilai-bissi-kopan.geojson', 'lasiana.geojson', 'liliba.geojson', 'mantasi.geojson', 'manulai-II.geojson', 'manutapen.geojson', 'maulafa.geojson','merdeka.geojson', 'naikolan.geojson', 'naikoten-I.geojson', 'naikoten-II.geojson', 'naimata.geojson', 'naioni.geojson', 'namosain.geojson', 'nefonaek.geojson', 'nunbaun-delha.geojson', 'nunbaun-sabu.geojson', 'nunhila.geojson', 'nunleu.geojson', 'oeba.geojson', 'oebobo.geojson', 'oebufu.geojson', 'oepura.geojson', 'oesapa-barat.geojson', 'oesapa-selatan.geojson', 'oesapa.geojson', 'oetete.geojson', 'pasir-panjang.geojson', 'penfui.geojson', 'penkase-oeleta.geojson', 'sikumana.geojson', 'solor.geojson', 'tode-kisar.geojson', 'tuak-daun-merah.geojson']; @endphp
                                            <label for="geojson">GeoJSON</label>
                                            <select class="form-select @error('geojson') is-invalid @enderror"
                                                aria-label="Default select example" id="geojson" name="geojson">
                                                @foreach ($geojson as $item)
                                                    <option value="{{ $item }}"
                                                        @if (isset($kasus->geojson)) @if ($kasus->geojson == $item) {{ 'selected' }} @endif
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

                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success btn-sm">Ubah <i
                                        class="fa-solid fa-check"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    @endsection
