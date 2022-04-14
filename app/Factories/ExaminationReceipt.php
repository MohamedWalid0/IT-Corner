<?php

namespace App\Factories;

use App\Factories\interfaces\Receipt;

class ExaminationReceipt implements Receipt {


    public function printReceipt($data){

        return view('receipts.examination')->with([
            'startTime' => $data['startTime'] ,
            'visitType' => $data['visitType']
        ]) ;

    }


}
