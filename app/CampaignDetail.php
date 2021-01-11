<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CampaignDetail extends Model
{
    public function campaign(){
        return $this->belongsTo(Campaign::class, 'campaign_id');
    }
}
