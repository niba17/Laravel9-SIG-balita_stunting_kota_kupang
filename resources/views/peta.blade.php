@extends('layouts.masterLanding')
@section('title', 'SIG | Peta')
@section('content')

    <div class="container-fluid p-3">
        <a href="/" class="btn btn-warning btn-sm mb-2"><i class="fa-solid fa-backward"></i> Kembali</a>

        {{-- <div class="card shadow mb-3">
            <div class="card-header bg-info">
                <h2 class="text-center text-dark"><strong>Total Kasus Stunting wilayah Kota Kupang</strong></h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-3 col-md-3">
                        <div class="alert alert-primary" role="alert">
                            <strong>
                                <h5 class="card-title">Total Kasus</h5>
                                <p class="card-text">{{ count($kasus) }}</p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="alert alert-success" role="alert">
                            <strong>
                                <h5 class="card-title">Pasien Sembuh</h5>
                                <p class="card-text">34545345</p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="alert alert-warning" role="alert">
                            <strong>
                                <h5 class="card-title">Pasien Dirawat</h5>
                                <p class="card-text">34545345</p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="alert alert-danger" role="alert">
                            <strong>
                                <h5 class="card-title">Pasien Meninggal</h5>
                                <p class="card-text">34545345</p>
                            </strong>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"> --}}
        {{-- <button type="submit" class="btn btn-success btn-sm">Submit <i
                        class="fa-solid fa-check"></i></button> --}}
        {{-- </div>
        </div> --}}

        <div class="card shadow">

            <div class="card-header bg-info">
                <h2 class="text-center text-white"><strong>Sebaran Stunting wilayah kota Kupang</strong></h2>
            </div>

            <div class="card-body">
                <div class="row">
                    <select class="form-select alert alert-secondary col-lg-4 col-md-12 col-sm-12 font-weight-bold"
                        id="tahun" role="alert" style="font-size: 20px;">
                        <option class="text-white" value="0" selected>Pilih Tahun Persebaran</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                    </select>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="alert alert-warning" role="alert">
                            <strong>
                                <h5 class="card-title"><b>Total Sasaran</b></h5>
                                <p class="card-text" id="tSasaran">-</p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="alert alert-success" role="alert">
                            <strong>
                                <h5 class="card-title"><b>Total Balita Diukur</b></h5>
                                <p class="card-text text-white" id="tBDiukur">-</p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="alert alert-danger" role="alert">
                            <strong>
                                <h5 class="card-title"><b>Total Kasus</b></h5>
                                <p class="card-text text-white" id="tKasus">-</p>
                            </strong>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 col-sm-12">
                        <div class="alert alert-primary" role="alert">
                            <strong>
                                <h5 class="card-title"><b>Persentase</b></h5>
                                <p class="card-text text-white" id="persentase">-</p>
                            </strong>
                        </div>
                    </div>
                </div>


                <div class="row py-1">
                    <div class="col-lg-12">
                        <div id="map" style="height: 690px;"></div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                {{-- <button type="submit" class="btn btn-success btn-sm">Submit <i
                    class="fa-solid fa-check"></i></button> --}}
            </div>
        </div>
    </div>

    <script>
        var kecamatan = L.layerGroup();
        var kelurahan = L.layerGroup();

        var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
        });

        var streets = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>'
            });

        var satellite = L.tileLayer(
            'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                id: 'mapbox/satellite-v9',
                tileSize: 512,
                zoomOffset: -1,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>'
            });

        var map = L.map('map', {
            center: [-10.207078, 123.604489],
            zoom: 12,
            layers: [osm]
        });

        function popUp(f, l) {
            var out = []
            if (f.properties) {
                for (key in f.properties) {
                    if (key == 'KECAMATAN') {
                        out.push("<b>KECAMATAN : </b>" + f.properties[key])
                    } else if (key == 'DESA') {
                        out.push("<b>KELURAHAN : </b>" + f.properties[key])
                    }
                }
                l.bindPopup(out.join("<br />"))
            }
        }

        function style(feature) {
            return {
                opacity: 0.6,
                color: 'blue',
                fillOpacity: 0.1,
                fillColor: 'blue',
                weight: 1
            }
        }

        var kotaKupang = new L.GeoJSON.AJAX(["{{ asset('/plugin/mapGEOJSON') }}" + "/kelurahan.geojson"], {
            onEachFeature: popUp,
            style
        }).addTo(map)

        $('#tahun').on('change', function(geojsonLayer) {
            var tahun = $(this).val()
            var tKasus = 0
            var sasaran = 0
            var j_b_diukur = 0
            var persentase = 0

            $.ajax({
                url: "{{ route('peta-request') }}",
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    // console.log(data[0])
                    data[0].forEach(element => {
                        var out = []
                        if (tahun == element.tahun) {
                            // console.log(element.kelurahan.puskesmas.nama)
                            tKasus = tKasus + element.total
                            sasaran = sasaran + element.sasaran
                            j_b_diukur = j_b_diukur + element.j_b_diukur
                            persentase = (tKasus / j_b_diukur) * 100
                            geoLayer = new L.GeoJSON.AJAX([
                                "{{ asset('/plugin/mapGEOJSON/kelurahan') }}" +
                                "/" +
                                element.kelurahan.geojson
                            ], {
                                style: function(feature) {
                                    return {
                                        opacity: 0.3,
                                        color: element.kelurahan.puskesmas.kecamatan
                                            .warna_fill,
                                        fillOpacity: 0.3,
                                        fillColor: element.kelurahan.puskesmas
                                            .kecamatan.warna_fill,
                                        weight: 1
                                    }
                                },
                                onEachFeature: function(f, l) {
                                    if (f.properties) {
                                        for (key in f.properties) {
                                            if (key == 'DESA') {
                                                out.push("<b>KELURAHAN : </b>" + f
                                                    .properties[key])
                                                out.push("<b>PUSKESMAS : </b>" +
                                                    element.kelurahan.puskesmas
                                                    .nama)

                                                out.push("<b>SASARAN : </b>" +
                                                    element
                                                    .sasaran)
                                                out.push("<b>DIUKUR : </b>" +
                                                    element
                                                    .j_b_diukur)
                                                out.push(
                                                    `<b style="color:red;">KASUS</b><b> : </b> ` +
                                                    element
                                                    .total + ` (` + tahun + `)`)
                                                out.push("<b>PERSENTASE : </b>" +
                                                    element.presentase + " %")
                                            } else if (key == 'KECAMATAN') {
                                                out.push("<b>KECAMATAN : </b>" + f
                                                    .properties[key])
                                            }
                                        }
                                        l.bindPopup(out.join("<br />"))
                                    }
                                }
                            }).addTo(kelurahan)
                        }
                    })

                    // console.log(data[1])
                    data[1].forEach(element => {
                        console.log(element)
                        // console.log(element.nama)
                        var out2 = []
                        var tSasaran = 0
                        var tJBDdiukur = 0
                        var tSPendek = 0
                        var tPendek = 0
                        var tNormal = 0
                        var tTinggi = 0
                        var tTotal = 0


                        element.puskesmas.forEach(element => {
                            element.kelurahan.forEach(element => {
                                if (element.kasus !== null) {
                                    element.kasus.forEach(element => {
                                        // console.log(element.kasus.tahun)
                                        if (tahun == element.tahun) {
                                            // console.log(element.nama)
                                            tSasaran = tSasaran +
                                                element.sasaran
                                            tJBDdiukur = tJBDdiukur +
                                                element.j_b_diukur
                                            tSPendek = tSPendek +
                                                element.s_pendek
                                            tPendek = tPendek + element
                                                .pendek
                                            tNormal = tNormal + element
                                                .normal
                                            tTinggi = tTinggi + element
                                                .tinggi
                                            tTotal = tTotal + element
                                                .total
                                        }
                                    })
                                }
                            })
                        })

                        // console.log(tTotal)

                        geoLayer = new L.GeoJSON.AJAX([
                            "{{ asset('/plugin/mapGEOJSON/kecamatan') }}" + '/' +
                            element.geojson
                        ], {
                            style: function(feature) {
                                return {
                                    opacity: 0.3,
                                    color: element.warna_fill,
                                    fillOpacity: 0.3,
                                    fillColor: element.warna_fill,
                                    weight: 2
                                }
                            },
                            onEachFeature: function(f, l) {
                                if (f.properties) {
                                    for (key in f.properties) {
                                        if (key == 'KECAMATAN') {
                                            var persentase = (tTotal / tJBDdiukur) *
                                                100
                                            out2.push("<b>KECAMATAN : </b>" + f
                                                .properties[key])
                                            out2.push("<b>Total Sasaran : </b>" +
                                                tSasaran)
                                            out2.push(
                                                "<b>Total Balita Diukur  : </b>" +
                                                tJBDdiukur)
                                            out2.push(
                                                "<b>Total Balita Sangat Pendek  : </b>" +
                                                tSPendek)
                                            out2.push(
                                                "<b>Total Balita Pendek  : </b>" +
                                                tPendek)
                                            out2.push(
                                                "<b>Total Balita Normal  : </b>" +
                                                tNormal)
                                            out2.push(
                                                "<b>Total Balita Tinggi  : </b>" +
                                                tTinggi)
                                            out2.push(
                                                `<b style="color:red;">Total Kasus</b><b> : </b>` +
                                                tTotal)
                                            out2.push(
                                                "<b>Total Persentase  : " +
                                                persentase.toFixed(1) + " %")
                                        }
                                    }
                                    l.bindPopup(out2.join("<br />"))
                                }
                            }
                        }).addTo(kecamatan)
                    })

                    if (tahun == 0) {
                        $('#tSasaran').html('-')
                        $('#tBDiukur').html('-')
                        $('#tKasus').html('-')
                        $('#persentase').html('-')
                    } else {
                        $('#tSasaran').html(sasaran + ' (' + tahun + ')')
                        $('#tBDiukur').html(j_b_diukur + ' (' + tahun + ')')
                        $('#tKasus').html(tKasus + ' (' + tahun + ')')
                        $('#persentase').html(persentase.toFixed(1) + ' %' + ' (' +
                            tahun + ')')
                    }
                }
            })
        })



        var baseLayers = {
            'OpenStreetMap': osm,
            'Jalanan': streets,
            'Satelit': satellite
        };

        var overlays = {
            'Kecamatan': kecamatan,
            'Kelurahan': kelurahan
        };

        var layerControl = L.control.layers(baseLayers, overlays).addTo(map);


        const delay = (delayInms) => {
            return new Promise(resolve => setTimeout(resolve, delayInms));
        }

        const sample = async () => {
            // console.log('a');
            // console.log('waiting...')
            let delayres = await delay(5000);
            Swal.fire({
                // icon: 'warning',


                title: `<i class="fa-solid fa-rotate fa-3x" style="color:#174A41;"></i><br>Untuk pengguna smartphone disarankan menggunakan mode Landscape</div>`,
                timer: 7000
            })
        }
        sample();


        // console.log(overlays)

        // var crownHill = L.marker([-10.167008, 123.589998]).bindPopup(
        //     'This is Crown Hill Park.');
        // var rubyHill = L.marker([-10.168529, 123.598410]).bindPopup(
        //     'This is Ruby Hill Park.');

        // var parks = L.layerGroup([crownHill, rubyHill]);


        // layerControl.addBaseLayer(satellite, 'Satelit');
        // layerControl.addOverlay(parks, 'Parks');
    </script>
@endsection
