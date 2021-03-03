<!-- Link Swiper's CSS -->

<style>
.center.slick-slide{ text-align: center; border:1px solid #eee; }
.center img{ text-align: center; margin:0 auto; }
.center .slick-list, .center .slick-track{ overflow: visible; }
.center .slick-current { width: 0 30px; top: 50%; -webkit-transform: scale(1.2);
-ms-transform: scale(1.2);
-o-transform: scale(1.2);
transform: scale(1.2); -webkit-transform-origin: center center;
-moz-transform-origin: center center;
-ms-transform-origin: center center;
-o-transform-origin: center center;
transform-origin: center center;  -webkit-transition: transform .3s ease;
-o-transition: transform .3s ease;
transition: transform .3s ease;}

</style>
<section class="news-area light pt-100 pb-100 pos-rel">
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title--home">News & Events</h2>
            </div>
        </div>

        <!-- Swiper -->
        <div class="center" style="overflow: hidden;">
            <div class="news-box">
                <a href="news-detail.php">
                    <div class="news__inr">
                        <div class="news__img">
                            <img src="img/news1.jpg" alt="news and events" />
                        </div>
                        <div class="news__cont">
                            <p>We are motivated by the satisfaction of our clients. Put your trust in us and share in our growth Asset Management.</p>
                            <h6>19th August 2020</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="news-box">
                <a href="news-detail.php">
                    <div class="news__inr">
                        <div class="news__img">
                            <img src="img/news1.jpg" alt="news and events" />
                        </div>
                        <div class="news__cont">
                            <p>We are motivated by the satisfaction of our clients. Put your trust in us and share in our growth Asset Management.</p>
                            <h6>19th August 2020</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="news-box">
                <a href="news-detail.php">
                    <div class="news__inr">
                        <div class="news__img">
                            <img src="img/news1.jpg" alt="news and events" />
                        </div>
                        <div class="news__cont">
                            <p>We are motivated by the satisfaction of our clients. Put your trust in us and share in our growth Asset Management.</p>
                            <h6>19th August 2020</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="news-box">
                <a href="news-detail.php">
                    <div class="news__inr">
                        <div class="news__img">
                            <img src="img/news1.jpg" alt="news and events" />
                        </div>
                        <div class="news__cont">
                            <p>We are motivated by the satisfaction of our clients. Put your trust in us and share in our growth Asset Management.</p>
                            <h6>19th August 2020</h6>
                        </div>
                    </div>
                </a>
            </div>
            <div class="news-box">
                <a href="news-detail.php">
                    <div class="news__inr">
                        <div class="news__img">
                            <img src="img/news1.jpg" alt="news and events" />
                        </div>
                        <div class="news__cont">
                            <p>We are motivated by the satisfaction of our clients. Put your trust in us and share in our growth Asset Management.</p>
                            <h6>19th August 2020</h6>
                        </div>
                    </div>
                </a>
            </div>
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
            responsive: [
                {
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


  
  

