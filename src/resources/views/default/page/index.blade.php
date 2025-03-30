@extends('default.layout')
@section('content')
{{--{!! getPhoneLink('phone', 'phone', '<b>icon</b> ') !!}--}}
{{--{!! getEmailLink('email', 'email',  '<b>icon</b> ') !!}--}}
{{--    <span style="display: block">{!! getAddressString() !!}</span>--}}
{{--    <span style="display: block">{!! getFooterCreator() !!}</span>--}}

    @include('default.rotator.base', ['id_rotator' => $fields->rotator, 'type' => 'main'])
<section class="about-section">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column d-flex align-items-center">
                <div class="content_block_2">
                    <div class="content-box">
                        <div class="sec-title">

                            @if(!empty($fields->top_text_about_us))
                                <span class="top-text">{{$fields->top_text_about_us}}</span>
                            @endif

                            @if(!empty($fields->header_about_us))
                                <h2>{{$fields->header_about_us}}</h2>
                            @endif

                            @if(!empty($fields->description_about_us))
                                {!! $fields->description_about_us !!}
                            @endif

                        </div>
                        <div class="btn-box"><a href="{{route('gallery.show')}}" class="theme-btn style-one">Zobacz galerię<i class="far fa-angle-double-right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box">
                        <figure class="image image-1"><img src="{{ asset('images/about_us_1.jpg') }}" style="height: 550px; object-fit: cover;" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="chooseus-section" style="padding: 50px 0px">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column d-flex align-items-center">
                <div class="content_block_5">
                    <div class="content-box">
                        <div class="sec-title">
                            @if(!empty($fields->subtitle_offer_1))
                                <span class="top-text">{{$fields->subtitle_offer_1}}</span>
                            @endif

                            @if(!empty($fields->header_offer_1))
                                <h2>{{$fields->header_offer_1}}</h2>
                            @endif
                        </div>

                        @if(!empty($fields->description_offer_1))
                            <div class="text">
                                {!! $fields->description_offer_1 !!}
                            </div>
                        @endif
                        {!! str_replace('<ul>', '<ul class="list-item clearfix">', $fields->offer_offer_1 ?? '') !!}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <div class="image-bg"></div>
                    <figure class="image"><img src="{{ asset('images/offer_1.jpg') }}" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="chooseus-section right_section pt-0">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image-box">
                    <figure class="image">
                        <img src="{{ asset('images/offer_2.jpg') }}" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column d-flex align-items-center">
                <div class="content_block_5">
                    <div class="content-box">
                        <div class="sec-title">
                            @if(!empty($fields->subtitle_offer_2))
                                <span class="top-text">{{$fields->subtitle_offer_2}}</span>
                            @endif

                            @if(!empty($fields->header_offer_2))
                                <h2>{{$fields->header_offer_2}}</h2>
                            @endif
                        </div>

                        @if(!empty($fields->description_offer_2))
                            <div class="text">
                                {!! $fields->description_offer_2 !!}
                            </div>
                        @endif
                        {!! str_replace('<ul>', '<ul class="list-item clearfix">', $fields->offer_offer_2 ?? '') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="service-style-two bg-color-3 centred">
    <div class="pattern-layer" style="background-image: url({{asset('images/shape-2.png')}});"></div>
    <div class="auto-container">
        <div class="sec-title centred light">
            @if(!empty($fields->subtitle_why_us))
                <span class="top-text">{{$fields->subtitle_why_us}}</span>
            @endif

            @if(!empty($fields->title_why_us))
                <h2>{!! $fields->title_why_us !!}</h2>
            @endif
        </div>
        @include('default.offer.home')
    </div>
</section>
<section class="news-section">
    <div class="auto-container">
        <div class="sec-title centred">
            @if(!empty($fields->subtitle_testimonials))
                <span class="top-text">{{$fields->subtitle_testimonials}}</span>
            @endif

            @if(!empty($fields->title_testimonials))
                <h2>{{$fields->title_testimonials}}</h2>
            @endif
        </div>
        @include('default.realization.home')
    </div>
</section>
<section class="contact-section" style="background-image: url({{asset('images/contact-1.jpg')}});">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <figure class="image-box"><img src="{{asset('images/contact.jpg')}}" alt=""></figure>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_3">
                    <div class="content-box">
                        <div class="sec-title light">
                            @if(!empty($fields->subtitle_contact))
                                <span class="top-text">{{$fields->subtitle_contact}}</span>
                            @endif
                            @if(!empty($fields->title_contact))
                                <h2>{!! $fields->title_contact !!}</h2>
                            @endif
                        </div>
                        @include('default.form.contact_form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
