@foreach($koleksi as $data)
<!-- Modal -->
<div class="modal fade" id="delete{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="koleksiDELETE" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="koleksiDELETE">Delete Data Koleksi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h3>Apakah Anda yakin untuk Menghapus {{$data->furniture_name}} ?</h3>
            </div>
            <div class="modal-footer">
                <a href="{{ url('/koleksi-admin/delete-koleksi/'.$data->id)}}" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach