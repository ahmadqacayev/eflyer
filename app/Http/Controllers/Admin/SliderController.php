<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('admin.pages.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderStoreRequest $request)
    {

        $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            $image =  $fileName;
        }

        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $image,
            'button_active' => $request->status
        ]);

        return redirect()->route('sliders.index')->with('message', 'Slider created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::find($id);
        return view('admin.pages.sliders.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderUpdateRequest $request, string $id)
    {
        $slider = Slider::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $previousImage = public_path('/uploads/'.$slider->image);
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            $image->move(public_path('uploads'), $filename);
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->image = $filename;
            $slider->button_active = $request->status;
            $slider->save();
        }else{
            $slider->title = $request->title;
            $slider->description = $request->description;
            $slider->button_active = $request->status;
            $slider->save();
        }


        return redirect()->route('sliders.index')->with('message', 'Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);

        if(File::exists(public_path('/uploads/'.$slider->image))){
            File::delete(public_path('/uploads/'.$slider->image));
        }

        $slider->delete();
        return redirect()->back()->with('message', 'Slider deleted successfully');
    }
}
