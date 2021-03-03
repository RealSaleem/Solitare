@include('header')

<link rel="stylesheet" href="css/jquerysctipttop.css" />

<section class="slider-area page-banner-area pos-rel mt_70" style="background-image: url('img/career_banner.jpg');">
    <div class="container">
        <div class="row">
            <div class="slider__cont page-banner__cont col-md-12">
                <h1>{{$banners->title}}</h1>
                <p>{{$banners->excerpt}}</p>
            </div>
        </div>
    </div>
</section>

<section class="news-events-area pos-rel">
    <div class="bg-triangle bg-triangle--flip">
        <img src="img/triangle.png" alt="triangle" />
    </div>
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title--home section-title--para">{{$banners->inner_title}}</h2>
                <p>
                    {{$banners->description}}
                </p>
            </div>
        </div>
        <div class="news-events-tab pos-rel">
            <div class="row0">
                <div class="tabs__wrapper">
                    <div class="tabs__list">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#news">{{trans('text.news')}}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#events">{{trans('text.events')}}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tabs__content">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane container active" id="news">
                                <div class="row">

                                    @foreach($newsevents as $key => $ne)
                                    <div class="news__box col-12 col-sm-6 col-md-4">
                                        <a href="{{url('/news-detail/'. $ne->id)}}">
                                            <div class="news__wrapper">
                                                <div class="news__inr">
                                                    <?php
                                                    $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $ne->image))));
                                                    ?>
                                                    <div class="news__img">
                                                        <img src={{$image}} alt="events" />
                                                    </div>
                                                    <div class="news__cont">
                                                        <h4>{{$ne->name}}</h4>
                                                        <!-- <h6>{{$ne->categories}}</h6> -->
                                                        <p>{{$ne->excerpt}}</p>
                                                        <ul>
                                                            <li>
                                                                <span class="date">{{ date('m/d/Y',strtotime($ne->date)) }}</span>
                                                            </li>
                                                            <li>
                                                                <span class="view"><i class="far fa-eye"></i>{{$ne->views}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="news__inr--hover">
                                                    <h4>{{$ne->name}}</h4>
                                                    <p>
                                                        {{$ne->short_description}}
                                                    </p>
                                                    <h5>{{$ne->author_name}}</h5>
                                                    <h6>{{$ne->designation}}</h6>
                                                    <ul>
                                                        <li>
                                                            <span class="date">{{ date('m/d/Y',strtotime($ne->date)) }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="view"><i class="far fa-eye"></i>{{$ne->views}}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div class="tab-pane container fade" id="events">
                                <div class="row">

                                    @foreach($events as $key => $e)
                                    <div class="news__box col-12 col-sm-6 col-md-4">
                                        <a href="{{url('/events-detail/'. $e->id)}}">
                                            <div class="news__wrapper">
                                                <div class="news__inr">
                                                    <?php
                                                    $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $e->image))));
                                                    ?>
                                                    <div class="news__img">
                                                        <img src={{$image}} alt="events" />
                                                    </div>
                                                    <div class="news__cont">
                                                        <h4>{{$e->name}}</h4>
                                                        <!-- <h6>{{$e->categories}}</h6> -->
                                                        <p>{{$e->excerpt}}</p>
                                                        <ul>
                                                            <li>
                                                                <span class="date">{{ date('m/d/Y',strtotime($e->date)) }}</span>
                                                            </li>
                                                            <li>
                                                                <span class="view"><i class="far fa-eye"></i>{{$e->views}}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="news__inr--hover">
                                                    <h4>{{$e->name}}</h4>
                                                    <p>
                                                        {{$e->short_description}}
                                                    </p>
                                                    <h5>{{$e->author_name}}</h5>
                                                    <h6>{{$e->designation}}</h6>
                                                    <ul>
                                                        <li>
                                                            <span class="date">{{ date('m/d/Y',strtotime($e->date)) }}</span>
                                                        </li>
                                                        <li>
                                                            <span class="view"><i class="far fa-eye"></i>{{$e->views}}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <div class="bg-triangle bottom">
        <img src="img/triangle.png" alt="triangle" />
    </div>
</section>


<script src="js/tether.min.js"></script>
<script src="js/masonry.pkgd.js"></script>
<script src="js/imagesloaded.pkgd.min.js"></script>
<script>
    // masonry 
    var $grid = $('.gallery-wrapper').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-sizer',
        percentPosition: true,
        transitionDuration: 0,
    });
    $grid.imagesLoaded().progress(function() {
        $grid.masonry();
    });
</script>

@include('footer')