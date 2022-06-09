<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Product;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class AdminController extends Controller
{
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

    public function deleteContactMessage($id)
    {
        $contact = Form::find($id);
        $contact->delete();
        return redirect('/dashboard');
    }

    public function deleteComment($id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect('/dashboard');
    }


}
