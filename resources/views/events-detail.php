<?php include('header.php'); ?>

<style type="text/css">
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

</style>

<!-- Modal -->
<div id="videoModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
       <button type="button" class="close" data-dismiss="modal">&times;</button>
      <div class="modal-body p-0">
        <iframe width="100%" height="315" src="https://www.youtube.com/embed/L5oNESifgpk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

                        <li data-target="#demo" data-slide-to="0" class="active"></li>

                        <li data-target="#demo" data-slide-to="1"></li>

                        <li data-target="#demo" data-slide-to="2"></li>

                        <li data-target="#demo" data-slide-to="3"></li>

                        <li data-target="#demo" data-slide-to="4"></li>

                    </ul>



                    <!-- The slideshow -->

                    <div class="carousel-inner">

                        <div class="carousel-item active">

                            <img src="img/news_detail_slider1.jpg" alt="News Detail">

                        </div>

                        <div class="carousel-item">

                            <img src="img/news_detail_slider1.jpg" alt="News Detail">

                        </div>

                        <div class="carousel-item">

                            <img src="img/news_detail_slider1.jpg" alt="News Detail">

                        </div>

                        <div class="carousel-item">

                            <img src="img/news_detail_slider1.jpg" alt="News Detail">

                        </div>

                        <div class="carousel-item">

                            <img src="img/news_detail_slider1.jpg" alt="News Detail">

                        </div>

                    </div>

                </div>

            </div>

            <div class="news__detail--sidebar col-12 col-sm-4 col-md-4">

                <div class="sidebar-area">

                    <h3>Related News</h3>

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

                <h2>News Title</h2>

                <span class="date">12/03/2020</span>

            </div>
            <div class="col-md-6 col-sm-12">
                <div class="detail_share">

                    <ul>

                        <li>

                            <a href="#">

                                <i class="fab fa-linkedin-in"></i>

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <i class="fas fa-share-alt"></i>

                            </a>

                        </li>

                        <li>

                            <a href="#">

                                <span class="view"><i class="far fa-eye"></i>3456</span>

                            </a>

                        </li>

                    </ul>

                </div>

            </div>


            <div class="news__desc col-12 col-sm-12 col-md-12">

                <p>With the release of Letraset sheets containing Lorem Ipsum passages, and 

                    more recently with desktop publishing software like Aldus PageMaker 

                    including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of 

                    the printing and typesetting industry. Lorem Ipsum has been the industry's 

                    standard dummy text ever since the 1500s, when an unknown printer took a 

                    galley of type and scrambled it to make a type specimen book. It has survived 

                    not only five centuries, but also the leap into electronic typesetting, 

                    remaining essentially unchanged. It was popularised in the 1960s

                </p>

                <p>With the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.

                </p>

            </div>

            <div class="news__slider--bg col-12 col-sm-12 col-md-12 mt-lg-5">

                <div id="newsSliderBg" class="news__carousel carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active" style="background-image: url(img/home_banner.png);">

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

                        </div><!---carosul item--->

                        <div class="carousel-item" style="background-image: url(img/home_banner.png);">

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

                        </div><!---carosul item--->


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
                <div class="video-container" style="background: url('img/video-bglinked.jpg');">
                    <a href="#" data-toggle="modal" data-target="#videoModal">
                        <svg width="134" height="134" viewBox="0 0 134 134" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="67.0209" cy="66.8776" r="64.3036" stroke="white" stroke-width="4"/>
                        <path d="M58.1035 88.4192L58.1035 44.9052C58.1035 42.2325 61.3349 40.894 63.2248 42.7839L83.2521 62.8112C84.6226 64.1816 84.3534 66.4724 82.7026 67.4878L62.7083 79.7865" stroke="white" stroke-width="3" stroke-linecap="square"/>
                        </svg>
                    </a>
                </div>

            </div>
            <div class="col-md-5">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s </p>

            </div>
        </div>

    </div>

    <div class="bg-triangle">

        <img src="img/triangle.png" alt="triangle" />

    </div>

</section>

<script>
    jQuery(document).ready(function(){
        jQuery('.top-area').addClass('bg-blue');
        jQuery('body').addClass('news-detail-page');
    });
</script>

<?php include('footer.php'); ?>