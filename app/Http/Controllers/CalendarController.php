<?php

namespace App\Http\Controllers;

use App\Models\Product;
use \DateTime;

class CalendarController extends Controller {
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
            return new DateTime($product->date) > new DateTime('now');
        });
        // $products->shuffle();
        return view('home', ['products' => $products]);
    }
}
