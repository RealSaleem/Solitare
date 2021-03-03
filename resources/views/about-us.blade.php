@include('header')

<link rel="stylesheet" href="css/jquerysctipttop.css" />
<?php
$image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $banners->banner_image))));
?>
<section class="slider-area page-banner-area pos-rel mt_70" style="background-image: url({{$image}});">
    <div class="container">
        <div class="row">
            <div class="slider__cont page-banner__cont col-md-12">
                <h1>{{$banners->title}}</h1>
                <p>{{$banners->excerpt}}</p>
            </div>
        </div>
    </div>
</section>

<section class="about-us-area pos-rel pt75">
    <div class="bg-triangle bg-triangle--flip">
        <img src="img/triangle.png" alt="triangle" />
    </div>
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title section-title--para">{{$banners->inner_title}}</h2>
                <p>{{$aboutus->description}}</p>
            </div>
            @foreach($qualities as $key => $q)
            <div class="about-box text-center col-md-4">
                <?php
                $icon = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $q->icon))));
                ?>
                <div class="about__icon">
                    <img src={{$icon}} alt="about us" />
                </div>
                <div class="about__cont">
                    <h4>{{$q->title}}</h4>
                    <p>{{$q->description}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="about-img-area">
    <div class="container0">
        <?php
        $banner = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $aboutus->banner))));
        ?>
        <div class="about__img">
            <img src={{$banner}} alt="about us" />
        </div>
    </div>
</section>
<section class="services-area pos-rel light pt75 pb75">
    <div class="bg-triangle bg-triangle--flip">
        <img src="{{asset('img/triangle.png')}}" alt="triangle" />
    </div>
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title">{{trans('text.services')}}</h2>
            </div>
        </div>
        <div class="row">
            @foreach($services as $key => $s)
            <div class="services-box col-12 col-sm-6 col-md-4">
                <a href="{{url('/services-detail/' .$s->slug)}}">
                    <?php
                    $icon = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $s->icon))));
                    ?>
                    <div class="services__inr mt-5">
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

<section class="about-gallery-area">
    <div class="container">
        <div class="row">

            @foreach(json_decode($aboutus->images, true) as $image)
            <?php
            $images = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $image))));
            ?>

            <div class="gallery-box col-md-6">
                <img src={{$images}} alt=" " />
            </div>
            @endforeach
            <!-- <div class="gallery-box col-md-6">
                <img src="img/about_gallery2.jpg" alt=" " />
            </div>
            <div class="gallery-box col-md-6">
                <img src="img/about_gallery3.jpg" alt=" " />
            </div>
            <div class="gallery-box col-md-6">
                <img src="img/about_gallery4.jpg" alt=" " />
            </div> -->
        </div>
    </div>
</section>

<section class="team-area pt75">
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title section-title--para">{{trans('text.meet_our_team')}}</h2>
                <p>
                    {{trans('text.team_info')}}
                </p>
            </div>
        </div>
        <div class="team-wrapper">
            <div class="row">
                @foreach($team as $key => $t)
                <div class="team__box text-center col-12 col-sm-6 col-md-4">
                    <?php
                    $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $t->image))));
                    ?>
                    <div class="team__inr">
                        <div class="team__img">
                            <img src={{$image}} alt="team" />
                        </div>
                        <div class="team__cont">
                            <h4>{{$t->name}}</h4>
                            <h5>{{$t->designation}}</h5>
                            <ul>
                                <li>
                                    <a href="{{$t->facebook_link}}" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$t->linkedin_link}}" target="_blank">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{$t->dribble_link}}" target="_blank">
                                        <i class="fab fa-dribbble"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="testi-area pos-rel">
    <div class="bg-triangle">
        <img src="img/triangle.png" alt="triangle" />
    </div>
    <div class="container">
        <div class="row">
            <div class="section-hed col-md-12 text-center">
                <h2 class="section-title section-title--para">{{trans('text.testimonials')}}</h2>
                <p>{{trans('text.client_says')}}
                </p>
            </div>
            @foreach($testimonials as $key => $tst)
            <div class="testi-box col-12 col-sm-6 col-md-4">
                <div class="testi__inr">
                    <div class="testi__cont">
                        <p>
                            {{$tst->description}}
                        </p>
                        <div class="row">
                            <div class="testi__lft col-12 col-sm-6 col-md-8">
                                <?php
                                $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $tst->image))));
                                ?>
                                <div class="testi__img">
                                    <img src={{$image}} alt=" " />
                                </div>
                                <div class="testi__name">
                                    <h5>{{$tst->name}}</h5>
                                    <h6>{{$tst->designation}}</h6>
                                </div>
                            </div>
                            <div class="testi__rgt col-12 col-sm-6 col-md-4">
                                <ul>
                                    <?php
                                    for ($i = 1; $i <= 5; $i++) {
                                        $selected = "far fa-star";

                                        if (!empty((int)$tst->rating) && $i <= (int)$tst->rating) {
                                            $selected = "fas fa-star";
                                        }
                                    ?>
                                        <li><a><i class="{{$selected}}"></i></a></li>

                                    <?php }  ?>
                                </ul>
                                <div class="testi__rating"><span>{{$tst->rating}}</span>&nbsp;{{trans('text.out_of')}} 5</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


@include('footer')