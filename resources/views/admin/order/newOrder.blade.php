@extends('admin.master')
@section('title')
    New Order
    @endsection
@include('admin.order.info')
@section('content')

    <h2 class="text-center text-success">{{Session::get('message')}}</h2>

    <table class="table table-hover table-bordered">
        <thead>
        <tr>
            <th class="text-center">Customer Name</th>
            <th class="text-center">Product Name</th>
            <th class="text-center">Phone Number</th>
            <th class="text-center">Time</th>
            <th class="text-center">Product Price</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($newOrder as $order)
        <tr>
            <td class="text-center">{{$order->fulname}}</td>
            <td class="text-center">{{$order->productName}}</td>
            <td class="text-center">{{$order->phonenumber}}</td>
            <td class="text-center">{{$order->created_at}}</td>
            <td class="text-center">Tk.{{$order->orderTotal}}</td>
            <td class="text-center"><a href="{{url('order/delivered/'.$order->id)}}" title="Deliver" class="btn btn-primary"><i class="fa fa-plane" aria-hidden="true"></i>
                </a>
                <a href="{{url('order/delete/delever/page/'.$order->id)}}" title="Cancel Order" class="btn btn-danger" onclick="confirm('Are you confirm to delete ?')"><i class="fa fa-trash-o" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
            @endforeach
        </tbody>
    </table>
@endsection