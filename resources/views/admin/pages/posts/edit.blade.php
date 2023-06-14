@extends('admin.layouts.master')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">Post</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Post</li>
        </ol>
    </div>

    @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
            {{session()->get('message')}}
        </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-10" id="app">
            <form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">@csrf
                {{method_field('PUT')}}
                <div class="card mb-6">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="" aria-describedby=""
                                   placeholder="Enter name of product" value="{{$post->title}}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea name="content_name" class="form-control @error('content_name') is-invalid @enderror " rows="4" cols="10">{!!  $post->content !!} </textarea>
                            @error('content_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror  " id="customFile" name="image">
                                <label class="custom-file-label  " for="customFile">Choose file</label>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                          </span>
                                @enderror
                            </div>
                            <img style="width: 150px; height: 100px;" src="/uploads/{{$post->image}}">
                        </div>

                        <div class="form-group">
                            <label for="">Publisher</label>
                            <input type="text" name="publisher" class="form-control @error('publisher') is-invalid @enderror " id="" aria-describedby=""
                                   placeholder="Enter name of product" value="{{$post->publisher}}">
                            @error('publisher')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>




                        <button type="submit" class="btn btn-primary">Update</button>

                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection






