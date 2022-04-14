<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function show(Patient $patient){

    
        return view('bills.show' , compact('patient')) ;

    }

}
