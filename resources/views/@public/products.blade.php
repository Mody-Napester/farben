@extends('@public._layouts.master')

@section('page_title') {{ trans('product.Product') }} @endsection

@section('body_class') front-page no-sidebar site-layout-full-width header-style-1 menu-has-search menu-has-cart header-sticky @endsection

@section('page_contents')

    <!-- Featured Title -->
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">{{ trans('product.product') }}</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{ route('public.home') }}" title="" rel="home" class="trail-begin">{{ trans('product.Home') }}</a>
                            <span class="sep">/</span>
                            <span class="trail-end">{{ trans('product.product') }}</span>
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

                            <section class="wprt-section">
                                <div class="container">
                                    @foreach(\App\Category::orderBy('ordering', 'ASC')->get() as $category)
                                        <h2 style="padding: 20px;background-color: #AB4520;color:#ffffff;text-align: center">{{ getFromJson($category->title, lang()) }}</h2>
                                        @if($category->products()->count() > 0)
                                            <div style="padding: 30px;background-color: #eeeeee;margin-bottom: 10px;">
                                                <div class="row">
                                                    @foreach($category->products()->orderBy('ordering', 'ASC')->get() as $product)
                                                        <div class="col-md-3">

                                                            <div class="service-item clearfix" style="background-color: #ffffff;padding-bottom: 20px;">
                                                                <div class="thumb" style="height: 250px;overflow: hidden"><img style="height: 100%" src="{{ url('assets_public/images/product/'. $product->image) }}" alt="{{ getFromJson($product->title , lang()) }}"></div>
                                                                <div class=" text-center">
                                                                    <h3 class="title font-size-16" style="margin: 10px 0;"><a href="{{ route('public.product', $product->id) }}">{{ getFromJson($product->title , lang()) }}</a></h3>
                                                                    {{--                                                    <p class="desc">{!! getFromJson($product->details , lang()) !!}</p>--}}
                                                                    <a href="{{ route('public.product', $product->id) }}" class="wprt-button small rounded-3px">{{ trans('product.Read_more') }}</a>
                                                                </div>
                                                            </div>

                                                            <div class="wprt-spacer" data-desktop="55" data-mobi="40" data-smobi="40" style="height:55px"></div>

                                                        </div>
                                                    @endforeach
                                                </div><!-- /.row -->
                                            </div>
                                        @else
                                            <div style="padding: 30px;background-color: #eeeeee;margin-bottom: 10px;">
                                                {{ trans('product.no_product_available') }}
                                            </div>
                                        @endif
                                    @endforeach
                                </div><!-- /.container -->
                            </section>


                        @include('@public._partials.call_to_action')

                        @include('@public._partials.testimonials')
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
