@extends('frontEnd.master')
@section('mainContent')
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <div class="page-head">
        <div class="container">
            <h3>Men's Wear</h3>
        </div>
    </div>
    <div class="men-wear">
        <div class="container">

            <div class="single-pro">
                @foreach($publishedCategoryProducts as $publishedCategoryProduct)
                <div class="col-md-3 product-men">

                    <div class="men-pro-item simpleCart_shelfItem">
                        <div class="men-thumb-item">
                            <img src="{{asset($publishedCategoryProduct->productImage)}}" alt="" class="pro-image-front" height="200" width="200">
                            <img src="{{asset($publishedCategoryProduct->productImage)}}" alt="" class="pro-image-back" height="200" width="200">
                            <div class="men-cart-pro">
                                <div class="inner-men-cart-pro">
                                    <a href="single.html" class="link-product-add-cart">Quick View</a>
                                </div>
                            </div>
                            <span class="product-new-top">New</span>
                        </div>
                        <div class="item-info-product ">
                            <h4><a href="single.html">{{$publishedCategoryProduct->productName}}</a></h4>
                            <div class="info-product-price">
                                <span class="item_price">Tk. {{$publishedCategoryProduct->productPrice}}</span>
                            </div>
                            <button class="item_add single-item hvr-outline-out add-to-cart" value="{{$publishedCategoryProduct->id}}">Add to cart</button>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).on('click','.add-to-cart',function () {
                console.log('clicked');
                var product_id=$(this).val();
                console.log(product_id);
                $.ajax({
                    type:'get',
                    url:'{{URL::to('/cart/add/')}}',
                    data:{'id':product_id},
                    success:function (data) {
                        console.log('Successfully data received');
                        $('#updateCartInfo').html(data);
                        replaceWith($('#updateCartInfo').html(data));
                    },
                    error:function () {
                        console.log('Data Not receiveed');
                    }
                });
            })
        });
    </script>
@endsection