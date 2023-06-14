<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function show($id){
        $categories = Category::all();
        $product = Product::findOrFail($id);
        $sliders = Slider::all();

        $product_related = Product::where('category_id',$product->category_id)
            ->where('id','!=',$product->id)->get();


        return view('front.pages.products.show',compact('categories', 'product', 'sliders', 'product_related'));
    }

    public function search(Request $request){

        $categories = Category::all();
        $searchTerm = $request->input('searchParam');
        $categoryTerm = $request->input('category');

        $results = Product::query()->with('category');

        if($categoryTerm !== null && $request->has('category'))
        {
            $results->where('category_id',$categoryTerm);
        }

        $results = $results->where('name', 'like', '%'.$searchTerm.'%')->get();

        return view('front.pages.products.search', compact('results', 'searchTerm','categories'));
    }


}
