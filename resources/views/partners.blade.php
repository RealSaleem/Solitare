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
                <p>
                    {{$banners->excerpt}}
                </p>
            </div>
        </div>
    </div>
</section>

<section class="partners-page-area pos-rel">
    <div class="bg-triangle bg-triangle--flip">
        <img src="img/triangle.png" alt="triangle" />
    </div>
    <div class="container">
        <div class="row">
            @php
            $iteration = 1;
            @endphp
            @foreach($partners as $key => $p)
            <div class="partners-box text-center col-12 col-sm-12 col-md-12">
                <div class="row">
                    <div class="partners__lft col-12 col-sm-9 col-md-9">
                        <div class="partners__cont">
                            <div class="partners__hed">
                                <span>{{$loop->iteration <= 9 ? '0'.$loop->iteration : $loop->iteration}}</span>
                                <h3><a href="{{url('/partner-detail/'. $p->slug)}}">{{$p->title}}</a></h3>
                            </div>
                            <p>{{$p->excerpt}}</p>
                        </div>
                    </div>
                    <div class="partners__lft partners__rgt col-12 col-sm-3 col-md-3">
                        <?php
                        $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $p->image))));
                        ?>
                        <div class="partners__img--wrapper">
                            <div class="partners__img">
                                <a href="{{url('/partner-detail/'. $p->slug)}}"><img src={{$image}} alt="about us" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @php
            $iteration ++;
            @endphp
        </div>
    </div>
    <div class="bg-triangle bottom">
        <img src="img/triangle.png" alt="triangle" />
    </div>
</section>

@include('footer')