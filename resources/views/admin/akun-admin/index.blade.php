@extends('/admin/layout-komponen/master')
@section('title','Akun Admin')
@section('css')
<!-- css internal place -->

@endsection
@section('Akun Admin','active')
@section('konten')
<!-- Content Body place -->
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- pageheader  -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Menu Akun Admin</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Akun Admin</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-statistic-1">
                            <div class="container"><br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Tambah Data</button><br><br>
                            </div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>password</th>
                                        <th>email</th>
                                        <th>status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($user as $users)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$users->name}}</td>
                                        <td>{{$users->password}}</td>
                                        <td>{{$users->email}}</td>
                                        @if($users->status == 1)
                                        <td>Aktif</td>
                                        @else
                                        <td>NonAktif</td>
                                        @endif
                                        <td class="text-center">
                                            @if($users->status == 1)
                                            <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$users->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                            |
                                            @endif
                                            <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{$users->id}}"><i class="fas fa-pen-square"></i></button>
                                        </td>
                                    </tr>
                                    @empty
                                    <div class="alert alert-danger">
                                        Data Akun belum Tersedia
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
@include('admin.akun-admin.create')
@include('admin.akun-admin.update')
@include('admin.akun-admin.delete')
@endsection

@section('script')
<!-- script internal place -->

@endsection