@extends('/admin/layout-komponen/master')
@section('title','Antropometri Admin')
@section('css')
<!-- css internal place -->

@endsection
@section('Antropometri Admin','active')
@section('konten')
<!-- Content Body place -->
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- pageheader  -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Menu Antropometri Admin</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard-admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Antropometri Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-statistic-1">
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                            <div class="container"><br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Tambah Data</button><br><br>
                            </div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto Antropometri</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($antropometri as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->foto}}</td>
                                        @if($data->status == 1)
                                        <td>Aktif</td>
                                        @else
                                        <td>NonAktif</td>
                                        @endif
                                        <td class="text-center">
                                            <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">
                                        Data Antropometri belum Tersedia
                                    </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end pageheader  -->
    </div>
</div>
@include('admin.antropometri-admin.create')
@include('admin.antropometri-admin.delete')
@endsection

@section('script')
<!-- script internal place -->

@endsection