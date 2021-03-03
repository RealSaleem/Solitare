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




<section class="services-area pos-rel light pt75 pb75">

    <div class="bg-triangle bg-triangle--flip">

        <img src="img/triangle.png" alt="triangle" />

    </div>

    <div class="container">

        <div class="row">

            <div class="section-hed col-md-12 text-center">

                <h2 class="section-title section-title--para">{{$banners->inner_title}}</h2>

                <p>
                    {{$banners->description}}
                </p>

            </div>

        </div>

        <div class="row">
            @foreach($solutions as $key => $sol)
            <div class="services-box col-12 col-sm-6 col-md-4">

                <a href="{{url('/solution/'. $sol->slug)}}">
                    <?php
                    $image = str_replace('\\', '/', asset('storage/' . str_replace('.png', '-cropped.png', str_replace('.jpg', '-cropped.jpg', $sol->image))));
                    ?>
                    <div class="services__inr mt-5">

                        <img src={{$image}}>

                        <div class="services__cont mt-4">

                            <h4>{{$sol->name}}</h4>

                            <p>{{$sol->excerpt}}</p>

                        </div>

                    </div>

                </a>

            </div>
            @endforeach


        </div>

    </div>

    <div class="bg-triangle bottom">

        <img src="img/triangle.png" alt="triangle" />

    </div>

</section>



@include('footer')