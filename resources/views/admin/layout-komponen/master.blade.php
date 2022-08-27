@if(\Session::has('user_id'))
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @include('admin.layout-komponen.css-eksternal')
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/logoicon.ico">
    @yield('css-internal')
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        @include('admin.layout-komponen.topbar')
        @include('admin.layout-komponen.sidebar')
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            @include('admin.layout-komponen.layout-konten')
            @include('admin.layout-komponen.footer')
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    @include('admin.layout-komponen.js-eksternal')
    @yield('js-internal')
</body>

</html>
@else
@include('admin.nologin')
@endif