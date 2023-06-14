@extends('admin.layouts.master')

@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 ml-4 text-gray-800">Category</h1>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Category</li>
        </ol>
    </div>

    <div class="col-lg-12 mb-4">
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
        @endif
        <div class="card">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Simple Tables</h6>
            </div>
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Category Name</th>
                        <th>Background Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->category_name}}</td>
                            <td><img style="width: 150px; height: 100px;" src="/uploads/{{$data->bg_image}}"></td>
                            <td><a href="{{route('edit_category',$data->id)}}" class="btn btn-sm btn-primary">Edit</a> <a onclick="return confirm('Are you sure to delete this?')" href="{{route('delete_category',$data->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer"></div>
        </div>
    </div>

@endsection
