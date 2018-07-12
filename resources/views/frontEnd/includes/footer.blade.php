<!-- footer -->
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="col-md-12 footer-right">
            <div class="clearfix"></div>
            <div class="sign-grds pull-right">
                <div class="col-md-4 sign-gd">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        @foreach($publishedCategory as $publisedCat)
                            <li>
                                <a href="{{url('/cateory-view/'.$publisedCat->id)}}">{{$publisedCat->categoryName}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-md-4 sign-gd-two">
                    <h4>Store Information</h4>
                    <ul>
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Address : 1234k Avenue, 4th block, <span>Newyork City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>Email : <a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>Phone : +1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-4 sign-gd flickr-post">
                    <h4>Flickr Posts</h4>
                    <ul>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b16.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b17.jpg/')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b18.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b16.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b17.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b18.jpg')}}" alt=" " class="img-responsive" /></a></li>
                        <li><a href="single.html"><img src="{{asset('frontEnd/images/b15.jpg')}}" alt=" " class="img-responsive" /></a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <p class="copy-right">&copy 2016 Smart Shop. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
    </div>
</div>
<!-- //footer -->