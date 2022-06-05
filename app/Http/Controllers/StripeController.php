<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StripeController extends Controller {
    public function checkout(Request $request) {
        $user = Auth::user();
        if (!$user->stripe_id) {
            $user->createAsStripeCustomer();
        }
        return $request->user()->checkout([$request->price_id => 1], [
            'success_url' => route('payment-success', ['price_id' => $request->price_id]),
            'cancel_url' => route('payment-cancel', ['price_id' => $request->price_id]),
        ]);
    }
}
