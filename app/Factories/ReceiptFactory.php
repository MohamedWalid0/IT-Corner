<?php

namespace App\Factories;

class ReceiptFactory
{
    public function getType($receiptType)
    {
        if ($receiptType === null) {
            return false;
        }
        if (strcasecmp(trim($receiptType), 'examination') === 0) {
            return new ExaminationReceipt();
        }
        if (strcasecmp(trim($receiptType), 'procedure') === 0) {
            return new ProcedureReceipt();
        }
        return false;
    }
}
