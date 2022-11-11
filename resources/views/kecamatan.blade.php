@extends('layouts.master')
@section('title', 'SIG | Kecamatan')
@section('content')

    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="content-wrapper">

            <section class="content p-4">
                <div class="container-fluid">

                    <a href="/kecamatan-add" class="btn btn-success btn-sm mb-2">Tambah Data <i
                            class="fa-solid fa-plus"></i></a>

                    <div class="card shadow card-primary">
                        <div class="card-header border-transparent">
                            <h3 class="text-center">Lingkup Kecamatan Puskesmas di Kupang</h3>
                        </div>

                        <div class="card-body px-3 py-3">
                            <div class="table-responsive">
                                <table class="table" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kecamatan</th>
                                            <th>Puskesmas</th>
                                            <th>geoJSON</th>
                                            <th>Warna Fill</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($kecamatan as $item)
                                            <tr>
                                                <td style="vertical-align: middle;">{{ $loop->iteration }}</td>
                                                <td style="vertical-align: middle;">{{ $item->nama }}</td>
                                                <td style="vertical-align: middle;">
                                                    <ul>
                                                        @foreach ($item->puskesmas as $value)
                                                            <li>
                                                                {{ '* ' . $value->nama }}
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td style="vertical-align: middle;">{{ $item->geojson ?? 'NULL' }}</td>
                                                <td style="vertical-align: middle;">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            {{ $item->warna_fill ?? 'NULL' }}
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="container"
                                                                style="width: 20px;height:20px;background-color:{{ $item->warna_fill ?? 'NULL' }};">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td style="vertical-align: middle;">
                                                    <a href="/kecamatan-edit/{{ $item->id }}"
                                                        class="btn btn-warning btn-sm"><i
                                                            class="fa-solid fa-pen-to-square"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"
                                                        onclick="hapus('{{ $item->id }}','{{ $controller = 'kecamatan' }}')"><i
                                                            class="fa-solid fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            {{-- <button type="submit" class="btn btn-success btn-sm">Submit <i
                                    class="fa-solid fa-check"></i></button> --}}
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    @endsection
