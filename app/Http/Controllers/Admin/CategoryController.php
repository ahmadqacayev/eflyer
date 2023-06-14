<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('admin.pages.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request)
    {

        $image = null;

        if ($request->hasFile('bg_image')) {
            $file = $request->file('bg_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            $image =  $fileName;
        }


        Category::create([
            'category_name' => $request->category_name,
            'bg_image' => $image,
        ]);

        return redirect()->route('show_category')->with('message', 'Category added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = Category::all();
        return view('admin.pages.categories.list',compact('data'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Category::find($id);
        return view('admin.pages.categories.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, string $id)
    {

        $category = Category::find($id);

        if ($request->hasFile('bg_image')) {
            $image = $request->file('bg_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $previousImage = public_path('/uploads/'.$category->bg_image);
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            $image->move(public_path('uploads'), $filename);
            $category->category_name = $request->category_name;
            $category->bg_image = $filename;
            $category->save();
        }else{
            $category->category_name = $request->category_name;
            $category->save();
        }

        return redirect()->route('show_category')->with('message', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Category::find($id);

        if(File::exists(public_path('/uploads/'.$data->bg_image))){
            File::delete(public_path('/uploads/'.$data->bg_image));
        }

        $data->delete();
        return redirect()->route('show_category')->with('message', 'Category deleted successfully');
    }
}
