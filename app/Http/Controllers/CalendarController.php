<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Calendar;
use \DateTime;
use Illuminate\Http\Request;

class CalendarController extends Controller {
    public function home(Request $request) {
        $maxDate = new DateTime($request->query('end'));
        $products = Product::where(['calendar_id' => 1])
            ->get()
            ->sortBy(fn ($el) => date_timestamp_get(new DateTime($el->date)));
        $nbDays = 0;
        $iterator = 1;
        foreach ($products as &$product) {
            $product->order = $iterator;
            $iterator++;
            if (new DateTime($product->date) <= $maxDate) {
                $product->is_available = true;
                $nbDays++;
            }
        }
        return view('home', [
            'products' => $products,
            'nbDays' => $nbDays,
        ]);
    }
}
