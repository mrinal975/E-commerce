<!DOCTYPE html>
<html>
<head>
	<title> @yield('title') </title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- //for-mobile-apps -->
	<link    href="{{ asset('frontEnd/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="{{asset('frontEnd/css/jquery-ui.css')}}  ">
	<!-- pignose css -->
	<link href="{{asset('frontEnd/css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />


	<!-- //pignose css -->
	<link href="{{asset('frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
	<!-- js -->


	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
	<style>
		.stickyForNav{
			position: fixed;
			top: 0;
			margin: 0;
			padding: 0;
			width: 100%;
			z-index: 999999;
		}
		.fix-nav-menu-bar{
			margin: 0 0 0 0;
		}
		.menudropdownuser{
			min-width: 91px !important;
		}
	</style>
	@yield('css')


</head>
<body>

<!-- header -->
@include('frontEnd.includes.header')
<!-- //header -->

<!-- //header-bot -->
<!-- banner -->
@include('frontEnd.includes.menu')
<!-- //banner-top -->

@yield('mainContent')
<!-- banner -->

<!-- //product-nav -->

@include('frontEnd.includes.cupon')
<!-- footer -->
@include('frontEnd.includes.footer')
<!-- //footer -->

<!-- //login -->

<!-- cart -->
<!-- for bootstrap working -->

<script type="text/javascript" src="{{asset('frontEnd/js/jquery-2.1.4.min.js')}} "></script>
<script type="text/javascript" src="{{asset('frontEnd/js/bootstrap-3.1.1.min.js')}} "></script>
<script type="text/javascript" src="{{asset('frontEnd/js/easyResponsiveTabs.js')}} "></script>
<script type="text/javascript" src="{{asset('frontEnd/js/imagezoom.js')}} "></script>
<script type="text/javascript" src="{{asset('frontEnd/js/jquery.easing.min.js')}} "></script>
<script type="text/javascript" src="{{asset('frontEnd/js/jquery.flexslider.js')}} "></script>
<script type="text/javascript" src="{{asset('frontEnd/js/pignose.layerslider.js')}} "></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for bootstrap working -->

<script src="{{asset('frontEnd/js/jquery.easing.min.js')}} "></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //js -->
<!-- cart -->

<script type="text/javascript" src="{{asset('frontEnd/js/pignose.layerslider.js')}} "></script>
<script type="text/javascript">
    //<![CDATA[
    $(window).load(function() {
        $('#visual').pignoseLayerSlider({
            play    : '.btn-play',
            pause   : '.btn-pause',
            next    : '.btn-next',
            prev    : '.btn-prev'
        });
    });
    //]]>
</script>
<script src="{{asset('frontEnd/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
    });

</script>

<!-- jquery for fix slide-->
@yield('js');
<script>
	$(document).ready(function () {
	    var navOffset=jQuery('#stickerForNav').offset().top;
        jQuery('#stickerForNav').wrap('<div class="fix-nav-menu-bar"></div>');
        jQuery('.fix-nav-menu-bar').height(jQuery('#stickerForNav').outerHeight());

	    jQuery(window).scroll(function () {
			var scrollPos=jQuery(window).scrollTop();

			if(scrollPos>=navOffset){
			    jQuery('#stickerForNav').addClass('stickyForNav');
			}else{
                jQuery('#stickerForNav').removeClass('stickyForNav');
			}
	    })
    })
</script>

</body>
</html>