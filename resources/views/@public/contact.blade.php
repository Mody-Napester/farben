@extends('@public._layouts.master')

@section('page_title') {{ trans('contact.Contact') }} @endsection

@section('body_class') front-page no-sidebar site-layout-full-width header-style-1 menu-has-search menu-has-cart header-sticky @endsection

@section('page_contents')

    <!-- Featured Title -->
    <div id="featured-title" class="clearfix featured-title-left">
        <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
                <div class="featured-title-heading-wrap">
                    <h1 class="featured-title-heading">{{ trans('contact.Contact') }}</h1>
                </div>
                <div id="breadcrumbs">
                    <div class="breadcrumbs-inner">
                        <div class="breadcrumb-trail">
                            <a href="{{ route('public.home') }}" title="" rel="home" class="trail-begin">{{ trans('contact.Home') }}</a>
                            <span class="sep">/</span>
                            <span class="trail-end">{{ trans('contact.Contact') }}</span>
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
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>

                                        <iframe src="{{ trans('contact.map') }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40" style="height:50px"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-4">
                                        <div class="wprt-information">
                                            <h4 class="margin-bottom-15">{{ trans('contact.call_us') }}</h4>
                                            <p>{{ trans('contact.call_us_paragraph') }}</p>
                                            <ul class="style-2">
                                                <li class="address">
                                                    <span class="hl">{{ trans('contact.address_title') }}:</span>
                                                    <span class="text">{{ trans('contact.address') }}</span>
                                                </li>
                                                <li class="phone">
                                                    <span class="hl">{{ trans('contact.phone_title') }}:</span>
                                                    <span class="text">{{ trans('contact.phone') }}</span>
                                                </li>
                                                <li class="email">
                                                    <span class="hl">{{ trans('contact.email_title') }}:</span>
                                                    <span class="text">{{ trans('contact.email') }}</span>
                                                </li>
                                            </ul>
                                        </div><!-- /.wprt-information -->

                                        <div class="wprt-spacer" data-desktop="0" data-mobi="30" data-smobi="30" style="height:0px"></div>
                                    </div><!-- /.col-md-4 -->

                                    <div class="col-md-8">
                                        <h4 class="margin-bottom-15 rtl-el">{{ trans('contact.Get_in_touch') }}</h4>

                                        <form action="{{ route('public.contact.post') }}" method="post" class="rtl-el wpcf7-form">
                                            @csrf

                                            <div class="wprt-contact-form-1">

                                                <span class="wpcf7-form-control-wrap name">
                                                    <input style="margin-bottom: 10px !important;" type="text" tabindex="1" id="name" name="name" value="{{ old('name') }}" class="wpcf7-form-control" placeholder="{{ trans('contact.Name') }} *" required="">
                                                    @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </span>

                                                <span class="wpcf7-form-control-wrap phone" style="margin-bottom: 10px;">
                                                    <input style="margin-bottom: 10px !important;" type="text" tabindex="3" id="phone" name="phone" value="{{ old('phone') }}" class="wpcf7-form-control" placeholder="{{ trans('contact.Phone_Number') }} *" required="">
                                                    @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </span>

                                                <span class="wpcf7-form-control-wrap email">
                                                    <input type="email" tabindex="2" id="email" name="email" value="{{ old('email') }}" class="wpcf7-form-control" placeholder="{{ trans('contact.Email') }} *" required="">
                                                    @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </span>

                                                <span class="wpcf7-form-control-wrap subject">
                                                    <input type="text" tabindex="2" id="subject" name="subject" value="{{ old('subject') }}" class="wpcf7-form-control" placeholder="{{ trans('contact.Subject') }} *" required="">
                                                    @error('subject')
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

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60" style="height:80px"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
