    @include('header')

    <section class="query-area hero-section gradient-overlay contact-full-screen">
        <div class="row w-100 m-0">
            <div class="col-md-7">
                <div class="left_c">
                    <a href="{{url('contact-us')}}"><i><img src="img/back-btn.svg" width="20"></i> {{trans('text.back')}}</a>
                    <h1>{{trans('text.experience_together')}}</h1>
                    <div class="logo_icon">
                        <img src="{{asset('img/logo_icon.svg')}}">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="c_form">
                    <h3>{{trans('text.love_to_hear')}}</h3>
                    <p>{{trans('text.general_questions')}}</p>
                    @if(Session('success'))
                    <h4>{{Session('success')}}</h4>
                    @endif
                    <form action="{{route('general-queries')}}" method="post" role="form">
                        @csrf
                        <input type="text" id="name" name="name" class="form-control c-user" placeholder="{{trans('text.name')}} *" required>
                        <input type="email" id="email" name="email" class="form-control c-email" placeholder="{{trans('text.email')}} *" required>
                        <input type="phone" id="phone" name="phone" class="form-control c-phone" placeholder="{{trans('text.phone')}}" required>
                        <textarea class="form-control c-message" id="message" name="message" placeholder="{{trans('text.message')}}" rows="5" required></textarea>
                        <button type="submit" class="btn btn-primary">{{trans('text.submit')}}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        //autocomplete off
        jQuery(document).ready(function() {
            jQuery(".c_form input").attr("autocomplete", "off");
            jQuery('body').addClass('query-page');

        });
    </script>