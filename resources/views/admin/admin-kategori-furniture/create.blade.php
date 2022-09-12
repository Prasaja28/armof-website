<div class="modal fade bd-example-modal-lg" id="ModalCreateProfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Kategori Furniture</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kategori-furniture/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_kategori_furniture">Nama Kategori furniture :</label>
                        <input type="text" class="form-control form-control-border @error('nama_kategori_furniture') is-invalid @enderror" id="nama_kategori_furniture" placeholder="Nama Koleksi" name="nama_kategori_furniture" value="{{ old('nama_kategori_furniture') }}" required>
                        @error('nama_kategori_furniture')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="file" name="foto_furniture" class="form-control">
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