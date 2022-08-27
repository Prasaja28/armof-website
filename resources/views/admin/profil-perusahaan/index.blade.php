@extends('/admin/layout-komponen/master')
@section('title','Profil Perusahaan')
@section('css')
<!-- css internal place -->
@endsection
@section('Profil Perusahaan','active')
@section('konten')
<!-- Content Body place -->
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- pageheader  -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Menu Profil Perusahaan</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Profil Perusahaan</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card card-statistic-1">
                            <div class="container"><br>
                                @if($profil->count() == 0)
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateProfil">Tambah Data</button><br><br>
                                @else
                                <button class="btn btn-primary" data-toggle="modal" data-target="#ModalEditProfil">Edit Profil</button><br><br>
                                @endif
                            </div>
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Deskripsi</th>
                                        <th class="text-center">Terakhir Diperbarui</th>
                                        <th class="text-center">Hapus?</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($profil as $data)
                                    <tr>
                                        <td>
                                            <?php
                                            echo htmlspecialchars_decode(stripslashes($data->deskripsi))
                                            ?>
                                        </td>
                                        <td class="text-center">
                                            @if($data->updated_at == null)
                                            {{$data->created_at}}
                                            @else
                                            {{$data->updated_at}}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteDesk{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                        </td>
                                    <tr>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Profil belum Tersedia
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
@include('admin.profil-perusahaan.create')
@if($profil->count() != 0)
@include('admin.profil-perusahaan.delete')
@include('admin.profil-perusahaan.update')
@endif
@endsection

@section('script')
<!-- script internal place -->
<script type="text/javascript">
    ClassicEditor
        .create(document.querySelector('#profilEditor'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#profilUpdate'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection