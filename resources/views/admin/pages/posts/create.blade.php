@extends('admin.layouts.master')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">Posts</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Posts</li>
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
            <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">@csrf

                <div class="card mb-6">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Create Post</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="" aria-describedby=""
                                   placeholder="Enter name of product">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea name="content_name" class="form-control @error('content_name') is-invalid @enderror " rows="4" cols="10"> </textarea>

                            @error('content_name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input @error('image') is-invalid @enderror  " id="customFile" name="image">
                                <label class="custom-file-label  " for="customFile">Choose file</label>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                          </span>
                                @enderror
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="">Publisher</label>
                            <input type="text" name="publisher" class="form-control @error('publisher') is-invalid @enderror " id="" aria-describedby=""
                                   placeholder="Enter name of product">
                            @error('publisher')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>




                        <button type="submit" class="btn btn-primary">Submit</button>

                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection






