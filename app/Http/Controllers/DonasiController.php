<?php

namespace App\Http\Controllers;

use App\MoneyDonation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonasiController extends Controller
{
    public function index(){
        return view('donasi');
    }

    public function donate(Request $request){
        $user = Auth::user()->id;

        $this->validate($request, [
           'cardno' => ['required', 'numeric', 'min:16', 'max:16'],
            'exp' => ['required', 'numeric', 'min:6', 'max:6'],
            'cvv' => ['required', 'numeric', 'min:3', 'max:3']
        ]);

        $moneydonation = new MoneyDonation([
            'amount' => $request->money,
            'payment_method' => 'CREDIT/DEBIT',
            'user_id' => $user,
            'cardno' => $request->cardno,
            'exp' => $request->exp,
            'cvv' => $request->cvv
        ]);

        $moneydonation->save();


        return redirect(route('homepage'));
    }
}
