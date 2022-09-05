<div class="modal fade bd-example-modal-lg" id="ModalCreateFungsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Kategori Fungsi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kategori-fungsi/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kategori_fungsi">Nama Kategori Fungsi :</label>
                        <input type="text" class="form-control form-control-border @error('nama_kategori_fungsi') is-invalid @enderror" id="nama_kategori_fungsi" name="nama_kategori_fungsi" value="{{ old('nama_kategori_fungsi') }}" required>
                        @error('nama_kategori_fungsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="furniture_id">Jenis Kategori Furniture :</label>
                        <select class="form-control dynamic" name="furniture_id" id="furniture_id" required="">
                            <option selected="selected" selected disabled>Pilih Kategori Furniture</option>
                            @foreach ($furnit as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_kategori_furniture }}</option>
                            @endforeach
                        </select>
                        @error('furniture_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>