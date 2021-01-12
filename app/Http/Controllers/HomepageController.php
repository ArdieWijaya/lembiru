<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Support\Carbon;

class HomepageController extends Controller
{
    public function index(){
    $campaigns = Campaign::all();
    $arrdatediff = array();
    
    foreach($campaigns as $campaign){
        $endDate = Carbon::parse($campaign->endDate);
        $startDate = Carbon::now();
        $datediff = $endDate->diffInDays($startDate);

        array_push($arrdatediff, $datediff);
    }

    $sizearray = count($arrdatediff);

        return view('homepage', ['campaigns' => $campaigns, 'datediff' => $datediff, 'arrdatediff' => $arrdatediff, 'sizearray' => $sizearray]);
    }
}
