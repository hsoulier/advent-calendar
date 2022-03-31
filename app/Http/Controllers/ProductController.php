<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\LaravelMarkdown\MarkdownRenderer;

class ProductController extends Controller {
    public function single(Request $request) {
        $product = Product::findOrFail($request->id);
        $product->description = app(MarkdownRenderer::class)->toHtml($product->description);
        // dd($product);
        return view('product', ['product' => $product]);
    }
}
