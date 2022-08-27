@extends('/admin/layout-komponen/master')
@section('title','Setting Sosial Media')
@section('css')
<!-- css internal place -->
@endsection
@section('Setting Sosial Media','active')
@section('konten')
<!-- Content Body place -->
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <!-- pageheader  -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Menu Sosial Media</h2>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Setting Sosial Media</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 my-2">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Setting Admin</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body px-4">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Key</th>
                                            <th>Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($settings as $users)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $users->key }}</td>
                                            <td>{{ $users->value }}</td>
                                            <td class="text-center">
                                                {{-- @if ($users->status == 1) --}}
                                                {{-- <button class="btn btn-danger" alt="Hapus" data-toggle="modal"
                                                    data-target="#delete{{ $users->id }}"><i class="fas fa-trash-alt"></i></i></button> --}}
                                                {{-- @endif --}}
                                                <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{ $users->id }}"><i class="fas fa-pen-square"></i></button>
                                            </td>
                                        </tr>
                                        <!-- Model Update -->
                                        <!-- Modal -->
                                        <div class="modal fade bd-example-modal-lg" id="edit{{ $users->id }}" tabindex="-1" role="dialog" aria-labelledby="newsupdate" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="newsupdate">Update Social Media</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ url('/setting-socialmedia/update/' . $users->id) }}" method="post" enctype="multipart/form-data">
                                                            @method('put')
                                                            @csrf
                                                            <div class="form-group">
                                                                <fieldset disabled>
                                                                    <label for="key">Key :</label>
                                                                    <input type="text" class="form-control form-control-border @error('key') is-invalid @enderror" id="key" placeholder="Job Name" name="key" value="{{ $users->key }}" required>
                                                                    @error('key')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                </fieldset>
                                                            </div>
                                                            <!-- if buat membedakan code biasa dengan bg -->
                                                            <div class="form-group">
                                                                <label for="value">Value :</label>
                                                                @for ($i = 7; $i < $settings->count(); $i++)
                                                                    @if ($users->key == $settings[$i]->key)
                                                                    <input type="file" class="form-control form-control-border @error('value') is-invalid @enderror" id="value" placeholder="Value" name="value" value="{{ $users->value }}" required>
                                                                    @error('value')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                    @enderror
                                                                    @endif
                                                                    @endfor
                                                                    @for ($i = 0; $i < 7; $i++) @if ($users->key == $settings[$i]->key)
                                                                        <input type="text" class="form-control form-control-border @error('value') is-invalid @enderror" id="value" placeholder="Value" name="value" value="{{ $users->value }}" required>
                                                                        @error('value')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                        @endif
                                                                        @endfor
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                        </form>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <div class="alert alert-danger">
                                            Data Karier Belum Tersedia.
                                        </div>
                                        @endforelse
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Key</th>
                                            <th>Url</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
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