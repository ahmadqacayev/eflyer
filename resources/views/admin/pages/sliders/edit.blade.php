@extends('admin.layouts.master')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">Slider</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Slider</li>
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
            <form action="{{route('sliders.update',$slider->id)}}" method="POST" enctype="multipart/form-data">@csrf
                {{method_field('PUT')}}
                <div class="card mb-6">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror " id="" aria-describedby=""
                                   placeholder="Enter name of product" value="{{$slider->title}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror " rows="4" cols="10">{!!  $slider->description !!} </textarea>
                            @error('price')
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
                            <img style="width: 150px; height: 100px;" src="/uploads/{{$slider->image}}">
                        </div>

                        <div class="form-group">
                            <label for="">Status</label> <br>
                            <input type="radio" name="status" id="active" value="active" @if($slider->button_active == 'active') checked @endif>
                            <label for="active">Active</label>

                            <input type="radio" name="status" id="passive" value="passive" @if($slider->button_active == 'passive') checked @endif>
                            <label for="passive">Passive</label>

                            @error('status')
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





