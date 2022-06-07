<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Product;
use App\Models\Comment;
use Illuminate\Http\Request;
use Spatie\LaravelMarkdown\MarkdownRenderer;
use Illuminate\Support\Facades\Auth;




class ProductController extends Controller {
    public function single(Request $request) {
        $product = Product::findOrFail($request->id);
        $product->description = app(MarkdownRenderer::class)->toHtml($product->description);

        $comments = Comment::where(['product_id' => $request->id])
            ->get()
            ->sortBy(fn () => date_timestamp_get(new DateTime()));

        // dd($comments[0]->user);
        return view('product', ['product' => $product, 'comments' => $comments]);
    }



    public function send_comment(Request $request) {
        $values = $request->all();
        $comment = new Comment;

        $comment->product_id = intval($values['product_id']);
        $comment->user_id = Auth::user()->id;
        $comment->reply_to = 0;
        $comment->text = $values['comment'];
        $comment->date = new DateTime();

        $comment->save();
        return redirect("/products/{$values['product_id']}");
    }
}
