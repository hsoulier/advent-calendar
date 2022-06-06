<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {

    // TODO: Revoir la nomenclature des fonctions
    public function index() {
        if (Auth::user()->role == 1) {
            return $this->viewAdmin();
        } else {
            return redirect("/profile");
        }
    }

    public function profile() {
        $user = Auth::user();
        $user->purchases = Purchase::where(['user_id' => $user->id])->get();
        $user->subscriptions = Subscription::where(['user_id' => $user->id])->get();
        dd($user->subscriptions);
        return view('profile', ['user' => $user]);
    }

    public function create_customer() {
        $user = Auth::user();
        if ($user->stripe_id) {
            return redirect('/profile');
        }
        $user->createAsStripeCustomer();
        return redirect('/profile');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function viewAdmin() {
        return view('dashboard');
    }

    public function viewUser() {
        return view('profile');
    }
}
