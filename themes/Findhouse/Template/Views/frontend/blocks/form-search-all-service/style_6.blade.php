
{{--<div class="home10-mainslider" >--}}
{{--    @if(!empty($list_slider))--}}
{{--        <div class="container-fluid p-lg-0">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <div class="main-banner-wrapper">--}}
{{--                        <div class="banner-style-one owl-theme owl-carousel">--}}
{{--                            @foreach($list_slider as $item)--}}
{{--                                @php--}}
{{--                                    $img = get_file_url($item['bg_image'],'full');--}}
{{--                                @endphp--}}
{{--                                <div class="slide slide-one" @if(!empty($img)) style="background-image: url({{$img}}); height: 450px" @endif>--}}
{{--                                    <div class="container">--}}
{{--                                        @if(!empty($property = $item['row']))--}}
{{--                                            <?php--}}
{{--                                            $translation = $property->translate();--}}
{{--                                            $detailUrl = $property->getDetailUrl();--}}
{{--                                            ;?>--}}
{{--                                            <div class="row home-content">--}}
{{--                                                <div class="col-lg-12 text-center p0">--}}
{{--                                                    <h2 class="banner_top_title">{{$property->prefix_price}} {{ $property->display_price }}</h2>--}}
{{--                                                    <a @if(!empty($blank)) target="_blank" @endif href="{{$detailUrl}}">--}}
{{--                                                        <h3 class="banner-title">{{$translation->title}}</h3>--}}
{{--                                                    </a>--}}
{{--                                                    <p>{{__('Beds:')}} {{$property->bed}} {{__(', Baths:')}} {{$property->bathroom}} {{__(', Sq:')}} {!! size_unit_format($property->square) !!}</p>--}}
{{--                                                    <div class="btn"><a href="{{$detailUrl}}" class="banner-btn">{{__('Learn More')}}</a></div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        @endif--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                        <div class="carousel-btn-block banner-carousel-btn">--}}
{{--                            <span class="carousel-btn left-btn"><i class="flaticon-left-arrow-1 left"></i></span>--}}
{{--                            <span class="carousel-btn right-btn"><i class="flaticon-right-arrow right"></i></span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    @endif--}}
{{--</div>--}}


<script src=
            "https://cdn.tailwindcss.com">
</script>

{{--<div class="relative flex items-center justify-center h-screen mb-10 overflow-hidden">--}}
{{--    <video src=--}}
{{--               "{{env('APP_URL')}}/video.mp4"--}}
{{--           autoplay="{true}" loop muted--}}
{{--           className="absolute z-10 w-auto--}}
{{--            min-w-full min-h-full max-w-none">--}}
{{--    </video>--}}
{{--</div>--}}

<header class="relative flex items-center justify-center h-screen  mb-10 overflow-hidden ">

    <video  controls autoplay loop muted class="absolute z-10 w-auto min-w-full min-h-full max-w-none">
        <source
            src="{{env('APP_URL')}}/video.mp4"
            type="video/mp4" />
    </video>
</header>


{{--<div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">--}}
{{--    <div class="md:flex">--}}
{{--        <div class="md:shrink-0">--}}
{{--            <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{url('img')}}/image.jpg" alt="Modern building architecture">--}}
{{--        </div>--}}

{{--    </div>--}}

{{--</div>--}}


<div class="header_top home6 dn-992 p10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img src="{{url('img')}}/image.jpg" style="width:1520px;  height:100%" >
            </div>
        </div>
    </div>
</div>
