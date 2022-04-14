<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssessmentRequest;
use App\Models\Assessment;
use Illuminate\Http\Request;

class AssessmentController extends Controller
{
    public function index(){

        $assessments = Assessment::paginate(10) ;
        return view('assessments.index' , compact('assessments')) ;

    }

    public function store(AssessmentRequest $request){

        Assessment::create($request->all()) ;
        return redirect()->route('assessments.index') ;

    }



}
