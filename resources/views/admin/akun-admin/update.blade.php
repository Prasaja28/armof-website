<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="edit{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqupdate">Update Data Akun</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin-akun/update/'.$users->id) }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama :</label>
                        <input type="text" class="form-control form-control-border @error('name') is-invalid @enderror" id="name" placeholder="Nama" name="name" value="{{ $users->name }}" required>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password :</label>
                        <input type="text" class="form-control form-control-border @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" value="{{ $users->password }}" required>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input type="text" class="form-control form-control-border @error('email') is-invalid @enderror" id="email" placeholder="E-mail" name="email" value="{{ $users->email }}" required>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
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