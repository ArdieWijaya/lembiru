<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GadgetDonation extends Model
{
    protected $fillable = ['brand', 'type', 'condition', 'user_id', 'campaign_id'];

    public function campaign(){
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
