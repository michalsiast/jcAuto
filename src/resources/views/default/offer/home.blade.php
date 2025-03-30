<div class="row clearfix justify-content-center">
    @foreach($items as $item)
        <div class="col-lg-4 col-md-6 col-sm-12 service-block">
            <div class="service-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                <div class="inner-box">
                    <h3>{{$item->title}}</h3>
                    <div class="icon-box">
                        <img src="{{ renderImage($item->galleryCover(), 110, 110, 'cover') }}" style="height: 110px; object-fit: cover" />
                    </div>
                    {!! $item->text !!}
                </div>
            </div>
        </div>
    @endforeach
</div>
