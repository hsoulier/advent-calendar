<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use \DateTime;

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
        $products = Product::where(['calendar_id' => 1])->get()->sortBy(
            function ($el, $key) {
                return date_timestamp_get(new DateTime($el->date));
            }
        );
        $iterator = 1;
        foreach ($products as &$product) {
            $product->order = $iterator;
            $iterator++;
        }
        $products = $products->reject(function ($product) {
            // TODO: Change for the current date (date now)
            return new DateTime($product->date) > new DateTime('1930-01-01');
        });
        // $products->shuffle();
        return view('home', ['products' => $products]);
    }

    public function isAdmin() {
        return view('dashboard_admin');
    }

    public function isUser() {
        return view('dashboard');
    }
}
