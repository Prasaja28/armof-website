@foreach($profil as $data)
<div class="modal fade" id="deleteDesk{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="faqDELETE" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqDELETE">Delete Data Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin menghapus data profil tersebut?</p>
            </div>
            <div class="modal-footer">
                <a href="{{ url('/admin-profil/delete-profil/'.$data->id)}}" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach