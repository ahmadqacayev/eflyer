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


    <div class="col-lg-12">
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Slider List</h6>
            </div>
            <div class="table-responsive p-3">
                <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Active</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{$slider->title}}</td>
                            <td>{!! $slider->description !!}</td>
                            <td><img style="width: 150px; height: 100px;" src="/uploads/{{$slider->image}}"></td>
                            <td>{{$slider->button_active}}</td>
                            <td><a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-sm btn-primary">Edit</a> <a onclick="return confirm('Are you sure to delete this?')" href="{{route('delete_sliders',$slider->id)}}" class="btn btn-sm btn-danger">Delete</a></td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
