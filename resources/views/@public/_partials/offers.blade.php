{{--<section id="offers" class="services-section-two" style="background-color: #f8f7ff;">--}}
{{--    <div class="auto-container">--}}
{{--        <div class="sec-title centered">--}}
{{--            <h2>{{ trans('home.Offers_For_25_Years') }}</h2>--}}
{{--        </div>--}}
{{--        <div class="row clearfix">--}}

{{--            @if(count($offers) == 1)--}}
{{--                @foreach($offers as $offer)--}}
{{--                    <div class="service-block-three col-md-6 offset-md-3 mb-4">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="image-box">--}}
{{--                                <img src="{{ url('assets_public/images/offer/'. $offer->image) }}" alt=""/>--}}
{{--                                <div class="caption">{{ getFromJson($offer->title , lang()) }}</div>--}}
{{--                                <div class="overlay-box">--}}
{{--                                    <h6>{{ getFromJson($offer->title , lang()) }}</h6>--}}
{{--                                    <div class="text">{{ getFromJson($offer->details , lang()) }}</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}

{{--            @if(count($offers) == 2)--}}
{{--                @foreach($offers as $offer)--}}
{{--                    <div class="service-block-three col-md-6 mb-4">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="image-box">--}}
{{--                                <img src="{{ url('assets_public/images/offer/'. $offer->image) }}" alt=""/>--}}
{{--                                <div class="caption">{{ getFromJson($offer->title , lang()) }}</div>--}}
{{--                                <div class="overlay-box">--}}
{{--                                    <h6>{{ getFromJson($offer->title , lang()) }}</h6>--}}
{{--                                    <div class="text">{{ getFromJson($offer->details , lang()) }}</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}

{{--            @if(count($offers) >= 3)--}}
{{--                @foreach($offers as $offer)--}}
{{--                    <div class="service-block-three col-md-4 mb-4">--}}
{{--                        <div class="inner-box">--}}
{{--                            <div class="image-box">--}}
{{--                                <img src="{{ url('assets_public/images/offer/'. $offer->image) }}" alt=""/>--}}
{{--                                <div class="caption">{{ getFromJson($offer->title , lang()) }}</div>--}}
{{--                                <div class="overlay-box">--}}
{{--                                    <h6>{{ getFromJson($offer->title , lang()) }}</h6>--}}
{{--                                    <div class="text">{{ getFromJson($offer->details , lang()) }}</div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            @endif--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

<section class="wprt-section offer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                <h2>WHAT WE OFFER</h2>
                <div class="wprt-lines style-1 custom-5">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </div>
                <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
            </div><!-- /.col-md-12 -->

            <div class="col-md-12">
                <div class="wprt-service arrow-style-2 has-arrows arrow60 arrow-light" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                    <div id="service-wrap" class="cbp">
                        <div class="cbp-item">
                            <div class="service-item clearfix">
                                <div class="thumb"><img src="assets_public/img/services/1.jpg" alt="image" /></div>
                                <div class="service-item-wrap">
                                    <h3 class="title font-size-18"><a href="#">عنوان الفقرة</a></h3>
                                    <p class="desc">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                                    <a href="#" class="wprt-button small rounded-3px">اقرا المزيد</a>
                                </div>
                            </div>
                        </div><!-- /.cbp-item -->

                        <div class="cbp-item">
                            <div class="service-item clearfix">
                                <div class="thumb"><img src="assets_public/img/services/1.jpg" alt="image" /></div>
                                <div class="service-item-wrap">
                                    <h3 class="title font-size-18"><a href="#">عنوان الفقرة</a></h3>
                                    <p class="desc">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                                    <a href="#" class="wprt-button small rounded-3px">اقرا المزيد</a>
                                </div>
                            </div>
                        </div><!-- /.cbp-item -->

                        <div class="cbp-item">
                            <div class="service-item clearfix">
                                <div class="thumb"><img src="assets_public/img/services/1.jpg" alt="image" /></div>
                                <div class="service-item-wrap">
                                    <h3 class="title font-size-18"><a href="#">عنوان الفقرة</a></h3>
                                    <p class="desc">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                                    <a href="#" class="wprt-button small rounded-3px">اقرا المزيد</a>
                                </div>
                            </div>
                        </div><!-- /.cbp-item -->

                        <div class="cbp-item">
                            <div class="service-item clearfix">
                                <div class="thumb"><img src="assets_public/img/services/1.jpg" alt="image" /></div>
                                <div class="service-item-wrap">
                                    <h3 class="title font-size-18"><a href="#">عنوان الفقرة</a></h3>
                                    <p class="desc">هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                                    <a href="#" class="wprt-button small rounded-3px">اقرا المزيد</a>
                                </div>
                            </div>
                        </div><!-- /.cbp-item -->
                    </div><!-- /#service-wrap -->
                </div><!-- /.wprt-service -->
            </div><!-- /.col-md-12 -->

            <div class="col-md-12">
                <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
            </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section>
