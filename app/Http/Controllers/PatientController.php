<?php

namespace App\Http\Controllers;

use App\Factories\ReceiptFactory;
use App\Http\Requests\PatientRequest;
use App\Models\Day;
use App\Models\Patient;
use App\Models\Procedure;
use App\Models\VisitType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{

    protected $days ;
    protected $visitTypes ;

    public function __construct(){
        $this->days = Day::all() ;
        $this->visitTypes = VisitType::all() ;
    }

    public function index(){

        $patients = Patient::orderByDesc('created_at')->paginate(10) ;
        return view('patients.index' , compact('patients')) -> with([
            'days' => $this->days ,
            'visitTypes' => $this->visitTypes
        ]) ;

    }

    public function store(PatientRequest $request){

        Patient::create($request->all()) ;
        return redirect()->route('patients.index') ;

    }

    public function show(Patient $patient){

        return view('patients.show' , compact('patient')) ;
    }

    public function assignProcedures(Request $request , Patient $patient){

        try {

            DB::beginTransaction();

            $patient->procedures()->attach($request->procedures);
            $procedures = Procedure::whereIn('id' , $request->procedures)->get() ;

            $patient->bill()->create([
                'total_fees' => $procedures->sum('cost') ,
                'appointment_id' => $patient->appointments()->latest()->pluck('id')->first()
            ]) ;

            $receiptType = (new ReceiptFactory())->getType("procedure");

            DB::commit();

            return $receiptType->printReceipt($procedures);

        } catch (\Throwable $th) {
            //throw $th;
            DB::rollBack();
            return back() ;

        }

    }



}
