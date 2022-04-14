<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Day;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Factories\ReceiptFactory;
use App\Http\Requests\AppointmentRequest;
use App\Models\Bill;
use App\Models\VisitType;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    protected $days ;
    protected $appointments ;

    public function __construct(){
        $this->days = Day::all() ;

    }

    public function index(Day $day = null){

        $days = $this->days;

        if ($day) {
            $this->appointments = $day->appointments()->orderBy('start_time')->paginate(10) ;
            return view('appointments.index' ) ->with (['days' => $days ,'appointments'=> $this->appointments]);

        }

        $this->appointments = Appointment::orderBy('start_time')->paginate(10) ;
        return view('appointments.index' ) ->with (['days' => $days ,'appointments'=> $this->appointments]);

    }


    public function show(Appointment $appointment){

        return view('appointments.show' , compact('appointment')) ;

    }


    public function book(AppointmentRequest $request , Patient $patient){

        try {
            DB::beginTransaction();

            $appointment = $patient->appointments()->create([
                'visit_type_id' => $request->visit_type ,
                'day_id' => $request->day,
                'start_time' => new Carbon($request->start_time) ,
                'end_time' => (new Carbon($request->start_time))->addMinutes(30)
            ]) ;

            $visitType = VisitType::whereId($request->visit_type)->first() ;

            $appointment->bill()->create([
                'total_fees' => $visitType->cost ,
                'patient_id' => $patient->id
            ]) ;

            $receiptType = (new ReceiptFactory())->getType("examination");

            $data = [
                'startTime' => $appointment->start_time ,
                'visitType' => $visitType
            ];

            DB::commit();
            return $receiptType->printReceipt($data);

        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return back() ;

        }



    }


    public function assignAssessments(Request $request , Appointment $appointment){

        $appointment->assessments()->attach($request->assessments);
        return redirect()->route('appointments.show' , $appointment) ;

    }



}

