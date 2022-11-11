<script>
    $("#kecamatan_id").change(function() {
        var idKecamatan = $(this).val();
        $.ajax({
            url: "{{ route('kecamatan-request') }}",
            method: 'GET',
            cache: false,
            dataType: 'json',
            success: function(data) {
                // console.log(data)
                var html = "";
                // for ($i = 0; $i < data.length; $i++) {
                //     $html += '<option value="' + data[$i].id + '">' + data[$i].nama +
                //         '</option>';
                // }
                data[0].forEach(element => {
                    // console.log(element)
                    if (element.id == idKecamatan) {
                        if (element.puskesmas !== null) {
                            element.puskesmas.forEach(element => {
                                // console.log(element.nama)
                                if (element.kelurahan !== null) {
                                    element.kelurahan.forEach(element => {

                                        html += '<option value="' + element
                                            .id + '">' + element.nama +
                                            '</option>';
                                    })
                                }
                            })
                        }
                    }

                })
                $("#kelurahan_id").html(
                    '<option value="" selected disabled>Pilih Kelurahan ...</option>' + html);
            }

        })
    })

    var j_b_diukur
    var total
    var persentase
    $('#j_b_diukur').on('keyup', function() {
        j_b_diukur = $(this).val()

        if (total != null && total != 0) {
            persentase = (total / j_b_diukur) * 100
            $('#presentase').val(persentase.toFixed(1))
        }
        // console.log($(this).val())
    })

    $('#total').on('keyup', function() {
        total = $(this).val()
        if (j_b_diukur != null && j_b_diukur != 0) {
            persentase = (total / j_b_diukur) * 100
            $('#presentase').val(persentase.toFixed(1))
        }
        // console.log($(this).val())
    })








    $('#login').hover(() => {
        $('#login').toggleClass('text-primary')
    })

    $('#myTable').DataTable();
    $('#myTable2').DataTable();

    @if (Session::has('succMessage'))
        Swal.fire({
            icon: 'success',
            title: '{{ Session::get('succMessage') }}',
            timer: 3000
        })
    @elseif (Session::has('errMessage'))
        Swal.fire({
            icon: 'error',
            title: '{{ Session::get('errMessage') }}'
            // timer: 3000
        })
    @endif

    function hapus(id, controller) {
        Swal.fire({
            title: 'Yakin ingin Menghapus?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/' + controller + '-destroy/' + id);
            }
        })
    }

    function logout() {
        Swal.fire({
            title: 'Yakin ingin Logout?',
            // text: "You won't be able to revert this!",
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.replace('/logout');
            }
        })
    }
</script>

{{-- <footer class="main-footer"> --}}
{{-- <strong>Copyright &copy; 2014-2021 <a href="{{ asset('/template') }}/https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
    </div> --}}
{{-- </footer> --}}
{{-- </div>

<!-- Javascript Bundle with Popper -->
<script src="{{ asset('front') }}/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<!-- jQuery -->
<script src="{{ asset('/landing') }}/assets/js/jquery-2.1.0.min.js"></script>

<!-- Bootstrap -->
{{-- <script src="{{ asset('/landing') }}/assets/js/popper.js"></script> --}}
<script src="{{ asset('/landing') }}/assets/js/bootstrap.min.js"></script>

<!-- Plugins -->
<script src="{{ asset('/landing') }}/assets/js/owl-carousel.js"></script>
<script src="{{ asset('/landing') }}/assets/js/scrollreveal.min.js"></script>
<script src="{{ asset('/landing') }}/assets/js/waypoints.min.js"></script>
<script src="{{ asset('/landing') }}/assets/js/jquery.counterup.min.js"></script>
<script src="{{ asset('/landing') }}/assets/js/imgfix.min.js"></script>

<!-- Global Init -->
<script src="{{ asset('/landing') }}/assets/js/custom.js"></script>

<!-- Admin LTE -->
<script src="{{ asset('/template') }}/plugins/jquery/jquery.min.js"></script>

<script src="{{ asset('/template') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="{{ asset('/template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="{{ asset('/template') }}/dist/js/adminlte.js?v=3.2.0"></script>


<script src="{{ asset('/template') }}/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="{{ asset('/template') }}/plugins/raphael/raphael.min.js"></script>
<script src="{{ asset('/template') }}/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="{{ asset('/template') }}/plugins/jquery-mapael/maps/usa_states.min.js"></script>

<script src="{{ asset('/template') }}/plugins/chart.js/Chart.min.js"></script>

{{-- <script src="{{ asset('/template') }}/dist/js/demo.js"></script> --}}

{{-- <script src="{{ asset('/template') }}/dist/js/pages/dashboard2.js"></script> --}}

<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('/template') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Sparkline -->
<script src="{{ asset('/template') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
{{-- <script src="{{ asset('/template') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('/template') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> --}}
<!-- jQuery Knob Chart -->
<script src="{{ asset('/template') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('/template') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('/template') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('/template') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('/template') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('/template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/template') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('/template') }}/dist/js/demo.js"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{ asset('/template') }}/dist/js/pages/dashboard.js"></script> --}}

</body>

</html>
