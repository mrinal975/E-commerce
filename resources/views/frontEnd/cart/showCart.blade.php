@extends('frontEnd.master')
@section('mainContent')
    <!-- banner -->
    <div class="page-head">
        <div class="container">
            <h3>Check Out</h3>
        </div>
    </div>
    <!-- //banner -->
    <!-- check out -->
    <div class="checkout">
        <div class="container">
            <h3>My Shopping Bag</h3>
            <div class="table-responsive checkout-right animated wow slideInUp" data-wow-delay=".5s">
                <table class="timetable_sub">
                    <thead>
                    <tr>
                        <th>Remove</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Item Total Price</th>
                    </tr>
                    </thead>
                    <?php $total=0?>
                    @foreach($cartProduct as $cartProduct)
                    <tr class="rem1">
                        <td class="invert-closeb">
                            <div class="rem">
                               <a href="{{url('/cart/delete/'.$cartProduct->rowId)}}" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash"></span>
                               </a>
                            </div>
                        </td>
                        <td class="invert">{{$cartProduct->name}}</td>
                        <td class="invert">
                            <div class="quantity">
                               <form action="{{url('/cartQuantityUpdate/'.$cartProduct->rowId)}}">

                                    <div class="input-group">
                                        <input type="number" min="1" name="qty" class="form-control" value="{{ $cartProduct->qty }}"/>
                                        <span class="input-group-btn">
                                        <button type="submit" name="btn" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-upload"></span>
                                        </button>
                                        </span>
                                    </div>
                               </form>
                            </div>
                        </td>
                        <td class="invert">TK:{{$cartProduct->price}}</td>
                        <td class="invert">TK.{{$itemTotal=$cartProduct->price*$cartProduct->qty}}</td>

                    </tr>
                        <?php $total=$total+$itemTotal; ?>
                    @endforeach


                    <!--quantity-->
                </table>
            </div>
            <div class="checkout-left">

                <div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
                    <a href="{{url('/')}}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>
                    <?php
                    $customerId = Session::get('customerId');
                    $shippingId = Session::get('shippingId');
                    if ($customerId != null && $shippingId != null) {
                    ?>
                    <a href="{{ url('/checkout/payment') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Checkout</a>
                    <?php } else if ($customerId != null) { ?>
                    <a href="{{ url('/checkout/shipping') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Checkout</a>
                    <?php } else { ?>
                    <a href="{{ url('/checkout') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Checkout</a>
                    <?php } ?>
                </div>
                <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
                    <h4>Shopping basket</h4>
                    <ul>
                        <li>Total <i>-</i> <span>{{$total}}</span></li>

                        {{Session::put('orderTotal',$total)}}
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <hr/>
        </div>
    </div>
@endsection
@section('js')
    <!--quantity-->
    <script>
        $('.value-plus').on('click', function(){
            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
            divUpd.text(newVal);
        });

        $('.value-minus').on('click', function(){
            var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
            if(newVal>=1) divUpd.text(newVal);
        });
    </script>

    @endsection