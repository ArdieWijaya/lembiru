<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengecekanPonselController extends Controller
{
    public function index(){
        return redirect(view('homepage'));
    }
}
