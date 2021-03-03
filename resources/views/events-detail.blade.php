<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Solitaire</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('img/favicon.png')}}" type="image/png">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}" />
    <!--<link rel="stylesheet" href="css/style-ar.css" />-->
    <script src="{{asset('js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>

</head>

<body id="top">
    <main>
        <!-- <div class="header">
  <a href="contact-us.php">Contact us</h2>
  <div class="progress-container">
    <div class="progress-bar" id="myBar"></div>
  </div>
</div> -->
        <div class="slider__contact">
            <div class="progressContainer">
                <div id="progress" class="progress">

                </div>
            </div>
            <a href="{{url('/contact-us')}}">{{trans('text.contact_us')}}</a>
        </div>
        <div class="hdr-navList is-closed">
            <div class="container">
                <div class="hdr__hover col-md-12">
                    <div class="row">
                        <div class="logo-box col-md-6">
                            <div class="logo__inr">
                                <img src="{{asset('img/logo.png')}}" alt="logo" />
                            </div>
                        </div>
                        <div class="cross-box col-md-6">
                            <div class="cross__inr">
                                <svg class="cross__icon--hover" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                    <g fill="none" fill-rule="evenodd" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                                        <path d="M1 1l18 18M19 1L1 19"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/about-us')}}">{{trans('text.about_us')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/solution-list')}}">{{trans('text.solution')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/services')}}">{{trans('text.services')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/partners')}}">{{trans('text.partners')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/success-stories')}}">{{trans('text.success_stories')}}</a>
                    </li>
                </ul>
                <div class="hdr__footer col-md-12">
                    <div class="row">
                        <div class="hdr__footer--lft col-md-8">
                            <ul>
                                <li>
                                    <a href="{{url('news-and-events')}}">{{trans('text.news_events')}}</a>
                                </li>
                                <li>
                                    <a href="{{url('career')}}">{{trans('text.career')}}</a>
                                </li>
                                <li>
                                    <a href="{{url('/contact-us')}}">{{trans('text.contact_us')}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hdr__footer--rgt col-md-4">
                            <ul>
                                <li>
                                    <a href="https://www.behance.net" target="_blank">
                                        <i class="fab fa-behance"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com" target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <header class="pos-rel">
            <section class="top-area">
                <div class="container">
                    <div class="row">
                        <div class="topbar__lft col-md-8">
                            <a class="navbar-brand" href="{{url('/')}}">
                                <img src="{{asset('img/logo.png')}}" alt="logo" />
                            </a>
                        </div>
                        <div class="topbar__box col-md-4">
                            <ul>
                                <li>
                                    <div class="topbar__lang form-group">
                                        <div class="dropdown">
                                            <button type="button" class="dropdown-toggle" data-toggle="dropdown">
                                                EN
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">EN</a>
                                                <a class="dropdown-item" href="#">AR</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="topbar__box__searchList">
                                    <button class="btn topbar__search__btn is-active" type="submit"><i class="fas fa-search"></i></button>
                                </li>
                                <li class="menu-area">
                                    <nav class="navbar navbar-expand-md navbar-dark hdr-navbar">
                                        <!-- Toggler/collapsibe Button -->
                                        <button class="navbar-toggler menu-button" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                            <span class="navbar-toggler-icon"></span>
                                        </button>

                                        <!-- Links -->
                                    </nav>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="search-area--top is-hidden">
                <div class="container">
                    <div class="top__search">
                        <form action="/action_page.php">
                            <input type="text" class="form-control" placeholder="Search">
                            <div class="input-group-append">
                                <i class="top__search__btn--bar fas fa-times"></i>
                            </div>
                        </form>
                        <span>{{trans('text.hit_enter_close')}}</span>
                    </div>
                </div>
            </section>
        </header>

        <!-- <style type="text/css">
    .slider__contact{
        display: none;
    }
    .detail_share ul{
        list-style-type: none;
        margin:0;
        display: inline-block;
    }
    .detail_share ul li{
        display: inline-block;
        padding-right: 18px;
        font-size: 22px;
    }
    .detail_share ul li a{
        color: #adadad;
    }
    .detail_share ul li:nth-child(1) a{
        background: #0e76a8;
        color: #fff;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: inline-block;
        text-align: center;
        line-height: 30px;
        font-size: 17px;
    }
    .detail_share ul li:nth-child(3) a i {
        margin-right: 7px;
        color: #1f419b;
    }
    #newsSliderBg .slider__cont{
        background: #1F419B;
        padding: 23px;
    }
    #newsSliderBg .slider__cont h1{
        color: #fff;
        font-size: 26px;
        font-weight: bold;
    }
    #newsSliderBg .slider__lft{
        position: absolute;
        padding: 39px 0px 46px 45px;
        bottom: 0;
        left: 0;
    }
    .slider__cont ul {
        list-style: none;
        padding-top: 21px;
    }
    .slider__cont ul li {
        display: inline-block;
        font-size: 18px;
        color: #fff;
        border-right: 1px solid #fff;
        padding-right: 17px;
        margin-right: 16px;
        font-weight: 400;
    }
    .slider__cont ul li:last-child{
        border:none;
        color: #74BF98;
    }
    #newsSliderBg .carousel-control-next, #newsSliderBg .carousel-control-prev{
        top: initial;
        bottom: 43px;
        width: 54px;
        color: #fff;
        background: #74BF98;
        opacity: 1 !important;
        height: 54px;
        border-radius: 50%;
    }
    .carousel-control-next{
        right: 81px;
    }
    .carousel-control-prev{
        left: initial;
        right: 156px;
    }
    .news-events-area .video-container{
        height: 400px;
        text-align: center;
        line-height: 400px;
    }
    #videoModal .close{
        position: absolute;
        right: -7px;
        font-size: 29px;
        z-index: 99999;
        background: #fff;
        opacity: 1;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        box-shadow: 0 0 10px #999;
        top: -8px;
    }
    .news-events-area .video-container a {
        height: 100%;
        width: 100%;
        display: inline-block;
        float: left;
        line-height: 400px;
        text-align: center;
    }
    .video-control .bg-triangle, .video-control .bg-triangle--flip{
        bottom: 0;
        top: initial;
    }
    section.news-events-area.video-control {
        padding: 70px 0 170px;
    }
    @media screen and (max-width: 600px) {
        #newsSliderBg .slider__lft{
            padding: 0 !important;
            bottom: 0;
        }
        #newsSliderBg .carousel-control-next, #newsSliderBg .carousel-control-prev{
            bottom: 203px;
        }
        .video-control .bg-triangle, .video-control .bg-triangle--flip{
            display: none;
        }
        section.news-events-area.video-control{
            padding: 70px 0 30px;
        }
        .news-top-area .news__detail--sidebar {
            padding-top: 34px;
        }
    }

</style> -->

        <!-- Modal -->
        <div id="videoModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-body p-0">
                        <iframe width="100%" height="315" src="{{$events->video_url}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>

                </div>

            </div>
        </div>

        <section class="news-top-area">
            <div class="container">
                <div class="row mb-5">
                    <div class="news-featured__lft col-12 col-sm-8 col-md-8">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                @foreach(json_decode($events->slider_images, true) as $key => $images)
                                <li data-target="#demo" data-slide-to="{{ $key++ }}" class="{{$key == 1 ? 'active' : '' }}"></li>
                                @endforeach
                            </ul>

                            <!-- The slideshow -->

                            <div class="carousel-inner">
                                @foreach(json_decode($events->slider_images, true) as $key => $images)
                            <?php
                            $images = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $images))));
                            ?>
                                <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                                    <img src={{$images}} alt="News Detail">
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="detail_share--box col-md-12 col-sm-12">
                            <div class="detail_share">
                                <ul>
                                    <li>
                                        <a href="{{$events->linkedin_link}}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$events->share_link}}" target="_blank">
                                            <i class="fas fa-share-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="view"><i class="far fa-eye"></i>{{$events->views}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="news__detail--sidebar col-12 col-sm-4 col-md-4">
                        <div class="sidebar-area">
                            <h3>{{trans('text.related_news')}}</h3>
                            <ul>
                                <li>
                                    <a href="#">Financial Services Consulting</a>
                                </li>
                                <li>
                                    <a href="#">Consumer Product Consulting</a>
                                </li>
                                <li>
                                    <a href="#">Global Consumer insights</a>
                                </li>
                                <li>
                                    <a href="#">Independent contractor</a>
                                </li>
                                <li>
                                    <a href="#">Creative Idea Development</a>
                                </li>
                                <li>
                                    <a href="#">Social Media Marketing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="news___title col-12 col-sm-12 col-md-6">
                        <h2>{{$events->name}}</h2>
                        <span class="date">{{ date('m/d/Y',strtotime($events->date)) }}</span>
                    </div>


                    <div class="news__desc col-12 col-sm-12 col-md-12">
                        <p>
                            {!! $events->description_1 !!}
                        </p>
                    </div>

                    <div class="news__slider--bg col-12 col-sm-12 col-md-12 mt-lg-5">
                        <div id="newsSliderBg" class="news__carousel carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" style="background-image: url(<?php echo asset('img/home_banner.png') ?>);">
                                    <div class="container">
                                        <div class="row">
                                            <div class="slider__lft col-md-6">
                                                <div class="slider__cont">
                                                    <h1>Financial Statments down</h1>
                                                    <ul>
                                                        <li>Michle Syns</li>
                                                        <li>December, 2020</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---carosul item--->

                                <div class="carousel-item" style="background-image: url(<?php echo asset('img/home_banner.png') ?>);">
                                    <div class="container">
                                        <div class="row">
                                            <div class="slider__lft col-md-6">
                                                <div class="slider__cont">
                                                    <h1>Financial Statments down</h1>
                                                    <ul>
                                                        <li>Michle Syns</li>
                                                        <li>December, 2020</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!---carosul item--->
                            </div>

                            <a class="carousel-control-prev" href="#newsSliderBg" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>

                            <a class="carousel-control-next" href="#newsSliderBg" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="news-events-area video-control pos-rel mb-lg-5">

            <div class="container">

                <div class="row align-items-center">
                    <div class="col-md-7">
                        <div class="video-container" style="background: url(<?php echo asset('img/video-bglinked.jpg') ?>);">
                            <a href="#" data-toggle="modal" data-target="#videoModal">
                                <svg width="134" height="134" viewBox="0 0 134 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="67.0209" cy="66.8776" r="64.3036" stroke="white" stroke-width="4" />
                                    <path d="M58.1035 88.4192L58.1035 44.9052C58.1035 42.2325 61.3349 40.894 63.2248 42.7839L83.2521 62.8112C84.6226 64.1816 84.3534 66.4724 82.7026 67.4878L62.7083 79.7865" stroke="white" stroke-width="3" stroke-linecap="square" />
                                </svg>
                            </a>
                        </div>

                    </div>
                    <div class="col-md-5">
                        <p>{{$events->description_2}}</p>

                    </div>
                </div>

            </div>

            <div class="bg-triangle">

                <img src="{{asset('img/triangle.png')}}" alt="triangle" />

            </div>

        </section>

        <script>
            jQuery(document).ready(function() {
                jQuery('.top-area').addClass('bg-blue');
                jQuery('body').addClass('news-detail-page');
            });
        </script>

        <footer>
            <section class="footer-area pos-rel pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="ftr__logo col-md-12">
                            <div class="ftr__img">
                                <img src="{{asset('img/logo.png')}}" alt="logo" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ftr__social ftr__list col-md-12">
                            <ul>
                                <li><a href="#"><img src="{{asset('img/icon-instagram.png')}}" alt="instagram icon" /></a></li>
                                <li><a href="#"><img src="{{asset('img/icon-facebook.png')}}" alt="facebook icon" /></a></li>
                                <li><a href="#"><img src="{{asset('img/icon-youtube.png')}}" alt="youtube icon" /></a></li>
                                <li><a href="#"><img src="{{asset('img/icon-tumblr.png')}}" alt="tumblr icon" /></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ftr__links ftr__list col-md-12">
                            <ul>
                                <li>
                                    <a href="{{url('/partners')}}">{{trans('text.partners')}}</a>
                                </li>
                                <li>
                                    <a href="{{url('/success-stories')}}">{{trans('text.success_stories')}}</a>
                                </li>
                                <li>
                                    <a href="{{url('/news-and-events')}}">{{trans('text.news_events')}}</a>
                                </li>
                                <li>
                                    <a href="{{url('/career')}}">{{trans('text.career')}}</a>
                                </li>
                                <li>
                                    <a href="{{url('/contact-us')}}">{{trans('text.contact_us')}}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row copyright-area">
                        <div class="copyright-lft col-sm-12">
                            <p>Solitaire Copyright © 2020. {{trans('text.powered_by')}} <a href="https://www.linekw.com" target="_blank">{{trans('text.line')}}</a></p>
                        </div>
                    </div>
                </div>
            </section>




            <script src="{{asset('js/bootstrap.min.js')}}"></script>
            <script>
                /*Scroll to top when arrow up clicked END*/

                jQuery("#langSwitch").change(function() {
                    var option = jQuery(this).find('option:selected');
                    window.location.href = option.data("url");
                });

                jQuery(".topbar__search__btn").on('click', function() {
                    jQuery('.search-area--top').removeClass('is-hidden');
                    jQuery('.search-area--top').addClass('is-active');
                });
                jQuery(".top__search__btn--bar").on('click', function() {
                    jQuery('.search-area--top').addClass('is-hidden').removeClass('is-active');
                });

                jQuery(".menu-button").on('click', function() {
                    jQuery('.hdr-navList').removeClass('is-closed').addClass('is-open');
                    jQuery('body').addClass('overflow-hide');
                });

                jQuery(".cross__icon--hover").on('click', function() {
                    jQuery('.hdr-navList').addClass('is-closed').removeClass('is-open');
                    jQuery('body').removeClass('overflow-hide');
                });
                // function updateProgress(num1, num2){
                //   var percent = Math.ceil( num1 / num2 * 100 ) + '%';
                //   document.getElementById('progress').style.width = percent;
                // }

                // window.addEventListener('scroll', function(){
                //   var top = window.scrollY;
                //   var height = document.body.getBoundingClientRect().height - window.innerHeight;
                //   updateProgress(top, height);
                // });
            </script>
        </footer>
        <div class="chat-wrapper container">
            <div class="ftr__chat">
                <div class="chat__box is-hidden">
                    <div class="chat__inr">
                        <div class="chat__hed">
                            <h4>
                                <i><img src="{{asset('img/icon_chat.png')}}" alt="" /></i>
                                {{trans('text.chat')}}
                            </h4>
                        </div>
                        <div class="chat__form">
                            @if (isset($errors) && count($errors) > 0)
                                <div >
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                </div>
                            @endif
                            <form action="{{url('send-msg')}}" method="POST">
                                @csrf
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="{{trans('text.your_name')}}">
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="{{trans('text.email_address')}}">
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" rows="5" id="message" name="message" placeholder="{{trans('text.message')}}"></textarea>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12">
                                    <button type="submit" class="chat__submit">{{trans('text.send')}} <span><i class="fas fa-paper-plane"></i></span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="chat__icon">
                    <div class="chat__open" id="openChat">
                        <i>
                            <img src="{{asset('img/icon_chat.png')}}" alt="" />
                        </i>
                    </div>
                    <div class="chat__open chat__cross is-hidden" id="closeChat">
                        <i>
                            <img src="{{asset('img/icon_cross.png')}}" alt="" />
                        </i>
                    </div>
                </div>
            </div>
        </div>
        <a class="ftr__topBtn" id="backTop" href="#top" return="" false="" style="display: inline;">
            <i class="fas fa-angle-up"></i>
        </a>
        <script>
            jQuery("#openChat").on('click', function() {
                jQuery('.chat__box').removeClass('is-hidden');
                jQuery(this).addClass('is-hidden');
                jQuery('#closeChat').removeClass('is-hidden');
            });

            jQuery("#closeChat").on('click', function() {
                jQuery('.chat__box').removeClass('is-hidden');
                jQuery(this).addClass('is-hidden');
                jQuery('.chat__box ').addClass('is-hidden');
                jQuery('#openChat').removeClass('is-hidden');
            });
            /*Scroll to top when arrow up clicked BEGIN*/
            jQuery(window).scroll(function() {
                var height = jQuery(window).scrollTop();
                if (height > 100) {
                    jQuery('#backTop').fadeIn();
                } else {
                    jQuery('#backTop').fadeOut();
                }
            });
            jQuery(document).ready(function() {
                jQuery("#backTop").click(function(event) {
                    event.preventDefault();
                    jQuery("html, body").animate({
                        scrollTop: 0
                    }, "slow");
                    return false;
                });
            });
        </script>
    </main>
</body>

</html>
