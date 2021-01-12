<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index(){
        return view('kontak');
    }

    public function submit(Request $request){
        DB::table('messages')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->pesan
        ]);

        return redirect(route('homepage'));
    }
}
