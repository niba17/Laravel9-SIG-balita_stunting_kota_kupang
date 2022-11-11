<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>@yield('title')</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/navbar-fixed/"> --}}

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('front') }}/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicons -->
    {{-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3"> --}}

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/landing') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/landing') }}/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/landing') }}/assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/landing') }}/assets/css/owl-carousel.css">

    <!-- Leaflet JS -->
    <link rel="stylesheet" href="{{ asset('/plugin') }}/leaflet180/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />

    <script src="{{ asset('/plugin') }}/leaflet180/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>

    <!-- Jquery JS -->
    <script type="text/javascript" src="{{ asset('/library') }}/jquery361.js"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('/plugin') }}/fontawesomeFree620/css/all.min.css">

    <!-- SweetAlert2 -->
    <script src="{{ asset('/plugin') }}/sweetAlert2/sweetalert2.all.min.js"></script>

    <!-- Admin LTE -->
    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="{{ asset('/template') }}/dist/css/adminlte.min.css?v=3.2.0">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/plugin') }}/DataTables/datatables.min.css" />

    <script type="text/javascript" src="{{ asset('/plugin') }}/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="{{ asset('/plugin') }}/leafletAJAX/leaflet.ajax.js"></script>




    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet"
        href="{{ asset('/template') }}/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">

    <link rel="stylesheet"
        href="{{ asset('/template') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <link rel="stylesheet"
        href="{{ asset('/template') }}/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/bs-stepper/css/bs-stepper.min.css">

    <link rel="stylesheet" href="{{ asset('/template') }}/plugins/dropzone/min/dropzone.min.css">

    <link rel="stylesheet" href="{{ asset('/template') }}/dist/css/adminlte.min.css?v=3.2.0">

    {{-- //
    <script nonce="93035d22-a5e3-4db4-8eb7-b7f4ad5c8f37">
        //         (function(w, d) {
        //             ! function(a, e, t, r) {
        //                 a.zarazData = a.zarazData || {};
        //                 a.zarazData.executed = [];
        //                 a.zaraz = {
        //                     deferred: [],
        //                     listeners: []
        //                 };
        //                 a.zaraz.q = [];
        //                 a.zaraz._f = function(e) {
        //                     return function() {
        //                         var t = Array.prototype.slice.call(arguments);
        //                         a.zaraz.q.push({
        //                             m: e,
        //                             a: t
        //                         })
        //                     }
        //                 };
        //                 for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
        //                 a.zaraz.init = () => {
        //                     var t = e.getElementsByTagName(r)[0],
        //                         z = e.createElement(r),
        //                         n = e.getElementsByTagName("title")[0];
        //                     n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
        //                     a.zarazData.x = Math.random();
        //                     a.zarazData.w = a.screen.width;
        //                     a.zarazData.h = a.screen.height;
        //                     a.zarazData.j = a.innerHeight;
        //                     a.zarazData.e = a.innerWidth;
        //                     a.zarazData.l = a.location.href;
        //                     a.zarazData.r = e.referrer;
        //                     a.zarazData.k = a.screen.colorDepth;
        //                     a.zarazData.n = e.characterSet;
        //                     a.zarazData.o = (new Date).getTimezoneOffset();
        //                     a.zarazData.q = [];
        //                     for (; a.zaraz.q.length;) {
        //                         const e = a.zaraz.q.shift();
        //                         a.zarazData.q.push(e)
        //                     }
        //                     z.defer = !0;
        //                     for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith(
        //                         "_zaraz_"))).forEach((t => {
        //                         try {
        //                             a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
        //                         } catch {
        //                             a.zarazData["z_" + t.slice(7)] = e.getItem(t)
        //                         }
        //                     }));
        //                     z.referrerPolicy = "origin";
        //                     z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
        //                     t.parentNode.insertBefore(z, t)
        //                 };
        //                 ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener(
        //                     "DOMContentLoaded", zaraz.init)
        //             }(w, d, 0, "script");
        //         })(window, document);
        //
    </script> --}}
</head>
