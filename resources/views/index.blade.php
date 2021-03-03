@include('header')

<link rel="stylesheet" href="css/jquerysctipttop.css" />

<section class="slider-area mt_70">
    <div class="container0">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
            @foreach($slider as $key => $s)
                <li data-target="#demo" data-slide-to="{{ $key++ }}" class="{{$key == 1 ? 'active' : '' }}"></li>
                @endforeach
                
            </ul>
            <div class="carousel-inner">
                @foreach($slider as $key => $s)
                <?php
                $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $s->image))));
                ?>
                <div class="carousel-item {{$key == 0 ? 'active' : '' }}" style="background-image: url({{$image}});">
                    <div class="container">
                        <div class="row">
                            <div class="slider__lft col-md-6">
                                <div class="slider__cont">
                                    <h1>{{$s->title}}</h1>
                                    <p>{{$s->description}}</p>
                                    <a href="{{$s->button_url}}" target="_blank" class="btn-read btn-white">{{$s->button_text}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
        <!-- <div class="slider__contact">
            <a href="#">Contact us</a>
        </div> -->
    </div>
</section>

<section class="services-area pos-rel light pt75 pb75">
    <div class="bg-triangle bg-triangle--flip">
        <img src="img/triangle.png" alt="triangle" />
    </div>
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title--home">{{trans('text.services')}}</h2>
            </div>
        </div>
        <div class="row">
            @foreach($services as $key => $s)
            <div class="services-box col-12 col-sm-6 col-md-4">
                <a href="{{url('/services-detail/' .$s->slug)}}">
                    <div class="services__inr mt-5">
                        <?php
                        $icon = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $s->icon))));
                        ?>
                        <div class="services__img pos-rel">
                            <img src={{$icon}} alt="pen icon" />
                        </div>
                        <div class="services__cont mt-4">
                            <h4>{{$s->title}}</h4>
                            <p>{{$s->excerpt}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<?php
$image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $aboutus->background_image))));
?>
<section class="about-area pos-rel dark pt75 pb-100" style="background-image: url({{$image}});">
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12">
                <h2 class="section-title--home">{{$aboutus->title}}</h2>
            </div>
        </div>
        <div class="row">
            <div class="about-cont col-12 col-sm-12 col-md-6">
                <p>
                    {{$aboutus->excerpt}}
                </p>
            </div>
        </div>
        <div class="row">
            <div class="count-box text-center col-6 col-sm-6 col-md-3">
                <h4>{{$aboutus->no_of_new_projects}}+</h4>
                <span>{{trans('text.monthly_projects')}}</span>
            </div>
            <div class="count-box text-center col-6 col-sm-6 col-md-3">
                <h4>{{$aboutus->no_of_developers}}+</h4>
                <span>{{trans('text.developers')}}</span>
            </div>
            <div class="count-box text-center col-6 col-sm-6 col-md-3">
                <h4>{{$aboutus->no_of_industries}}+</h4>
                <span>{{trans('text.industry')}}</span>
            </div>
            <div class="count-box text-center col-6 col-sm-6 col-md-3">
                <h4>{{$aboutus->no_of_happy_clients}}+</h4>
                <span>{{trans('text.happy_clients')}}</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="link-more col-md-12">
                <a href="{{url('/about-us')}}"><span>{{trans('text.know_more')}}</span><img src="img/icon-right-arrow.png" alt=" " /></a>
            </div>
        </div>
    </div>
</section>


<section class="partner-area partner-area--shadow light pt-100">
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title--home">{{trans('text.our_partners')}}</h2>
            </div>
        </div>
    </div>
</section>
<section class="partner-area">
    <div class="container">
        <div class="row row-cols-5">
            @foreach($partners as $key => $p)
            <div class="partner-box col">
                <?php
                $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $p->image))));
                ?>
                <div class="partner__img">
                    <img src={{$image}} alt=" " />
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Link Swiper's CSS -->

<style>
    .center.slick-slide {
        text-align: center;
        border: 1px solid #eee;
    }

    .center img {
        text-align: center;
        margin: 0 auto;
    }

    .center .slick-list,
    .center .slick-track {
        overflow: visible;
    }

    .center .slick-current {
        width: 0 30px;
        top: 50%;
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        -o-transform: scale(1.2);
        transform: scale(1.2);
        -webkit-transform-origin: center center;
        -moz-transform-origin: center center;
        -ms-transform-origin: center center;
        -o-transform-origin: center center;
        transform-origin: center center;
        -webkit-transition: transform .3s ease;
        -o-transition: transform .3s ease;
        transition: transform .3s ease;
    }
</style>
<section class="news-area light pt-100 pb-100 pos-rel">
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title--home">{{trans('text.news_events')}}</h2>
            </div>
        </div>

        <!-- Swiper -->
        <div class="center" style="overflow: hidden;">
            @foreach($newsevents as $key => $ne)
            <div class="news-box">
                <a href="{{url('/news-detail/'. $ne->slug)}}">
                    <div class="news__inr">
                        <?php
                        $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $ne->image))));
                        ?>
                        <div class="news__img">
                            <img src={{$image}} alt="news and events" />
                        </div>
                        <div class="news__cont">
                            <p>{{$ne->excerpt}}</p>
                            <h6>{{ date('M d Y',strtotime($ne->date)) }}</h6>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <!-- Add Pagination -->
    </div>
    <div class="bg-triangle bottom">
        <img src="img/triangle.png" alt="triangle" />
    </div>
</section>

<script type="text/javascript">
    jQuery(document).on('ready', function() {
        jQuery(".center").slick({
            centerPadding: 'auto',
            centerMode: true,
            slidesToShow: 3,
            dots: true,
            arrows: false,
            swipe: true,
            //rtl: true
            //infinite: false,
            //swipeToSlide: true,
            //adaptiveHeight: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true,
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        dots: true,
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
<script>
    jQuery(document).ready(function() {
        jQuery('body').addClass('home')
    });
</script>

@include('footer')