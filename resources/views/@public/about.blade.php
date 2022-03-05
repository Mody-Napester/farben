@extends('@public._layouts.master')

@section('page_title') {{ trans('about.About') }} @endsection

@section('body_class') front-page no-sidebar site-layout-full-width header-style-1 menu-has-search menu-has-cart header-sticky @endsection

@section('page_contents')

    <!-- Featured Title -->
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">{{ trans('about.about_us') }}</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{ route('public.home') }}" title="" rel="home" class="trail-begin">{{ trans('about.Home') }}</a>
                            <span class="sep">/</span>
                            <span class="trail-end">{{ trans('about.about_us') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">

                        @foreach($abouts as $about)
                        <section class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                    </div>

                                    <div class="col-md-7">
                                        <h2 class="line-height-normal margin-bottom-10">{{ getFromJson($about->title , lang()) }}</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>

                                        <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                        <p class="margin-bottom-25">{!! getFromJson($about->details , lang()) !!}</p>
                                    </div>

                                    <div class="col-md-5">
                                        <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                            <img style="width: 100%;" class="img-fluid" src="{{ url('assets_public/images/about/'. $about->image) }}" alt="">
                                        </div>
                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
                        @endforeach

                        <div class="row">
                            <div class="col-md-6"></div>
                        </div>

                        @include('@public._partials.promotion')

                        @include('@public._partials.testimonials')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
