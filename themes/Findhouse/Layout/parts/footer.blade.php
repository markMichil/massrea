<style>
    .inner_page_breadcrumb:before {
background-color:rgb(255 255 255 / 0%);}
    </style>
<section class="inner_page_breadcrumb"  style="background-image: url({{env('APP_URL').'/uploads/0000/6/2023/10/17/downlaod-app.jpg'}}); background-size: cover
">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content">

                    <h1 class="breadcrumb_title"></h1>
                </div>
            </div>
        </div>
    </div>
</section>

{{--<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">--}}
{{--    <div class="md:flex">--}}
{{--        <div class="md:shrink-0">--}}
{{--            <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{env('APP_URL')}}/uploads/0000/6/2023/10/17/downlaod-app.jpg" alt="Modern building architecture">--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}

<!-- Our Footer -->
<section class="footer_one">
    <div class="container-fluied">
{{--        <div class="row">--}}
{{--            @if($list_widget_footers = setting_item_with_lang("list_widget_footer"))--}}
{{--                <?php $list_widget_footers = json_decode($list_widget_footers); ?>--}}
{{--                @foreach($list_widget_footers as $key=>$item)--}}
{{--                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">--}}
{{--                        <div class="footer_about_widget">--}}
{{--                            <h4>{{$item->title}}</h4>--}}
{{--                            {!! $item->content  !!}--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}
{{--        </div>--}}
@php
        $locale = session('website_locale',app()->getLocale());
        @endphp
        @if($locale != 'en')
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_about_widget">
                        <h4></h4>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <img src="{{env('APP_URL')}}/uploads\/0000\/8\/2023\/10\/11\/logo-blue-1.png">
                            </div>


                            <div class="col-12">
                                <img src="{{env('APP_URL')}}/uploads\/0000\/6\/2023\/10\/17\/misr-insurance-holding-company-logo-removebg-preview.png">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_about_widget">
                        <h4></h4>
                        <ul>
                            <li>

                                <a href="#" style="font-size: 15px; font-weight: bold;">من نحن؟</a>

                            </li>
                            <li><a href="#" style="font-size: 15px;font-weight: bold;">الثروة العقارية</a></li>
                            <li><a href="#" style="font-size: 15px;font-weight: bold;">المركز الاعلامى</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_about_widget">
                        <h4></h4>
                        <ul>
                            <li style="font-weight: bold;">
                                <a href="#" style="font-size: 15px;font-weight: bold;"> إستثمارات ومشاركات</a>
                            </li>
                            <li style="font-weight: bold;"><a href="#" style="font-size: 15px;font-weight: bold;"> البيع والايجار</a></li>
                            <li style="font-weight: bold;"><a href="#" style="font-size: 15px;font-weight: bold;"> تواصل معنا</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_about_widget">
                        <h4></h4>
                        <ul>
                            <li style="font-weight: bold;">
                                <a href="#" style="font-size: 15px;font-weight: bold;"> الشروط والاحكام</a>
                            </li>
                            <li style="font-weight: bold;"><a href="#" style="font-size: 15px;font-weight: bold;"> خريطة الموقع</a></li>


                        </ul>
                    </div>
                </div>
            </div>

@else
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_about_widget">
                        <h4></h4>
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <img src="{{env('APP_URL')}}/uploads\/0000\/8\/2023\/10\/11\/logo-blue-1.png">
                            </div>


                            <div class="col-12">
                                <img src="{{env('APP_URL')}}/uploads\/0000\/6\/2023\/10\/17\/misr-insurance-holding-company-logo-removebg-preview.png">
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_about_widget">
                        <h4></h4>
                        <ul>
                            <li>
                                <a href="#" style="font-size: 15px; font-weight: bold;">About Company?</a>
                            </li>
                            <li><a href="#" style="font-size: 15px;font-weight: bold;">Real State Wealth</a></li>
                            <li><a href="#" style="font-size: 15px;font-weight: bold;">Announcements</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_about_widget">
                        <h4></h4>
                        <ul>
                            <li style="font-weight: bold;">
                                <a href="#" style="font-size: 15px;font-weight: bold;">Investments</a>
                            </li>
                            <li style="font-weight: bold;"><a href="#" style="font-size: 15px;font-weight: bold;"> Properties</a></li>
                            <li style="font-weight: bold;"><a href="#" style="font-size: 15px;font-weight: bold;"> Contact Us</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                    <div class="footer_about_widget">
                        <h4></h4>
                        <ul>
                            <li style="font-weight: bold;">
                                <a href="#" style="font-size: 15px;font-weight: bold;">Terms and Conditions</a>
                            </li>
                            <li style="font-weight: bold;"><a href="#" style="font-size: 15px;font-weight: bold;"> Site Map</a></li>


                        </ul>
                    </div>
                </div>
            </div>
            @endif

    </div>
</section>

<!-- Our Footer Bottom Area -->
<section class="footer_middle_area" style="padding: 0px">
    <div class="container">
        <div class="row justify-content-between">
            @if(session('website_locale',app()->getLocale()) == 'egy')
            <div class="col-md-7 offset-md-3">
                @else
            <div class="col-md-8 offset-md-5">
                    @endif
                <div class="footer_menu_widget">

                        <ul>
                            <li class="list-inline-item footer-social-icon"><a href="#" style="color: white"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item footer-social-icon"><a href="#" style="color: white"><i class="fa fa-linkedin"></i></a></li>
                            <li class="list-inline-item footer-social-icon"><a href="#" style="color: white"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                </div>
            </div>

        </div>
    </div>
</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>

@if(Auth::id())
    @include('Media::browser')
@endif

<script type="text/javascript" src="{{asset('themes/findhouse/libs/jquery-3.5.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/libs/jquery-ui.min.js')}}"></script>
<script src="{{ asset('themes/findhouse/libs/vue/vue.js') }}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/jquery-migrate-3.0.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/jquery.mmenu.all.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/ace-responsive-menu.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/bootstrap-select.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/isotop.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/snackbar.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/simplebar.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/parallax.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/scrollto.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/jquery-scrolltofixed-min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/jquery.counterup.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/wow.min.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/slider.js')}}"></script>
<script type="text/javascript" src="{{asset('themes/findhouse/js/timepicker.js')}}"></script>
{!! App\Helpers\MapEngine::scripts() !!}

<!-- Custom script for all pages -->
<script type="text/javascript" src="{{asset('themes/findhouse/js/script.js')}}"></script>
@if(Auth::id())
    <script src="{{ asset('module/media/js/browser.js?_ver='.config('app.asset_version')) }}"></script>
@endif
@if(setting_item('cookie_agreement_enable')==1 and request()->cookie('booking_cookie_agreement_enable') !=1 and !is_api()  and !isset($_COOKIE['booking_cookie_agreement_enable']))
    <div class="booking_cookie_agreement p-3 d-flex fixed-bottom">
        <div class="content-cookie">{!! clean(setting_item_with_lang('cookie_agreement_content')) !!}</div>
        <button class="btn save-cookie">{!! clean(setting_item_with_lang('cookie_agreement_button_text')) !!}</button>
    </div>
    <script>
        var save_cookie_url = '{{route('core.cookie.check')}}';
    </script>
    <script src="{{ asset('themes/findhouse/js/cookie.js?_ver='.config('app.version')) }}"></script>
@endif

{{-- home.js --}}
<script src="{{ asset('themes/findhouse/js/functions.js') }}"></script>
<script src="{{ asset('themes/findhouse/js/home.js') }}"></script>

@include('Layout::parts.login-register-modal')

{!! \App\Helpers\Assets::js(true) !!}
@php \App\Helpers\ReCaptchaEngine::scripts() @endphp
<script>



    $(".ace-responsive-menu li").click(function() {
        // Remove "active" class from all li a elements
        $(".ace-responsive-menu li").removeClass("activeMenu");
        console.log('55555');
        // Add "active" class to the clicked element
        $(this).addClass("activeMenu");
        console.log($(this));
        @php
        $SESSION['class'] = 'activeMenu';
        @endphp
    });

</script>
@stack('js')
