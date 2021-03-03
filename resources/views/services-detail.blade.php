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
                        <a class="nav-link" href="{{url('/solution')}}">{{trans('text.solution')}}</a>
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
        <?php
        $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $banners->banner_image))));
        ?>
        <link rel="stylesheet" href="{{asset('css/jquerysctipttop.css')}}" />
        <section class="slider-area page-banner-area pos-rel mt_70" style="background-image: url({{$image}});">
            <div class="container">
                <div class="row">
                    <div class="slider__cont page-banner__cont col-md-12">
                        <h1>{{$services->title}}</h1>
                        <p>{{$services->excerpt}}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="slider-area page-banner-area pos-rel mt_70" style="background-image: url(<?php echo asset('img/provide_banner.jpg') ?>);">
            <div class="container">
                <div class="row">
                    <div class="slider__cont page-banner__cont col-md-12">
                        <h1>{{$services->title}}</h1>
                        <p>{{$services->excerpt}}</p>
                    </div>
                </div>
            </div>
        </section> -->


        <section class="provide-area pos-rel light pt75 pb75">
            <div class="bg-triangle bg-triangle--flip">
                <img src="{{asset('img/triangle.png')}}" alt="triangle" />
            </div>
            <div class="container">
                <div class="row">
                    <div class="section-hed light col-md-12 text-center">
                        <h2 class="section-title section-title--para light">{{trans('text.services')}}</h2>
                        <div class="spantag">
                            {!!$services->description_1!!}
                            <span>S</span>
                        </div>
                    </div>
                </div>
                <div class="row provide__inr">
                    <div class="provide__lft col-12 col-sm-12 col-md-6">
                        <?php
                        $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $services->image))));
                        ?>
                        <div class="provide__img">
                            <img src={{$image}} alt="provide" />
                        </div>
                    </div>
                    <div class="provide__rgt col-12 col-sm-12 col-md-6">
                        {!!$services->description_2!!}
                    </div>
                </div>
            </div>
            <div class="bg-triangle bottom">
                <img src="{{asset('img/triangle.png')}}" alt="triangle" />
            </div>
        </section>


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




            <script src="js/bootstrap.min.js"></script>
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
                            <form action="/action_page.php">
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <input type="text" class="form-control" id="name" placeholder="{{trans('text.your_name')}}">
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <input type="email" class="form-control" id="email" placeholder="{{trans('text.email_address')}}">
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <textarea class="form-control" rows="5" id="message" placeholder="{{trans('text.message')}}"></textarea>
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