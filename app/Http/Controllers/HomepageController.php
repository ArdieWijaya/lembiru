<?php

namespace App\Http\Controllers;

use App\Campaign;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
    $campaigns = Campaign::all();
        return view('homepage', ['campaigns' => $campaigns]);
    }
}
