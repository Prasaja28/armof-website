@extends('/admin/layout-komponen/master')
@section('title','kategori fungsi')
@section('css')
<!-- css internal place -->

@endsection
@section('kategori fungsi','active')
@section('konten')
<!-- Content Body place -->
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- pageheader  -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Menu Kategori Fungsi</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="" class="breadcrumb-link">Menu Master</a></li>
                                <li class="breadcrumb-item active" aria-current="page">kategori fungsi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-statistic-1">
                            <div class="container"><br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateFungsi">Tambah Data</button><br><br>
                            </div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Foto</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($fungsi as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->nama_kategori_fungsi}}</td>
                                        <td>
                                            <img src="{{ URL::asset($data->foto) }}" width="150" height="100" alt="">
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                            |
                                            <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{$data->id}}"><i class="fas fa-pen-square"></i></button>
                                        </td>
                                    <tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Kategori Fungsi belum Tersedia
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
@include('admin.admin-kategori-fungsi.create')
@include('admin.admin-kategori-fungsi.update')
@include('admin.admin-kategori-fungsi.delete')
@endsection

@section('script')
<!-- script internal place -->

@endsection