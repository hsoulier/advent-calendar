<?php

namespace App\Http\Controllers;

use App\Models\Product;
use \DateTime;
use Illuminate\Http\Request;

class CalendarController extends Controller {
    public function home(Request $request) {
        $time = $request->query('end');
        $products = Product::where(['calendar_id' => 1])->get()->sortBy(
            fn ($el, $key) => date_timestamp_get(new DateTime($el->date))
        );
        $iterator = 1;
        foreach ($products as &$product) {
            $product->order = $iterator;
            $iterator++;
            if (new DateTime($product->date) > new DateTime($time)) {
                $product->is_available = true;
            }
        }
        // $products = $products->reject(function ($product) {
        //     return new DateTime($product->date) > new DateTime('now');
        // });
        // $products->shuffle();
        return view('home', ['products' => $products]);
    }
}
