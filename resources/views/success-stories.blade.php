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

<section class="story-area pos-rel">
    <div class="container">
        <div class="row">
            @php
            $iteration = 1;
            @endphp
            @foreach($successstory as $key => $ss)
            <div class="story-box text-center col-12 col-sm-6 col-md-4">
                <a href="{{url('success-stories-detail/'. $ss->slug)}}">
                    <?php
                    $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $ss->story_image))));
                    ?>
                    <div class="story__img">
                        <img src={{$image}} alt="about us" />
                    </div>
                    <div class="story__cont">
                        <span>{{$loop->iteration <=9 ? '0'.$loop->iteration : $loop->iteration}}</span>
                        <h3>{{$ss->name}}</h3>
                    </div>
                </a>
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

<script>
    jQuery(document).ready(function() {
        jQuery("body").addClass('story-page');
    });
</script>

@include('footer')