<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProductDetails($product_slug){
        $product_details = Product::ProductBySlug($product_slug, config('app.status.enable'))->get();

        return view('web.pages.product_details', compact('product_details'));
    }
}
