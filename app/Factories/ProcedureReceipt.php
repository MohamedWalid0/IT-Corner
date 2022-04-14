<?php

namespace App\Factories;
use App\Factories\interfaces\Receipt ;
use App\Models\Procedure;

class ProcedureReceipt implements Receipt {

    public function printReceipt($procedures){

        // $totalProceduresCost = $procedures->sum('cost') ;
        // dd($totalProceduresCost) ;
        return view('receipts.procedure' , compact('procedures')) ;

    }


}
