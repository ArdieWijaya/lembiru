<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class DetailDonasiController extends Controller
{
    public function index($id){
        $campaign = Campaign::find($id);
        return view('detailDonasi', ['campaign' => $campaign]);
    }
}
