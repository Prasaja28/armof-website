<!-- Modal -->
@foreach ($fungsi as $data)
<div class="modal fade bd-example-modal-lg" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqupdate">Update Data Kategori Fungsi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/kategori-fungsi/update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="nama_kategori_fungsi">Nama Kategori fungsi :</label>
                        <input type="text" class="form-control form-control-border @error('nama_kategori_fungsi') is-invalid @enderror" id="nama_kategori_fungsi" name="nama_kategori_fungsi" value="{{ $data->nama_kategori_fungsi }}" required>
                        @error('nama_kategori_fungsi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="furniture_id">Jenis Kategori Furniture :</label>
                        <select class="form-control dynamic" name="furniture_id" id="furniture_id" required="">
                            @foreach ($furnit as $furdata)
                            @if ($furdata->id == $data->furniture_id)
                            <option value="{{ $furdata->id }}" selected>{{ $furdata->nama_kategori_furniture }}</option>
                            @else
                            <option value="{{ $furdata->id }}">{{ $furdata->nama_kategori_furniture }}</option>
                            @endif
                            @endforeach
                        </select>
                        @error('furniture_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;">Masukkan Foto Baru</label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="foto" id="foto" accept=".png, .jpg, .jpeg">
                            <img src="{{ asset($data->foto) }}" alt="Tidak Ada gambar" style="width:150px; height:100px; margin-top:10px;">
                            <input type="text" hidden class="form-control @error('foto2') is-invalid @enderror" id="foto2" name="foto2" value="{{$data->foto}}">
                        </div>
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
@endforeach