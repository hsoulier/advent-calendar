<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function deleteAccount($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/dashboard');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('/edit', ['product' => $product]);
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->date = $request->date;
        $product->thumbnail = $request->thumbnail;
        $product->save();
        return redirect('/dashboard');
    }
}
