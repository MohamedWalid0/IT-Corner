
<div class="modal fade" id="bookAppointmentModal-{{ $patient->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="bookAppointmentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bookAppointmentModalLabel">{{ $patient->name }}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form action="{{ route('appointments.book' , $patient) }}" method="post">
            @csrf
            <div class="modal-body">

                @if($errors)
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger ">{{ $error }}</div>
                    @endforeach
                @endif


                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <button class="btn btn-outline-secondary" type="button">Day</button>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03" name="day" aria-label="Example select with button addon">
                      <option selected>Choose...</option>

                        @foreach ( $days as $day )
                            <option value="{{ $day->id }}">{{ $day->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <button class="btn btn-outline-secondary" type="button">Visit Type</button>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03" name="visit_type" aria-label="Example select with button addon">
                      <option selected disabled >Choose...</option>

                        @foreach ( $visitTypes as $visitType )
                            <option value="{{ $visitType->id }}">{{ $visitType->name }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <button class="btn btn-outline-secondary" type="button">Start Time</button>
                    </div>
                    <select class="custom-select" id="inputGroupSelect03" name="start_time" aria-label="Example select with button addon">
                      <option selected disabled>Choose...</option>
                        {{ $time = new Carbon\Carbon('00:00:00');}}
                        @for ($i = 0; $i <= 23; $i++)
                            {{ $newTime = $time->addHour()->format('H:i') ; }}
                            <option value="{{ $newTime }}"> {{ $newTime }} </option>
                        @endfor


                    </select>
                </div>



            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline-primary">Save changes</button>
            </div>
        </form>

        </div>
    </div>
</div>
