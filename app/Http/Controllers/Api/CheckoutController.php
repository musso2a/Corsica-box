<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class CheckoutController extends Controller
{
    public function planStripe(Request $request){
        $plans = Plan::get();
        $intent = $request->user()->createSetupIntent();

        $stripeKey = env('STRIPE_KEY');

        return view('product', compact('plans' , 'intent',  'stripeKey'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'payment_method' => 'required',
            'plan' => 'required|exists:plans,id',
//            'coupon' => 'nullable'
        ]);
        $plan = Plan::find($request->plan);

        $request
            ->user()
            ->newSubscription('default', $plan->stripe_id)

            ->create($request->payment_method);

        return view('payment');
    }
}
