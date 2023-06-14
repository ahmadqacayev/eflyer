@extends('admin.layouts.master')

@section('content')

        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 ml-4 text-gray-800">Product</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Product</li>
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
                <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">@csrf
                    <div class="card mb-6">
                        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Create Product</h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror " id="" aria-describedby=""
                                       placeholder="Enter name of product">
                                @error('name')
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
                                <label for="">Description</label>
                                <textarea name="description" class="form-control @error('description') is-invalid @enderror " rows="4" cols="10"> </textarea>

                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="">Price($)</label>
                                <input type="text" name="price" class="form-control @error('price') is-invalid @enderror " id="" aria-describedby=""
                                >
                                @error('price')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group">
                                <label for="">Choose Category</label>

                                <select name="category_id"  class="form-control @error('category') is-invalid @enderror" >
                                    <option value="">select</option>
                                    @foreach(App\Models\Category::all() as $key=> $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach

                                </select>

                                @error('category')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>

                            <div class="form-group">
                                <label for="">Stock Status</label> <br>
                                <input type="radio" name="stock_status" value="1" >
                                <label for="active">Yes</label>

                                <input type="radio" name="stock_status" value="0">
                                <label for="passive">No</label>
                            </div>

                            <div class="form-group">
                                <label for="">Delivery Status</label> <br>
                                <input type="radio" name="delivery" value="1" >
                                <label for="active">Delivered</label>

                                <input type="radio" name="delivery" value="0">
                                <label for="passive">Pending</label>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                    </div>
                </form>

            </div>
        </div>

    @endsection




