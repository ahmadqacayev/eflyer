<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
        public function index(){
            $products = Product::get();
            $sliders = Slider::all();
            $categories = Category::all();
            $posts = Post::all();
            return view('front.pages.home',compact('categories','products', 'sliders', 'posts'));
        }
}
