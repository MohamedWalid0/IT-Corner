<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('procedures.store' )}}" method="post">
            @csrf
            <div class="modal-body">

                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger ">{{ $error }}</div>
                    @endforeach
                @endif

                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">Procedure</span>
                    </div>
                    <input type="text" class="form-control" placeholder="Procedure Name" name="name">
                    <input type="number" class="form-control" placeholder="Cost" name="cost">
                </div>

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Save changes</button>
            </div>
        </form>

        </div>
    </div>
</div>
