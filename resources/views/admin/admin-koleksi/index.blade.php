@extends('/admin/layout-komponen/master')
@section('title','Koleksi')
@section('css')
<!-- css internal place -->

@endsection
@section('koleksi','active')
@section('konten')
<!-- Content Body place -->
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- pageheader  -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Menu Koleksi</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard-admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Koleksi</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-statistic-1">
                            <div class="container"><br>
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateProfil">Tambah Data</button><br><br>
                            </div>
                            <div class="table-responsive">
                                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>No</th>
                                            <th>Nama Furniture</th>
                                            <th>Foto</th>
                                            <th>Kategori</th>
                                            <th>Fungsi</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Umur Min</th>
                                            <th>Umur Max</th>
                                            <th>Url (AR)</th>
                                            <th>Deskripsi</th>
                                            <th>Tinggi Badan</th>
                                            <th>Berat Badan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($koleksi as $data)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$data->nama_koleksi}}</td>
                                            <td> @foreach (json_decode($data->foto) as $picture)
                                                <img src="{{ asset('/img/koleksi-img/'.$picture) }}" style="height:80px; width:120px;object-fit: cover;object-position: center;" /><br><br>
                                                @endforeach
                                            </td>
                                            <td>{{$data->furniture_name}}</td>
                                            <td>{{$data->fungsi_name}}</td>
                                            <td>{{$data->gender}}</td>
                                            <td>{{$data->age_min}}</td>
                                            <td>{{$data->age_max}}</td>
                                            <td>{{$data->link_ar}}</td>
                                            <td style="overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp: 8;-webkit-box-orient: vertical;">
                                                <?php
                                                echo htmlspecialchars_decode(stripslashes($data->deskripsi))
                                                ?>
                                            </td>
                                            <td>{{$data->height}}</td>
                                            <td>{{$data->weight}}</td>
                                            <td class="text-center">
                                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button><br><br>
                                                <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{$data->id}}"><i class="fas fa-pen-square"></i></button>
                                            </td>
                                        <tr>
                                            @empty
                                            <div class="alert alert-danger">
                                                Data Koleksi belum Tersedia
                                            </div>
                                            @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end pageheader  -->
    </div>
</div>
@include('admin.admin-koleksi.create')
@include('admin.admin-koleksi.update')
@include('admin.admin-koleksi.delete')
@endsection

@section('script')
<!-- script internal place -->
<script type="text/javascript">
    ClassicEditor
        .create(document.querySelector('#koleksiEditor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#koleksiUpdate'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection