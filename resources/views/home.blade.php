@extends('master.site')

@section('title','Home page title')

@section('main')
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
</div>
<!----start-cursual---->
<div class="wrap">
    <!----start-img-cursual---->
    <div id="owl-demo" class="owl-carousel">
        @foreach($productCarousel as $pc)
        <div class="item" onclick="location.href='';">
            <div class="cau_left">
                <img class="lazyOwl" data-src="{{url('public/uploads')}}/{{$pc->image}}" alt="{{$pc->name}}">
            </div>
            <div class="cau_left">
                <h4><a href="">{{$pc->name}}</a></h4>
                <a href="" class="btn">shop</a>
            </div>
        </div>
        @endforeach
    </div>
    <!----//End-img-cursual---->
</div>
<!-- start main1 -->
<div class="main_bg1">
    <div class="wrap">
        <div class="main1">
            <h2>featured products</h2>
        </div>
    </div>
</div>
<!-- start main -->
<div class="main_bg">
    <div class="wrap">
        <div class="main">
            <!-- start grids_of_3 -->
            <div class="grids_of_3">
                @foreach($productSale as $ps)
                <div class="grid1_of_3">
                    <a href="">
                        <img src="{{url('public/uploads')}}/{{$ps->image}}" alt="{{$ps->name}}" />
                        <h3>{{$ps->name}}</h3>
                        <div class="price">
                            <h4>{{$ps->price}}<span>đ</span></h4>
                        </div>
                        <span class="b_btm"></span>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>

@stop()