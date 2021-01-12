<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MoneyDonation extends Model
{
    protected $fillable = ['id', 'amount', 'payment_method', 'created_at', 'updated_at', 'user_id', 'cardno', 'exp', 'cvv'];

    public function headertransaction(){
        return $this->belongsTo(HeaderTransaction::class, 'transaction_id');
    }
}
