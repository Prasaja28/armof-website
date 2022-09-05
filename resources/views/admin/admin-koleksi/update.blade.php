<!-- Modal -->
@foreach ($koleksi as $data)
<div class="modal fade bd-example-modal-lg" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqupdate">Update Data Koleksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/koleksi-admin/update-koleksi/'.$data->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="edit_nama_koleksi">Nama Furniture :</label>
                        <input type="text" class="form-control form-control-border @error('nama_koleksi') is-invalid @enderror" id="nama_koleksi" placeholder="Masukkan Nama Koleksi" name="nama_koleksi" value="{{$data->nama_koleksi}}" required>
                        @error('nama_koleksi')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit_furniture_id">Kategori Furniture :</label>
                        <select class="form-control select2 select2-danger mob" id="furniture_id" name="furniture_id" data-dropdown-css-class="select2-danger" value="{{ old('nama_kategori_furniture') }}">
                            <option value="{{ $data->furniture_id }}" selected disabled>{{ $data->furniture_name }}</option>
                            @foreach ($furnitureKol as $furdata)
                            <option value="{{ $furdata->id }}">{{ $furdata->nama_kategori_furniture }}</option>
                            @endforeach
                        </select>
                        @error('furniture_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit_fungsi_id">Kategori Fungsi :</label>
                        <select class="form-control select2 select2-danger mob" id="fungsi_id" name="fungsi_id" data-dropdown-css-class="select2-danger">
                            <option value="{{ $data->fungsi_id }}" selected disabled>{{ $data->fungsi_name }}</option>
                            @foreach ($fungsiKol as $fungdata)
                            <option value=" {{ $fungdata->id }}">{{ $fungdata->nama_kategori_fungsi }}</option>
                            @endforeach
                        </select>
                        @error('fungsi_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit_age_min">Umur minimum :</label>
                        <input type="number" class="form-control form-control-border @error('age_min') is-invalid @enderror" id="age_min" placeholder="Masukkan Umur Minimum" name="age_min" value="{{$data->age_min}}" min="1" max="99" required>
                        @error('age_min')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit_age_max">Umur maximum :</label>
                        <input type="number" class="form-control form-control-border @error('age_max') is-invalid @enderror" id="age_max" placeholder="Masukkan Umur Maximum" name="age_max" value="{{$data->age_max}}" min="1" max="99" required>
                        @error('age_max')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit_height">Masukkan Tinggi Badan Rekomedasi :</label>
                        <input type="number" class="form-control form-control-border @error('height') is-invalid @enderror" id="height" placeholder="Masukkan Tinggi Badan (CM)" name="height" value="{{$data->height}}" min="1" required>
                        @error('height')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit_weight">Masukkan Berat Badan Rekomedasi :</label>
                        <input type="number" class="form-control form-control-border @error('weight') is-invalid @enderror" id="weight" placeholder="Masukkan Berat Badan (KG)" name="weight" value="{{$data->weight}}" min="1" required>
                        @error('weight')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edit_weight">Masukkan Deskripsi Barang :</label>
                        <textarea class="form-control" name="content" id="koleksiUpdate">
                              <?php
                                echo htmlspecialchars_decode(stripslashes($data->deskripsi))
                                ?>
                          </textarea>
                    </div>
                    <div class="form-group">
                        <label for="edit_gender">Jenis Kelamin :</label>
                        <select class="form-control select2 select2-danger mob" id="gender" name="gender" data-dropdown-css-class="select2-danger">
                            <option value="{{$data->gender}}" selected disabled>
                                {{$data->gender}}
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
                            <input type="text" hidden class="form-control @error('foto2') is-invalid @enderror" id="foto2" name="foto2" value="{{$data->foto}}">
                            <div class="input-group-btn">
                                <button class="btn btn-success zz" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                            </div>
                        </div>
                        <div class="clone hide">
                            <div class="control-group input-group" style="margin-top:10px">
                                <input type="file" name="foto[]" class="form-control">
                                <input type="text" hidden class="form-control @error('foto2') is-invalid @enderror" id="foto2" name="foto2" value="{{$data->foto}}">
                                <div class="input-group-btn">
                                    <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                                </div>
                            </div>
                        </div>
                        @foreach (json_decode($data->foto) as $picture)
                        <img src="{{ asset('/img/koleksi-img/'.$picture) }}" style="height:80px; width:120px" /><br><br>
                        @endforeach
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