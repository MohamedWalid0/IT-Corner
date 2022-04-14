<div class="modal fade" id="assignAssessmentModal-{{ $appointment->id }}"data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('appointments.assignAssessments' , $appointment )}}" method="post">
            @csrf
            <div class="modal-body">

                @foreach ( \App\Models\Assessment::all() as $assessment)
                    <div class="form-check col-3">
                        <input class="form-check-input" type="checkbox" name="assessments[]" id="checkbox_{{ $assessment->id }}"
                            value="{{ $assessment->id }}">
                        <label class="form-check-label" for="checkbox_{{ $assessment->id }}">
                            {{ $assessment->name }}
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
