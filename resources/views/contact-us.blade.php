@include('header')

<section class="contact-page-area hero-section gradient-overlay contact-full-screen">

        

            <div class="row w-100 m-0">

                <div class="col-md-8">

                    <div class="left_c">

                    <a href="{{url('/')}}"><i><img src="img/back-btn.svg" width="20"></i> {{trans('text.back')}}</a>    

                    <h1>{{trans('text.product_via_design')}}</h1>

                    <div class="address_aa">

                        <span><i><img src="{{asset('img/chat-icon.svg')}}"></i> <a href="mailto:{{setting('site.mailto')}}">{{setting('site.mailto')}}</a></span>

                        <p>
                            <a href="#">{{setting('site.address')}}
                            </a>
                        </p>

                    </div>

                    </div>

                </div>

                 <div class="col-md-4 pr-0">

                   

                   <ul class="page_links">

                       <li class="d-flex align-items-center align-middle"><a href="{{url('/general-queries')}}">

                           <h3>{{trans('text.general_queries')}} <i><img src="img/ar-right.svg" width="22"></i></h3>

                           <p>{{trans('text.drop_a_line')}}</p>

                       </a></li>

                       <li class="d-flex align-items-center align-middle"><a href="{{url('/career')}}">

                           <h3>{{trans('text.careers')}} <i><img src="img/ar-right.svg" width="22"></i></h3>

                           <p>{{trans('text.opportunity_to_get')}}</p>

                       </a></li>

                   </ul>



                </div>

            </div>

        

    </section>