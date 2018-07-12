@extends('frontEnd.master')

@section('title')
    Shoping
    @endsection
@section('mainContent')

<div class="banner-grid">
    <div id="visual">
        <div class="slide-visual">
            <!-- Slide Image Area (1000 x 424) -->
            <ul class="slide-group">
                <li><img class="img-responsive" src="{{asset('frontEnd/images/ba1.jpg')}}" alt="Dummy Image" /></li>
                <li><img class="img-responsive" src="{{asset('frontEnd/images/ba2.jpg')}}" alt="Dummy Image" /></li>
                <li><img class="img-responsive" src="{{asset('frontEnd/images/ba3.jpg')}}" alt="Dummy Image" /></li>
            </ul>

            <!-- Slide Description Image Area (316 x 328) -->
            <div class="script-wrap">
                <ul class="script-group">
                    <li><div class="inner-script"><img class="img-responsive" src="{{asset('frontEnd/images/baa1.jpg')}}" alt="Dummy Image" /></div></li>
                    <li><div class="inner-script"><img class="img-responsive" src="{{asset('frontEnd/images/baa2.jpg')}}" alt="Dummy Image" /></div></li>
                    <li><div class="inner-script"><img class="img-responsive" src="{{asset('frontEnd/images/baa3.jpg')}}" alt="Dummy Image" /></div></li>
                </ul>
                <div class="slide-controller">
                    <a href="#" class="btn-prev"><img src="{{asset('frontEnd/images/btn_prev.png')}}" alt="Prev Slide" /></a>
                    <a href="#" class="btn-play"><img src="{{asset('frontEnd/images/btn_play.png')}}" alt="Start Slide" /></a>
                    <a href="#" class="btn-pause"><img src="{{asset('frontEnd/images/btn_pause.png')}}" alt="Pause Slide" /></a>
                    <a href="#" class="btn-next"><img src="{{asset('frontEnd/images/btn_next.png')}}" alt="Next Slide" /></a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>


</div>
<!-- //banner -->
<!-- content -->

<div class="new_arrivals">
    <div class="container">
        <h3><span>new </span>arrivals</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium</p>
        <div class="new_grids">
            <div class="col-md-4 new-gd-left">
                <img src="{{asset('frontEnd/images/wed1.jpg')}}" alt=" " />
                <div class="wed-brand simpleCart_shelfItem">
                    <h4>Wedding Collections</h4>
                    <h5>Flat 50% Discount</h5>
                    <p><i>$250</i> <span class="item_price">$500</span><a class="item_add hvr-outline-out button2" href="#">add to cart </a></p>
                </div>
            </div>
            <div class="col-md-4 new-gd-middle">
                <div class="new-levis">
                    <div class="mid-img">
                        <img src="{{asset('frontEnd/images/levis1.png')}}" alt=" " />
                    </div>
                    <div class="mid-text">
                        <h4>up to 40% <span>off</span></h4>
                        <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="new-levis">
                    <div class="mid-text">
                        <h4>up to 50% <span>off</span></h4>
                        <a class="hvr-outline-out button2" href="product.html">Shop now </a>
                    </div>
                    <div class="mid-img">
                        <img src="{{asset('frontEnd/images/dig.jpg')}}" alt=" " />
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="col-md-4 new-gd-left">
                <img src="{{asset('frontEnd/images/wed2.jpg')}}" alt=" " />
                <div class="wed-brandtwo simpleCart_shelfItem">
                    <h4>Spring / Summer</h4>
                    <p>Shop Men</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!-- //content -->

<!-- content-bottom -->


</div>
<!-- //content-bottom -->
<!-- product-nav -->

<div class="product-easy">
    <div class="container">


        <div class="sap_tabs">
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Latest Designs</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Special Offers</span></li>
                    <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Collections</span></li>
                </ul>
                <div class="resp-tabs-container">

                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        @foreach($publishedProducts as $publishedProduct)
                        <div class="col-md-3 product-men">
                            <div class="men-pro-item simpleCart_shelfItem">
                                <div class="men-thumb-item">
                                    <img src="{{asset($publishedProduct->productImage)}}" alt="" class="pro-image-front" alt="" height="200" width="200">
                                    <img src="{{asset($publishedProduct->productImage)}}" alt="" class="pro-image-back" alt="" height="200" width="200">
                                    <div class="men-cart-pro">
                                        <div class="inner-men-cart-pro">
                                            <a href="{{url('product-details/'.$publishedProduct->id)}}" class="link-product-add-cart">Quick View</a>
                                        </div>
                                    </div>
                                    <span class="product-new-top" id="kkk">New</span>

                                </div>
                                <div class="item-info-product ">
                                    <h4><a href="{{url('product-details/'.$publishedProduct->id)}}">{{$publishedProduct->productName}}</a></h4>
                                    <div class="info-product-price">
                                        <span class="item_price">$45.99</span>
                                        <del>$69.71</del>
                                    </div>
                                    <button class="item_add single-item hvr-outline-out add-to-cart" value="{{$publishedProduct->id}}">Add to cart</button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
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
