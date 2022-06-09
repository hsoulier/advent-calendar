<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Subscription;

class StripeController extends Controller {
    public function checkout(Request $request) {
        $user = Auth::user();
        if (!$user->stripe_id) {
            $user->createAsStripeCustomer();
        }
        return $request->user()->checkout([$request->price_id => 1], [
            'success_url' => route('payment-success', ['price_id' => $request->price_id]) . '&session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('payment-cancel', ['price_id' => $request->price_id]),
        ]);
    }

    public function payment_success(Request $request) {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        $subscription = new Subscription;
        $checkout = $request->user()->stripe()->checkout->sessions->retrieve($request->get('session_id'));
        if ($checkout->status === 'complete') {
            $payment_intent = $stripe->paymentIntents->retrieve($checkout->payment_intent, []);
            $price = $stripe->prices->retrieve($request->price_id, []);
            $product = $stripe->products->retrieve($price->product, []);
            $subscription->user_id = $request->user()->id;
            $subscription->name = $product->name;
            $subscription->stripe_id = $request->user()->stripe_id;
            $subscription->stripe_status = $checkout->status;
            $subscription->stripe_price = $request->price_id;
            $subscription->created_at = $payment_intent->created;
            $subscription->updated_at = $payment_intent->created;
            $subscription->quantity = 1;
            $subscription->calendar_id = 1;
            $subscription->save();
            return view('payment', ['type' => 'success']);
        } else {
            return view('payment', ['type' => 'cancel', 'price_id' => $request->price_id]);
        }
    }

    public function singleCheckout(Request $request, $id) {
        $product = Product::findOrFail($id);
        // dd(intval($product->price) * 100, $product->name);
        dd($request->user()->findTaxId("txr_1L8fhULxko5YkdEBOJXbaWfg"));
        return $request->user()->checkoutCharge(intval($product->price) * 100, $product->name);
    }
}
