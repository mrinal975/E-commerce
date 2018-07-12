@extends('admin.master')
@section('title')
    Manage Manufacturer
    @endsection
@section('content')
    <hr/>
    <h2 class="text-center text-success">{{Session::get('message')}}</h2>

    <table class="table table-hover table-bordered">
        <tr>
            <thead>
            <tr>
                <th>ID</th>
                <th>Manufactur Name</th>
                <th>Manufactur Description</th>
                <th>Publication Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($manufactur as $manufact)
                <tr>
                    <th scope="row">{{$manufact->id}}</th>
                    <td>{{$manufact->manufacturerName}}</td>
                    <td>{!! $manufact->manufacturerDescription !!}</td>
                    <td>{{$manufact->publicationStatus==1 ? 'Publish':'Unpublish'}}</td>
                    <td>
                        <a href="{{url('manufacturer/edit/'.$manufact->id)}}" class="btn btn-success">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                        <a href="{{url('manufacturer/delete/'.$manufact->id)}}" onclick="return confirm('Are you sure to delete');" class="btn btn-danger" >
                            <i class="fa fa-trash" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </tr>
    </table>
@endsection