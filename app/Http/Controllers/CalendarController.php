<?php

namespace App\Http\Controllers;

use App\Models\Product;

class CalendarController extends Controller {
    public function index() {
        $products = Product::where('calendar_id', 1)->get()->shuffle();
        return view('home', ['products' => $products]);
    }
}
