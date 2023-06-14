<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.pages.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostStoreRequest $request)
    {
        $image = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $fileName);

            $image =  $fileName;
        }

        Post::create([
            'title' => $request->title,
            'content' => $request->content_name,
            'image' => $image,
            'publisher' => $request->publisher
        ]);

        return redirect()->route('posts.index')->with('message', 'Post created successfully');
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
        $post = Post::find($id);
        return view('admin.pages.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostUpdateRequest $request, string $id)
    {
        $post = Post::find($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();

            $previousImage = public_path('/uploads/'.$post->image);
            if (File::exists($previousImage)) {
                File::delete($previousImage);
            }
            $image->move(public_path('uploads'), $filename);
            $post->title = $request->title;
            $post->content = $request->content_name;
            $post->image = $filename;
            $post->publisher = $request->publisher;
            $post->save();
        }else{
            $post->title = $request->title;
            $post->content = $request->content_name;
            $post->publisher = $request->publisher;
            $post->save();
        }


        return redirect()->route('posts.index')->with('message', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if(File::exists(public_path('/uploads/'.$post->image))){
            File::delete(public_path('/uploads/'.$post->image));
        }

        $post->delete();
        return redirect()->back()->with('message', 'Post deleted successfully');
    }
}
