<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>AdminLTE 3 | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
<!--    adminlte plugins-->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }} ">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }} ">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }} ">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }} ">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css')}}">
<!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">-->


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <!--            <li class="nav-item d-none d-sm-inline-block">-->
            <!--                <a href="index3.html" class="nav-link">Home</a>-->
            <!--            </li>-->
            <!--            <li class="nav-item d-none d-sm-inline-block">-->
            <!--                <a href="#" class="nav-link">Contact</a>-->
            <!--            </li>-->
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.includes.sidebar')
    @yield('content')

    <footer class="main-footer">
        <strong>Copyright &copy; 2022 </strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <a href="/">Home</a>
            <a href="/admin">Admin</a>
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }} "></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }} "></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }} "></script>

<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }} "></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }} "></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }} "></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }} "></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }} "></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }} "></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }} "></script>
<!-- Tempusdominus Bootstrap 4 -->-->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }} "></script>
<!-- bs-custom -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }} "></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }} "></script>

<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }} "></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }} "></script>

<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            toolbar: [
                ['font', ['superscript', 'subscript', 'strikethrough']],
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
    $(function () {
        bsCustomFileInput.init();
    });
    $('.select2').select2()
</script>
<style>
    .custom-file-input:lang(en)~.custom-file-label::after {
        content: "...";
    }
</style>
</body>
</html>
