<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Campaign extends Model
{
    public function campaign_detail(){
        return $this->hasMany(CampaignDetail::class);
    }

    public function getDifference(){
        $startDate = Carbon::parse($this->startDate);
        $endDate = Carbon::parse($this->endDate);
        $difference = $startDate->diffInDays($endDate);
        return $difference;
    }
}
