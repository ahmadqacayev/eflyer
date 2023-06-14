<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductStoreRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('admin.pages.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductStoreRequest $request)
    {
      $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            $image =  $fileName;
        }

         Product::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
             'stock_status' => $request->stock_status,
             'delivery' => $request->delivery,
            'image'=>$image,
            'category_id'=>$request->category_id,
        ]);

        return redirect()->back()->with('message', 'Product created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('admin.pages.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        $product = Product::find($id);


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $previousImage = public_path('/uploads/'.$product->image);
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            $image->move(public_path('uploads'), $filename);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->stock_status = $request->stock_status;
            $product->delivery = $request->delivery;
            $product->image = $filename;
            $product->save();
        }else{
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->stock_status = $request->stock_status;
            $product->delivery = $request->delivery;
            $product->save();
        }


        return redirect()->route('products.index')->with('message', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $product = Product::find($id);

        if(File::exists(public_path('/uploads/'.$product->image))){
            File::delete(public_path('/uploads/'.$product->image));
        }

        $product->delete();
        return redirect()->back()->with('message', 'Product deleted successfully');

    }
}
