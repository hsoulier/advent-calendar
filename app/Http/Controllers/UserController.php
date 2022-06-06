<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Subscription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // TODO: Revoir la nomenclature des fonctions
    public function index()
    {
        if (Auth::user()->role == 1) {
            return $this->viewAdmin();
        } else {
            return redirect('/profile');
        }
    }

    public function profile()
    {
        $user = Auth::user();
        $user->purchases = Purchase::where(['user_id' => $user->id])->get();
        // TODO: Retrieve product from the product_id in subscription row
        $user->subscriptions = Subscription::where([
            'user_id' => $user->id,
        ])->get();
        return view('profile', ['user' => $user]);
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

    public function viewUser()
    {
        return view('profile');
    }

    public function deleteAccount($id)
    {
        $user = User::find($id);
        // dd($user);
        $user->delete();
        return redirect('/dashboard');
    }
}
