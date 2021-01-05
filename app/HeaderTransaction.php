<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderTransaction extends Model
{
    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function gadgetdonation(){
        return $this->hasMany(GadgetDonation::class);
    }
    public function moneydonation(){
        return $this->hasMany(MoneyDonation::class);
    }
}
