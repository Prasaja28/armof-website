<div class="modal fade bd-example-modal-lg" id="ModalCreateProfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Koleksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/koleksi-admin/store') }}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nama_koleksi">Nama Furniture :</label>
                        <input type="text" class="form-control form-control-border @error('nama_koleksi') is-invalid @enderror" id="nama_koleksi" placeholder="Masukkan Nama Koleksi" name="nama_koleksi" value="{{ old('nama_koleksi') }}" required>
                        @error('nama_koleksi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="furniture_id">Kategori Furniture :</label>
                        <select class="form-control dynamic" name="furniture_id" id="furniture_id" required="">
                            <option selected="selected" selected disabled>Pilih Kategori Furniture</option>
                            @foreach ($furnitureKol as $data)
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
                        <label for="fungsi_id">Kategori Fungsi :</label>
                        <select class="form-control dynamic" name="fungsi_id" id="fungsi_id" required="">
                            <option selected="selected" selected disabled>Pilih Kategori Fungsi</option>
                            @foreach ($fungsiKol as $data)
                            <option value="{{ $data->id }}">{{ $data->nama_kategori_fungsi }}</option>
                            @endforeach
                        </select>
                        @error('fungsi_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="age_min">Umur minimum :</label>
                        <input type="number" class="form-control form-control-border @error('age_min') is-invalid @enderror" id="age_min" placeholder="Masukkan Umur Minimum" name="age_min" value="{{ old('age_min') }}" min="1" max="99" required>
                        @error('age_min')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="age_max">Umur maximum :</label>
                        <input type="number" class="form-control form-control-border @error('age_max') is-invalid @enderror" id="age_max" placeholder="Masukkan Umur Maximum" name="age_max" value="{{ old('age_max') }}" min="1" max="99" required>
                        @error('age_max')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="height">Masukkan Tinggi Badan Rekomedasi :</label>
                        <input type="number" class="form-control form-control-border @error('height') is-invalid @enderror" id="height" placeholder="Masukkan Tinggi Badan (CM)" name="height" value="{{ old('height') }}" min="1" required>
                        @error('height')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="weight">Masukkan Berat Badan Rekomedasi :</label>
                        <input type="number" class="form-control form-control-border @error('weight') is-invalid @enderror" id="weight" placeholder="Masukkan Berat Badan (KG)" name="weight" value="{{ old('weight') }}" min="1" required>
                        @error('weight')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="gender">Jenis Kelamin :</label>
                        <select class="form-control select2 select2-danger mob" id="gender" name="gender" value="{{ old('gender') }}" data-dropdown-css-class="select2-danger">
                            <option selected="selected" selected disabled>
                                Pilih Jenis Kelamin
                            </option>
                            @if (old('gender') == 'Laki-Laki')
                            <option selected value="Laki-Laki">Laki-Laki
                            </option>
                            <option value="Perempuan">Perempuan
                            </option>
                            @elseif(old('gender') == 'Perempuan')
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option selected value="Perempuan">
                                Perempuan
                            </option>
                            @else
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan
                            </option>
                            @endif
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group control-group increment">
                            <input type="file" name="foto[]" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-success zz" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                        </div>
                        <div class="clone hide">
                            <div class="control-group input-group" style="margin-top:10px">
                                <input type="file" name="foto[]" class="form-control">
                                <div class="input-group-btn">
                                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                            </div>
                        </div>
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

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".zz").click(function() {
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
        });
    });
</script>
<script>
    function textLength(value) {
        var maxLength = 2;
        if (value.length > maxLength) return false;
        return true;
    }
    var oldValue = '';
    var alert = document.getElementById('alert');
    document.getElementById('age_min').onkeyup = function() {
        if (!textLength(this.value)) {
            this.value = oldValue;
            alert.innerHTML = 'Text is too long!'
        } else oldValue = this.value;
    }
</script>
<script>
    function textLength(value) {
        var maxLength = 2;
        if (value.length > maxLength) return false;
        return true;
    }
    var oldValue = '';
    var alert = document.getElementById('alert');
    document.getElementById('age_max').onkeyup = function() {
        if (!textLength(this.value)) {
            this.value = oldValue;
            alert.innerHTML = 'Text is too long!'
        } else oldValue = this.value;
    }
</script>