<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CalendarController extends Controller {
    public function index() {
        if (Auth::user()->role == 1) {
            return view('dashboard_admin');
            // $this->isAdmin();
        } else {
            return view('dashboard');
            // $this->isUser();
        }
    }

    public function home() {
        $products = Product::where('calendar_id', 1)->get()->shuffle();
        return view('home', ['products' => $products]);
    }

    public function isAdmin() {
        return view('dashboard_admin');
    }

    public function isUser() {
        return view('dashboard');
    }
}
