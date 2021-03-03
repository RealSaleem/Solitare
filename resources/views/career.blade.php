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

<section class="career-area pos-rel">
    <div class="bg-triangle bg-triangle--flip">
        <img src="{{asset('img/triangle.png')}}" alt="triangle" />
    </div>
    <div class="container">
        <div class="row">
            <div class="career__box">
                <div class="career__inr">
                    <div class="career__form">
                        @if(session('success'))
                        <h1>{{session('success')}}</h1>
                        @endif
                        <form action="{{route('career')}}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="email">{{trans('text.email_address')}} <span>*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="phNumber">{{trans('text.phone_number')}} <span>*</span></label>
                                    <input type="text" class="form-control" id="phone" name="phone" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="fName">{{trans('text.first_name')}} <span>*</span></label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="lName">{{trans('text.last_name')}} <span>*</span></label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="role">{{trans('text.role')}} <span>*</span></label>
                                    <select class="form-control" id="role" name="role" required>
                                        @foreach($jobroles as $jr)
                                        <option>{{$jr->title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="city">{{trans('text.city')}}</label>
                                    <input type="text" class="form-control" id="city" name="city" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="experience">{{trans('text.work_experience')}} <span>*</span></label>
                                    <input type="text" class="form-control" id="experience" name="experience" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="noticePeriod">{{trans('text.notice_period')}} <span>*</span></label>
                                    <input type="text" class="form-control" id="notice_period" name="notice_period" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="currentCtc">{{trans('text.current_salary')}} <span>*</span></label>
                                    <input type="text" class="form-control" id="current_salary" name="current_salary" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="expectedCtc">{{trans('text.expected_salary')}} <span>*</span></label>
                                    <input type="text" class="form-control" id="expected_salary" name="expected_salary" required>
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="resume">{{trans('text.resume')}} <span>*</span></label>
                                    <input type="file" class="form-control" id="resume" name="resume">
                                </div>
                                <div class="form-group col-12 col-sm-6 col-md-6">
                                    <label for="portfolio">{{trans('text.portfolio_website_url')}}</label>
                                    <input type="url" class="form-control" id="portfolio_url" name="portfolio_url" required>
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <label for="leaving">{{trans('text.reason_for_leaving')}}</label>
                                    <textarea class="form-control" rows="5" id="reason" name="reason" required></textarea>
                                </div>
                                <div class="form-group col-12 col-sm-12 col-md-12">
                                    <label for="jobType">{{trans('text.job_type')}} <span>*</span></label>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="{{trans('text.full_time')}}" name="job_type" id="job_type1">{{trans('text.full_time')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="{{trans('text.internship')}}" name="job_type" id="job_type2">{{trans('text.internship')}}
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input type="radio" class="form-check-input" value="{{trans('text.contract')}}" name="job_type" id="job_type3">{{trans('text.contract')}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-12">
                                    <button type="submit" class="career__submit">{{trans('text.submit')}}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-triangle">
        <img src="img/triangle.png" alt="triangle" />
    </div>
</section>

@include('footer')