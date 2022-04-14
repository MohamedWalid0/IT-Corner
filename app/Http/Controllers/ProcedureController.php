<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProcedureRequest;
use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{

    public function index(){

        $procedures = Procedure::paginate(10) ;
        return view('procedures.index' , compact('procedures')) ;

    }

    public function store(ProcedureRequest $request){

        Procedure::create($request->all()) ;
        return redirect()->route('procedures.index') ;

    }

}
