<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
        $categories = Category::available(config('app.status.enable'))->get();
        $all_product = Product::availableLatest(config('app.status.enable'), config('app.order.latest'))->paginate(config('app.pagination.six'));

        return view('home', compact('all_product', 'categories'));
    }

    
}
