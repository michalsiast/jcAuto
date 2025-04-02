<section class="banner-section">
    <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
        @foreach($rotator->gallery->items as $item)
            <div class="slide-item">
                <div class="image-layer" style="background-image:url({{renderImage($item->url, 1920, 700, `fit`)}})"></div>
                <div class="auto-container">
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-10 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <h5>{{$item->name}}</h5>
                                {!! $item->text !!}
                                <div class="btn-box">
                                    <a href="{{route('gallery.show')}}" class="theme-btn style-one">Galeria<i class="far fa-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@push('scripts.body.bottom')
    <script>
        $('.banner-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            active: true,
            smartSpeed: {{$rotator->speed ?? 500}},
            autoplay: true,
            autoplayTimeout: {{$rotator->time ?? 3000}},
            navText: [ '<span class="flaticon-right-arrow"></span>', '<span class="flaticon-right-arrow"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1024:{
                    items:1
                }
            }
        });
    </script>
@endpush
