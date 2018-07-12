<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<div class="header-bot">
    <div class="container">
        <div class="col-md-3 header-left">
            <h1><a href="index.html"><img src="{{asset('frontEnd/images/logo3.jpg')}}"></a></h1>
        </div>
        <div class="col-md-6 header-middle">
            <form action="{{url('/search/product')}}" method="post">
                {{ csrf_field() }}
                <div class="search">
                    <input type="search" name="search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}" required="">
                </div>
                <div class="section_room">
                    <select id="country" name="categoryId" class="frm-field required">
                        @foreach($publishedCategory as $category)
                        <option value="{{$category->id}}">{{$category->categoryName}}</option>
                            @endforeach
                    </select>
                </div>
                <div class="sear-sub">
                    <input type="submit" value=" ">
                </div>
                <div class="clearfix"></div>
            </form>
        </div>
        <div class="col-md-3 collapse navbar-collapse pull-right" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->firstname }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu menudropdownuser" role="menu">
                                <li><a href="{{url('/view/profile')}}">Profile</a></li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>

                            </ul>
                        </li>
                        @endguest
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<!-- //header-bot -->