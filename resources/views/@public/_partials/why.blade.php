<section class="wprt-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                <h2>{{ trans('why_section.why_choose_us') }}</h2>
                <div class="wprt-lines style-1 custom-3">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </div>
                <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                <div class="wprt-toggle style-1">
                    <h3 class="toggle-title">{{ trans('why_section.title_1') }}</h3>
                    <div class="toggle-content">{{ trans('why_section.paragraph_1') }}</div>
                </div>

                <div class="wprt-toggle active style-1">
                    <h3 class="toggle-title">{{ trans('why_section.title_2') }}</h3>
                    <div class="toggle-content">{{ trans('why_section.paragraph_2') }}</div>
                </div>

                <div class="wprt-toggle style-1">
                    <h3 class="toggle-title">{{ trans('why_section.title_3') }}</h3>
                    <div class="toggle-content">{{ trans('why_section.paragraph_3') }}</div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                <h2>{{ trans('about_section.info_about_us') }}</h2>
                <div class="wprt-lines style-1 custom-3">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                </div>
                <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                    <div class="content">{{ trans('about_section.paragraph') }}</div>
                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                    <div id="wprt-slider" class="flexslider">
                        <ul class="slides">
                            <li class="flex-active-slide">
                                <a class="zoom" href="{{ trans('about_section.media_image_1') }}"><i class="fa fa-arrows-alt"></i></a>
                                <img src="{{ trans('about_section.media_image_1') }}" alt="image" />
                            </li>

                            <li class="flex-active-slide">
                                <a class="zoom" href="{{ trans('about_section.media_image_2') }}"><i class="fa fa-arrows-alt"></i></a>
                                <img src="{{ trans('about_section.media_image_2') }}" alt="image" />
                            </li>
                            <li class="flex-active-slide">
                                <a class="zoom" href="{{ trans('about_section.media_image_3') }}"><i class="fa fa-arrows-alt"></i></a>
                                <img src="{{ trans('about_section.media_image_3') }}" alt="image" />
                            </li>

                            <li class="flex-active-slide">
                                <a class="zoom" href="{{ trans('about_section.media_image_4') }}"><i class="fa fa-arrows-alt"></i></a>
                                <img src="{{ trans('about_section.media_image_4') }}" alt="image" />
                            </li>
                            <li class="flex-active-slide">
                                <a class="zoom" href="{{ trans('about_section.media_image_5') }}"><i class="fa fa-arrows-alt"></i></a>
                                <img src="{{ trans('about_section.media_image_5') }}" alt="image" />
                            </li>

                            <li class="flex-active-slide">
                                <a class="zoom" href="{{ trans('about_section.media_image_6') }}"><i class="fa fa-arrows-alt"></i></a>
                                <img src="{{ trans('about_section.media_image_6') }}" alt="image" />
                            </li>
                        </ul>
                    </div>

                    <div id="wprt-carousel" class="flexslider">
                        <ul class="slides">
                            <li><img src="{{ trans('about_section.media_image_1') }}" alt="image"></li>
                            <li><img src="{{ trans('about_section.media_image_2') }}" alt="image"></li>
                            <li><img src="{{ trans('about_section.media_image_3') }}" alt="image"></li>
                            <li><img src="{{ trans('about_section.media_image_4') }}" alt="image"></li>
                            <li><img src="{{ trans('about_section.media_image_5') }}" alt="image"></li>
                            <li><img src="{{ trans('about_section.media_image_6') }}" alt="image"></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
            </div>
        </div>
    </div>
</section>
