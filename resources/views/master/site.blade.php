<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title') | My Shopping</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    <link href="{{url('public/assets')}}/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{url('public/assets')}}/css/slider.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{url('public/assets')}}/css/owl.carousel.css" rel="stylesheet">
</head>

<body>
    <!-- start header -->
    <div class="header_bg">
        <div class="wrap">
            <div class="header">
                <div class="logo">
                    <a href="index.html"><img src="{{url('public/assets')}}/images/logo.png" alt="" /> </a>
                </div>
                <div class="h_icon">
                    <ul class="icon1 sub-icon1">
                        <li><a class="active-icon c1" href="#"><i>$300</i></a>
                            <ul class="sub-icon1 list">
                                <li>
                                    <h3>shopping cart empty</h3><a href=""></a>
                                </li>
                                <li>
                                    <p>if items in your wishlit are missing, <a href="contact.html">contact us</a> to
                                        view them</p>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="h_search">
                    <form>
                        <input type="text" value="">
                        <input type="submit" value="">
                    </form>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="header_btm">
        <div class="wrap">
            <div class="header_sub">
                <div class="h_menu">
                    <ul>
                        <li class="active"><a href="{{route('home')}}">Home</a></li> |
                        @foreach($categories as $cat)
                        <li><a href="{{route('home.category',['category'=>$cat->id, 'slug'=> Str::slug($cat->name)])}}">{{$cat->name}}</a></li>
                        @endforeach
                        <li><a href="#">services</a></li>
                        <li><a href="#">Contact us</a></li>
                        @if (auth()->guard('customer')->check())
                            <li><a href="">{{auth()->guard('customer')->user()->name}}</a></li>
                            <li><a href="{{ route('home.logout') }}">Thoát</a></li>
                        @else 
                            <li><a href="{{ route('home.register') }}">Đăng ký</a></li>
                            <li><a href="{{ route('home.login') }}">Đăng nhập</a></li>
                        @endif
                    </ul>
                </div>
                <div class="top-nav">
                    <nav class="nav">
                        <a href="#" id="w3-menu-trigger"> </a>
                        <ul class="nav-list" style="">
                            <li class="nav-item"><a class="active" href="index.html">Home</a></li>
                            <li class="nav-item"><a href="sale.html">Sale</a></li>
                            <li class="nav-item"><a href="handbags.html">Handbags</a></li>
                            <li class="nav-item"><a href="accessories.html">Accessories</a></li>
                            <li class="nav-item"><a href="shoes.html">Shoes</a></li>
                            <li class="nav-item"><a href="service.html">Services</a></li>
                            <li class="nav-item"><a href="contact.html">Contact</a></li>
                        </ul>
                    </nav>
                    <div class="search_box">
                        <form>
                            <input type="text" value="Search" onfocus="this.value = '';"
                                onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                        </form>
                    </div>
                    <div class="clear"> </div>

                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- start slider -->
<div id="da-slider" class="da-slider">
    <div class="da-slide">
        <h2>welcome to aditii</h2>
        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her
            hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line
            Lane.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="{{url('public/assets')}}/images/slider1.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Easy management</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
            ocean.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="{{url('public/assets')}}/images/slider2.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Revolution</h2>
        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
            paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="{{url('public/assets')}}/images/slider3.png" alt="image01" /></div>
    </div>
    <div class="da-slide">
        <h2>Quality Control</h2>
        <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life
            One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World
            of Grammar.</p>
        <a href="details.html" class="da-link">shop now</a>
        <div class="da-img"><img src="{{url('public/assets')}}/images/slider4.png" alt="image01" /></div>
    </div>
    <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
    </nav>
</div>
    @yield('main')
    <!-- start footer -->
    <div class="footer_bg">
        <div class="wrap">
            <div class="footer">
                <!-- start grids_of_4 -->
                <div class="grids_of_4">
                    <div class="grid1_of_4">
                        <h4>featured sale</h4>
                        <ul class="f_nav">
                            <li><a href="">alexis Hudson</a></li>
                            <li><a href="">american apparel</a></li>
                            <li><a href="">ben sherman</a></li>
                            <li><a href="">big buddha</a></li>
                            <li><a href="">channel</a></li>
                            <li><a href="">christian audigier</a></li>
                            <li><a href="">coach</a></li>
                            <li><a href="">cole haan</a></li>
                        </ul>
                    </div>
                    <div class="grid1_of_4">
                        <h4>mens store</h4>
                        <ul class="f_nav">
                            <li><a href="">alexis Hudson</a></li>
                            <li><a href="">american apparel</a></li>
                            <li><a href="">ben sherman</a></li>
                            <li><a href="">big buddha</a></li>
                            <li><a href="">channel</a></li>
                            <li><a href="">christian audigier</a></li>
                            <li><a href="">coach</a></li>
                            <li><a href="">cole haan</a></li>
                        </ul>
                    </div>
                    <div class="grid1_of_4">
                        <h4>women store</h4>
                        <ul class="f_nav">
                            <li><a href="">alexis Hudson</a></li>
                            <li><a href="">american apparel</a></li>
                            <li><a href="">ben sherman</a></li>
                            <li><a href="">big buddha</a></li>
                            <li><a href="">channel</a></li>
                            <li><a href="">christian audigier</a></li>
                            <li><a href="">coach</a></li>
                            <li><a href="">cole haan</a></li>
                        </ul>
                    </div>
                    <div class="grid1_of_4">
                        <h4>quick links</h4>
                        <ul class="f_nav">
                            <li><a href="">alexis Hudson</a></li>
                            <li><a href="">american apparel</a></li>
                            <li><a href="">ben sherman</a></li>
                            <li><a href="">big buddha</a></li>
                            <li><a href="">channel</a></li>
                            <li><a href="">christian audigier</a></li>
                            <li><a href="">coach</a></li>
                            <li><a href="">cole haan</a></li>
                        </ul>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- start footer -->
    <div class="footer_bg1">
        <div class="wrap">
            <div class="footer">
                <!-- scroll_top_btn -->
                <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
                <!--end scroll_top_btn -->
                <div class="copy">
                    <p class="link">&copy; All rights reserved | Template by&nbsp;&nbsp;<a href="http://w3layouts.com/">
                            W3Layouts</a></p>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{url('public/assets')}}/js/jquery.min.js"></script>
    <!-- start slider -->

    <script type="text/javascript" src="{{url('public/assets')}}/js/modernizr.custom.28468.js"></script>
    <script type="text/javascript" src="{{url('public/assets')}}/js/jquery.cslider.js"></script>
    <script src="{{url('public/assets')}}/js/responsive.menu.js"></script>
    <script type="text/javascript">
    $(function() {
        $('#da-slider').cslider();
    });
    </script>
    <!-- Owl Carousel Assets -->

    <!-- Owl Carousel Assets -->
    <!-- Prettify -->
    <script src="{{url('public/assets')}}/js/owl.carousel.js"></script>
    <script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({
            items: 4,
            lazyLoad: true,
            autoPlay: true,
            navigation: true,
            navigationText: ["", ""],
            rewindNav: false,
            scrollPerPage: false,
            pagination: false,
            paginationNumbers: false,
        });

    });
    </script>
    <!-- //Owl Carousel Assets -->
    <!-- start top_js_button -->
    <script type="text/javascript" src="{{url('public/assets')}}/js/move-top.js"></script>
    <script type="text/javascript" src="{{url('public/assets')}}/js/easing.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1200);
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function() {

        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };


        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
    </script>
</body>

</html>