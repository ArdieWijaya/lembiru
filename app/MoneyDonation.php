<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoneyDonation extends Model
{
    public function headertransaction(){
        return $this->belongsTo(HeaderTransaction::class, 'transaction_id');
    }
}
