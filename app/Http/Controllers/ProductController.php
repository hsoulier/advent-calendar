<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use \DateTime;
use Illuminate\Support\Facades\Auth;




class ProductController extends Controller {
    public function single(Request $request) {
        $product = Product::findOrFail($request->id);
        $product->description = app(MarkdownRenderer::class)->toHtml($product->description);

        $comments = Comment::where(['product_id' => $request->id])
            ->get()
            ->sortBy(fn ($el) => date_timestamp_get(new DateTime($el->date)));


        //dd($comments);
        return view('product', ['product' => $product, 'comments' => $comments]);

    }



    public function send_comment(Request $request)
    {

        $user = Auth::user();

        $values = $request->all();

        /* dd([
            //'user_id' => Auth::id(),
            'product_id' => intval($values['product_id']),
            'user_id' => $user->id,
            'text' => $values['comment'],
            'date' => new DateTime()
        ]); */



        $product = Product::findOrFail($values['product_id']);






        $comm = Comment::create([
            //'user_id' => Auth::id(),
            'product_id' => intval($values['product_id']),
            'user_id' => $user->id,
            'text' => $values['comment'],
            'date' => new DateTime()
        ]);

        //dd($comm);


        return redirect("/products/{$request->request->product_id}");
    }


}
