@extends('layouts.master')
@section('title', 'SIG | Home')
@section('content')

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="content-wrapper">

            {{-- <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Home</h1>
                        </div>
                    </div>
                </div>
            </div> --}}

            <section class="content p-4">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <a href="/kasus/{{ $tahun = 2021 }}" class="info-box">
                                <span class="info-box-icon bg-danger elevation-1">
                                    <i class="fa-solid fa-people-robbery"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kasus</span>
                                    <span class="info-box-number">
                                        {{ count($kasus) }}
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <a href="/puskesmas" class="info-box mb-3">
                                <span class="info-box-icon bg-warning elevation-1">
                                    <i class="fa-regular fa-hospital"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Puskesmas</span>
                                    <span class="info-box-number">
                                        {{ count($puskesmas) }}
                                    </span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <a href="/kecamatan" class="info-box mb-3">
                                <span class="info-box-icon bg-info elevation-1">
                                    <i class="fa-solid fa-map"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kecamatan</span>
                                    <span class="info-box-number">{{ count($kecamatan) }}</span>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <a href="/kelurahan" class="info-box mb-3">
                                <span class="info-box-icon bg-success elevation-1">
                                    <i class="fa-solid fa-map-location-dot"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kelurahan</span>
                                    <span class="info-box-number">{{ count($kelurahan) }}</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                {{-- <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="info-box mb-3 bg-warning">
                                <span class="info-box-icon"><i class="fas fa-tag"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Inventory</span>
                                    <span class="info-box-number">5,200</span>
                                </div>
                            </div>

                            <div class="info-box mb-3 bg-success">
                                <span class="info-box-icon"><i class="far fa-heart"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Mentions</span>
                                    <span class="info-box-number">92,050</span>
                                </div>
                            </div>

                            <div class="info-box mb-3 bg-danger">
                                <span class="info-box-icon"><i class="fas fa-cloud-download-alt"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Downloads</span>
                                    <span class="info-box-number">114,381</span>
                                </div>
                            </div>

                            <div class="info-box mb-3 bg-info">
                                <span class="info-box-icon"><i class="far fa-comment"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Direct Messages</span>
                                    <span class="info-box-number">163,921</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </section>
        </div>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>

    @endsection
