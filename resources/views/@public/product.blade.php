@extends('@public._layouts.master')

@section('page_title') {{ trans('product.Product') }} @endsection

@section('body_class') page sidebar-left header-style-1 menu-has-search menu-has-cart header-sticky @endsection

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
        <div id="content-wrap" class="container">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                        <div class="container-fluid padding-0">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>

                                    <h2 class="line-height-normal margin-bottom-10">{{ getFromJson($product->title , lang()) }}</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25" style="height:25px"></div>

                                    <img style="width: 100%;" src="{{ url('assets_public/images/product/'. $product->banner) }}" alt="{{ getFromJson($product->title , lang()) }}">

                                    <div class="margin-bottom-0">{!! getFromJson($product->details , lang()) !!}</div>

                                    <div class="wprt-spacer" data-desktop="40" data-mobi="40" data-smobi="40" style="height:40px"></div>
                                </div><!-- /.col-md-12 -->

                            </div><!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div><!-- /.inner-content-wrap -->
                </div><!-- /#site-content -->

                <div id="sidebar" class="" >
                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40" style="height:80px"></div>

                    <div id="inner-sidebar" class="inner-content-wrap">
                        <div class="widget widget_nav_menu">
                            <div class="menu-service-menu-container">
                                <ul id="menu-service-menu" class="menu">
                                    @foreach($products as $single_product)
                                        <li class="menu-item @if(url()->current() == route('public.product', $single_product->id)) current_page_item @endif">
                                            <a href="{{ route('public.product', $single_product->id) }}">{{ getFromJson($single_product->title , lang()) }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div><!-- /.widget_nav_menu -->
                    </div><!-- /#inner-sidebar -->
                </div><!-- /#sidebar -->
        </div><!-- /#content-wrap -->


        @include('@public._partials.call_to_action')

        @include('@public._partials.testimonials')
    </div>

@endsection
