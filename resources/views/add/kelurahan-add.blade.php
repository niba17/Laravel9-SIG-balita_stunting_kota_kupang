@extends('layouts.master')
@section('title', 'SIG | Tambah Data')
@section('content')

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="content-wrapper">

            <section class="content p-4">
                <div class="container-fluid">

                    <a href="/kelurahan" class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-backward"></i>
                        Kembali</a>

                    <div class="card shadow card-primary">
                        <div class="card-header">
                            <h3 class="card-title"><b>Tambah Data Kelurahan</b></h3>
                        </div>

                        <form action="/kelurahan-store" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="nama">Kelurahan</label>
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" value="{{ old('nama') }}"
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
                                            <select class="form-select @error('puskesmas_id') is-invalid @enderror"
                                                aria-label="Default select example" id="puskesmas_id" name="puskesmas_id">
                                                <option value="" selected>Pilih Puskesmas...</option>
                                                @foreach ($puskesmas as $item)
                                                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                @endforeach
                                            </select>
                                            @error('puskesmas_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-4">

                                        <div class="form-group">
                                            <label for="geojson">GeoJson</label>
                                            <select class="form-select @error('geojson') is-invalid @enderror"
                                                aria-label="Default select example" id="geojson" name="geojson">
                                                <option value="" selected disabled>Pilih Geojson ...</option>
                                                <option value="airmata.geojson">Air Mata</option>
                                                <option value="airnona.geojson">Air Nona</option>
                                                <option value="alak.geojson">Alak</option>
                                                <option value="bakunase.geojson">Bakunase</option>
                                                <option value="bakunase-II.geojson">Bakunase II</option>
                                                <option value="batuplat.geojson">Batuplat</option>
                                                <option value="bello.geojson">Bello</option>
                                                <option value="bonipoi.geojson">Bonipoi</option>
                                                <option value="fatubesi.geojson">Fatubesi</option>
                                                <option value="fatufeto.geojson">Fatufeto</option>
                                                <option value="fatukoa.geojson">Fatukoa</option>
                                                <option value="fatululi.geojson">Fatululi</option>
                                                <option value="fontein.geojson">Fontein</option>
                                                <option value="kayu-putih.geojson">Kayu Putih</option>
                                                <option value="kelapa-lima.geojson">Kelapa Lima</option>
                                                <option value="kolhua.geojson">Kolhua</option>
                                                <option value="kuanino.geojson">Kuanino</option>
                                                <option value="lahilai-bissi-kopan.geojson">Lahilai Bissi Kopan</option>
                                                <option value="lasiana.geojson">Lasiana</option>
                                                <option value="liliba.geojson">Liliba</option>
                                                <option value="mantasi.geojson">Mantasi</option>
                                                <option value="manulai-II.geojson">Manulai II</option>
                                                <option value="manutapen.geojson">Manutapen</option>
                                                <option value="Maulafa.geojson">Maulafa</option>
                                                <option value="merdeka.geojson">Merdeka</option>
                                                <option value="naikolan.geojson">naikolan</option>
                                                <option value="naikoten-I.geojson">Naikoten I</option>
                                                <option value="naikoten-II.geojson">Naikoten II</option>
                                                <option value="naimata.geojson">Naimata</option>
                                                <option value="naioni.geojson">Naioni</option>
                                                <option value="namosain.geojson">Namosain</option>
                                                <option value="nefonaek.geojson">Nefonaek</option>
                                                <option value="nunbaun-delha.geojson">Nunbaun Delha</option>
                                                <option value="nunbaun-sabu.geojson">Nunbaun Sabu</option>
                                                <option value="nunhila.geojson">Nunhila</option>
                                                <option value="nunleu.geojson">Nunleu</option>
                                                <option value="oeba.geojson">Oeba</option>
                                                <option value="oebobo.geojson">Oebobo</option>
                                                <option value="oebufu.geojson">Oebufu</option>
                                                <option value="oepura.geojson">oepura</option>
                                                <option value="oesapa-barat.geojson">Oesapa Barat</option>
                                                <option value="oesapa-selatan.geojson">Oesapa Selatan</option>
                                                <option value="oesapa.geojson">Oesapa</option>
                                                <option value="oetete.geojson">Oetete</option>
                                                <option value="pasir-panjang.geojson">Pasir Panjang</option>
                                                <option value="penfui.geojson">Penfui</option>
                                                <option value="penkase-oeleta.geojson">Penkase Oeleta</option>
                                                <option value="sikumana.geojson">Sikumana</option>
                                                <option value="solor.geojson">Solor</option>
                                                <option value="tode-kisar.geojson">Todekisar</option>
                                                <option value="tuak-daun-merah.geojson">Tuak Daun Merah</option>
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
                                <button type="submit" class="btn btn-success btn-sm">Tambah <i
                                        class="fa-solid fa-check"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    @endsection
