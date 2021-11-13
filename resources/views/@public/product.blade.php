@extends('@public._layouts.master')

@section('page_title') {{ getFromJson($product->title , lang()) }} @endsection

@section('body_class') page sidebar-left header-style-1 menu-has-search menu-has-cart header-sticky @endsection

@section('page_contents')

    <!-- Featured Title -->
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">{{ getFromJson($product->title , lang()) }}</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{ route('public.home') }}" title="" rel="home" class="trail-begin">{{ trans('product.Home') }}</a>
                            <span class="sep">/</span>
                            <span class="trail-end">{{ getFromJson($product->title , lang()) }}</span>
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

                                    @if(session()->has('message'))
                                        <div class="alert alert-{{ session('message')['type'] }}">
                                            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                                            {{ session('message')['text'] }}
                                        </div>
                                    @endif

                                    <h2 class="line-height-normal margin-bottom-10">{{ getFromJson($product->title , lang()) }}</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25" style="height:25px"></div>

                                    <img style="width: 100%;" src="{{ url('assets_public/images/product/'. $product->banner) }}" alt="{{ getFromJson($product->title , lang()) }}">

                                    <br><br>

                                    <div class="margin-bottom-0">{!! getFromJson($product->details , lang()) !!}</div>

                                    <div class="wprt-spacer" data-desktop="40" data-mobi="40" data-smobi="40" style="height:40px"></div>
                                </div><!-- /.col-md-12 -->


                                <div class="col-md-12">
                                    <h4 class="margin-bottom-15 rtl-el">{{ trans('contact.order_this_product') }}</h4>
                                    <form action="{{ route('public.product.post', $product->id) }}" method="post" class="rtl-el wpcf7-form">
                                        @csrf

                                        <div class="wprt-contact-form-1">
											<span class="wpcf7-form-control-wrap message">
												<input style="margin-bottom: 10px !important;" type="text" tabindex="1" id="name" name="name" value="{{ old('name') }}" class="wpcf7-form-control" placeholder="{{ trans('contact.Name') }} *" required="">
                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
											</span>
                                            <span class="wpcf7-form-control-wrap message" style="margin-bottom: 10px;">
												<input style="margin-bottom: 10px !important;" type="text" tabindex="3" id="phone" name="phone" value="{{ old('phone') }}" class="wpcf7-form-control" placeholder="{{ trans('contact.Phone_Number') }} *" required="">
											    @error('phone')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </span>
                                            <span class="wpcf7-form-control-wrap message">
												<textarea name="message" tabindex="5" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" placeholder="{{ trans('contact.Message') }} *" required="">{{ old('message') }}</textarea>
											    @error('message')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </span>
                                            <div class="wrap-submit">
                                                <input type="submit" value="{{ trans('contact.SEND_MESSAGE') }}" class="submit wpcf7-form-control wpcf7-submit" id="submit" name="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- /.col-md-8 -->
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
