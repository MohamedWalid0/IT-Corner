<div class="modal fade" id="assignProcedureModal-{{ $patient->id }}"data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('patients.assignProcedures' , $patient )}}" method="post">
            @csrf
            <div class="modal-body">

                @foreach ( \App\Models\Procedure::all() as $procedure)
                    <div class="form-check col-3">
                        <input class="form-check-input" type="checkbox" name="procedures[]" id="checkbox_{{ $procedure->id }}"
                            value="{{ $procedure->id }}">
                        <label class="form-check-label" for="checkbox_{{ $procedure->id }}">
                            {{ $procedure->name }}
                        </label>
                    </div>
                @endforeach

            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Save changes</button>
            </div>
        </form>

        </div>
    </div>
</div>
