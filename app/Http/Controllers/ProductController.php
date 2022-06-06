<?php

namespace App\Http\Controllers;

use App\Models\Product;
use DateTime;
use Illuminate\Http\Request;
use Spatie\LaravelMarkdown\MarkdownRenderer;

class ProductController extends Controller
{
    public function single(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->description = app(MarkdownRenderer::class)->toHtml(
            $product->description
        );
        // Todo: redirect home if the product has a date greater than today
        if (new DateTime($product->date) > new DateTime()) {
            return redirect('/');
        }
        return view('product', ['product' => $product]);
    }
}
