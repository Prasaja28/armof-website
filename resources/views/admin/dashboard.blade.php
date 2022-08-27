@extends('/admin/layout-komponen/master')
@section('title','Dashboard')
@section('css')
<!-- css internal place -->

@endsection
@section('dashboard','active')
@section('konten')
<!-- Content Body place -->
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- pageheader  -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Selamat Datang Di Website Admin, {{ Session::get('username') }}</h2>
                    <script type="text/javascript">
                        var h = (new Date()).getHours();
                        var m = (new Date()).getMinutes();
                        var s = (new Date()).getSeconds();
                        if (h >= 4 && h < 10) document.writeln("Selamat pagi");
                        if (h >= 10 && h < 15) document.writeln("Selamat siang");
                        if (h >= 15 && h < 18) document.writeln("Selamat sore");
                        if (h >= 18 || h < 4) document.writeln("Selamat malam");
                    </script>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- end pageheader  -->
    </div>
</div>
@endsection

@section('script')
<!-- script internal place -->

@endsection