@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <hr/>
<h2 class="text-center text-success">{{Session::get('message')}}</h2>

    <table class="table table-hover table-bordered">
        <tr>
            <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Category Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($category as $cat)
            <tr>
                <th scope="row">{{$cat->id}}</th>
                <td>{{$cat->categoryName}}</td>
                <td>{!! $cat->categoryDescriptoin !!}</td>
                <td>{{$cat->publication_status==1 ? 'Publish':'Unpublish'}}</td>
                <td>
                    <a href="{{url('category/edit/'.$cat->id)}}" class="btn btn-success">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                    <a href="{{url('category/delete/'.$cat->id)}}" onclick="return confirm('Are you sure to delete');" class="btn btn-danger" >
                        <i class="fa fa-trash" aria-hidden="true"></i>
                    </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </tr>
    </table>
    @endsection