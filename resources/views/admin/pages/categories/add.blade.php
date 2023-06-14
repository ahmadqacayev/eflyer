@extends('admin.layouts.master')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">Category</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
    </div>

    <div class="container-fluid">

        <div class="row justify-content-start">

            <div class="col-4">
                <div class="card">
{{--                    <div class="card-header ">--}}
{{--                        <h3 class="mb-0">Add Category</h3>--}}
{{--                    </div>--}}

                    <div class="card-body">
                        <form class="form-group" action="{{route('add_category')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control    @error('category_name') is-invalid @enderror" name="category_name" placeholder="Write Category Name">
                                @error('category_name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Background Image</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input @error('bg_image') is-invalid @enderror  " id="customFile" name="bg_image">
                                    <label class="custom-file-label  " for="customFile">Choose file</label>
                                    @error('bg_image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                          </span>
                                    @enderror
                                </div>

                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

{{--           <div style="text-align: center; padding-top: 40px">--}}
{{--               <h2 style="font-size: 40px; padding-bottom: 40px">Add Category</h2>--}}

{{--            --}}
{{--           </div>--}}


@endsection
