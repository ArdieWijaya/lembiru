<?php

namespace App\Http\Controllers;

use App\Campaign;
use App\GadgetDonation;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class DetailDonasiController extends Controller
{
    public function index($id){
        $campaign = Campaign::find($id);
        $donates = GadgetDonation::where('campaign_id', '=', $id)->get();
        $total = GadgetDonation::where('campaign_id', '=', $id)->count();
        $endDate = Carbon::parse($campaign->endDate);
        $startDate = Carbon::now();
        $datediff = $endDate->diffInDays($startDate);
        return view('detailDonasi', ['campaign' => $campaign, 'total' => $total, 'donates' => $donates, 'datediff' => $datediff]);
    }

    public function donate($id){
        $user = Auth::user()->id;
        $date = Carbon::now();

        $gadgetdonation = new GadgetDonation([
            'brand' => 'Apple',
            'type' => 'iPhone 12 Pro Max',
            'condition' => 'Used',
            'created_at' => $date,
            'user_id' => $user,
            'campaign_id' => $id
        ]);

        $gadgetdonation->save();

        return view('pengecekanPonsel');
    }
}
