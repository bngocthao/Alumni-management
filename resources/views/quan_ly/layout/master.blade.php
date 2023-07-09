<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @section('headerScripts')
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css?v=3.2.0')}}">
        <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">

        {{--toastr--}}

        {{--        <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">--}}
{{--        <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">--}}
{{--        <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">--}}
{{--        <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">--}}
{{--        <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">--}}
{{--        <link href="{{asset('client/landing/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">--}}
    @show
    <title> Trang chủ | @yield('title') </title>
</head>
<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
@include('sweetalert::alert')

<!-- Preloader -->
{{--set lại cái preloader time--}}
{{--<div class="preloader flex-column justify-content-center align-items-center">--}}
{{--    <img class="animation__shake" src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">--}}
{{--</div>--}}

@include('quan_ly.layout.top_navbar')
<!-- Main Sidebar Container -->
{{--left sidebar contain right sidebar--}}
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    @include('quan_ly.layout.left_navbar')
</aside>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('content_title')</h1>
                    </div>
                    @yield('breadcrumb')
{{--                    <div class="col-sm-6">--}}
{{--                        <ol class="breadcrumb float-sm-right">--}}
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">@yield('second_link')</li>--}}
{{--                            <li class="breadcrumb-item active">@yield('third_link')</li>--}}
{{--                        </ol>--}}
{{--                    </div>--}}
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>
{{--            @yield('content')--}}
    </div>
@section('footerScripts')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
{{--    <script src="plugins/chart.js/Chart.min.js"></script>--}}
{{--    <script src="plugins/sparklines/sparkline.js"></script>--}}
{{--    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>--}}
{{--    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>--}}
    <script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
    <script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.js?v=3.2.0')}}"></script>

{{--    <script src="plugins/moment/moment.min.js"></script>--}}
{{--    <script src="plugins/daterangepicker/daterangepicker.js"></script>--}}
{{--    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>--}}
{{--    <script src="plugins/summernote/summernote-bs4.min.js"></script>--}}
{{--    <script src="dist/js/demo.js"></script>--}}
{{--    <script src="dist/js/pages/dashboard.js"></script>--}}
@show
</body>
</html>
