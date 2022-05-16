<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Calendar;
use \DateTime;

class CalendarController extends Controller
{
    public function home()
    {
        $calendar = Calendar::findOrFail(1);
        $dayToShow = $calendar->day_to_show;

        $products = Product::where(['calendar_id' => 1])
            ->get()
            ->sortBy(function ($el, $key) {
                return date_timestamp_get(new DateTime($el->date));
            });
        $iterator = 1;
        foreach ($products as &$product) {
            $product->order = $iterator;
            $iterator++;
        }
        $products = $products->reject(function ($product) {
            return new DateTime($product->date) > new DateTime('now');
        });
        // $products->shuffle();
        return view('home', [
            'products' => $products,
            'dayToShow' => $dayToShow,
        ]);
    }

    public function resetDay()
    {
        // Reset calendar days
        $calendar = Calendar::findOrFail(1);
        $calendar->day_to_show = 1;
        $calendar->save();
        return redirect()->route('home');
    }

    public function addDay()
    {
        // Increment one calendar day to show
        $calendar = Calendar::findOrFail(1);
        $calendar->day_to_show++;
        $calendar->save();

        return redirect()->route('home');
    }
}
