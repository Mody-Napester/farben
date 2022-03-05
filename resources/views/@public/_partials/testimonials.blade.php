<section class="wprt-section testiminials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
            </div>

            <div class="col-md-12">
                <h2>{{ trans('testimonial.Testimonial') }}</h2>
                <div class="wprt-lines style-1 custom-3">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </div>
                <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                <div class="wprt-testimonials has-outline arrow-style-2 has-arrows arrow60 arrow-light" data-layout="slider" data-column="1" data-column2="1" data-column3="1" data-column4="1" data-gaph="0" data-gapv="0">
                    <div id="testimonials-wrap" class="cbp">
                        @foreach(\App\Testimonial::all() as $testimonial)
                        <div class="cbp-item">
                            <div class="customer clearfix">
                                <div class="inner">
                                    <div class="image"><img src="{{ url('assets_public/images/testimonial/'. $testimonial->image) }}" alt="image" /></div>
                                    <h4 class="name">{{ getFromJson($testimonial->name , lang()) }}</h4>
                                    <div class="position">{{ getFromJson($testimonial->role , lang()) }}</div>
                                    <blockquote class="whisper">{!! getFromJson($testimonial->details , lang()) !!}</blockquote>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
            </div>
        </div>
    </div>
</section>
