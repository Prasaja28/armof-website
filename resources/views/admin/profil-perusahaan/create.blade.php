<div class="modal fade bd-example-modal-lg" id="ModalCreateProfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Profil Perusahaan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin-profil/store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="content" id="profilEditor"></textarea>
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