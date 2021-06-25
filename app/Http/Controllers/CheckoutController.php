<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class CheckoutController extends Controller
{
    public function planStripe(){
        $plans = Plan::get();

        return view('product', compact('plans'));
    }

    public function store(Request $request){
        dd('ok');
    }
}
