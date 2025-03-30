<div class=" clearfix testimonial owl-carousel owl-theme owl-dots-none owl-nav-none">
    @foreach($items as $item)
        <div class="news-block">
            <div class="news-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <div class="icon-box"><i class="flaticon-quotation"></i></div>
                    <div class="lower-content">
                        {!! $item->text !!}
                        <ul class="post-info clearfix" style="padding-top: 10px">
                            <li><strong><i class="far fa-user"></i>{{$item->title}}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
  @endforeach
</div>

@push('scripts.body.bottom')
    <script>
        $('.testimonial').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            smartSpeed: 3000,
            autoplay: true,
            navText: [ '<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                600:{
                    items:2
                },
                800:{
                    items:3
                },
                1200:{
                    items:3
                }

            }
        });
    </script>
@endpush
