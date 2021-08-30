<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>{{ config('app.name') }} | @yield('page_title')</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="{{ url('style.css') }}">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="{{ url('assets/icon/favicon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ url('assets/icon/apple-touch-icon-158-precomposed.png') }}">

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->

    @if(lang() == 'ar')
        <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">

        <style type="text/css">
            body,#main-nav > ul > li > a,.font-family-heading,.wprt-button,h1, h2, h3, h4, h5, h6{
                font-family: 'Tajawal', sans-serif !important;
            }
            #top-bar.style-2 .top-bar-socials,#main-nav > ul > li,#top-bar.style-2 .top-bar-content,footer, .wprt-toggle,.wprt-information,.line-height-normal{
                direction: rtl;
            }
            #main-nav > ul > li{
                float: right;
            }
            /*top-bar.style-2 .top-bar-socials{
                text-align: right;
            }
            #top-bar.style-2 .top-bar-content {
                text-align: left;
            }*/
            .wprt-section h2, .content, .wprt-information, .contact-form, .menu-item{
                text-align: right;
            }
            .wprt-lines .line-1, .wprt-lines .line-2 ,#footer-widgets.style-1 .widget .widget-title > span::after,.wprt-information ul li::before{
                right: 0;
                left: auto;
            }
            .cbp-nav-controls{
                left: 0;
            }
            .wprt-information ul li{
                padding: 0 50px 0 0 ;
            }
            .rtl-el{
                text-align: right;
                direction: rtl;
            }
            .sidebar-left #sidebar{float: right}
            .sidebar-left #site-content{float: left}
        </style>

@endif

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="@yield('body_class')">

<div id="wrapper" class="animsition">
    <div id="page" class="clearfix">

        <div id="site-header-wrap">
            <!-- Top Bar -->
            <div id="top-bar" class="style-2">
                <div id="top-bar-inner" class="container">
                    <div class="top-bar-inner-wrap">

                        <div class="top-bar-socials">
                            <div class="inner">
                                @if(lang() == 'ar')
                                    <a class="" href="{{ route('language', ['en']) }}" aria-hidden="true">English</a>
                                @else
                                    <a class="" href="{{ route('language', ['ar']) }}" aria-hidden="true">عربي</a>
                                @endif
                                <span class="icons">
                                    @foreach(\App\Social::all() as $social)
                                        <a target="_blank" href="{{ $social->link }}" title="{{ $social->name }}"><span class="fa {{ $social->provider->class }}" aria-hidden="true"></span></a>
                                    @endforeach
                                </span>
                            </div>
                        </div>

                        <div class="top-bar-content">
                            <span id="top-bar-text">
                                <i class="fa fa-phone-square"></i>{{ trans('contact.phone') }}
                                <i class="fa fa-envelope"></i>{{ trans('contact.email') }}
                                <i class="fa fa-clock-o"></i>{{ trans('contact.working_hours') }}


                            </span>
                        </div>
                    </div>
                </div>
            </div><!-- /#top-bar -->

            <!-- Header -->
            <header id="site-header" class="header-front-page style-1">
                <div id="site-header-inner" class="container">
                    <div class="wrap-inner">
                        <div id="site-logo" class="clearfix">
                            <div id="site-logo-inner">
                                <a href="{{ route('public.home') }}" title="farben" rel="home" class="main-logo">
                                    <img style="width: 150px;" src="{{ url('assets/img/logo.png') }}" alt="{{ config('app.name') }}" data-retina="{{ url('assets/img/logo.png') }}" data-width="200" data-height="30">
                                </a>
                            </div>
                        </div><!-- /#site-logo -->

                        <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                        <nav id="main-nav" class="main-nav">
                            <ul class="menu">
                                <li class="menu-item @if(Route::currentRouteName() == 'public.home') current @endif"><a href="{{ route('public.home') }}">{{ trans('master.Home') }}</a></li>
                                <li class="menu-item @if(Route::currentRouteName() == 'public.about') current @endif"><a href="{{ route('public.about') }}">{{ trans('master.About_us') }}</a></li>
                                <li class="menu-item @if(Route::currentRouteName() == 'public.products') current @endif"><a href="{{ route('public.products') }}">{{ trans('master.products') }}</a></li>
                                <li class="menu-item @if(Route::currentRouteName() == 'public.contact') current @endif"><a href="{{ route('public.contact') }}">{{ trans('master.Contact_us') }}</a></li>
                            </ul>
                        </nav><!-- /#main-nav -->
                    </div>
                </div><!-- /#site-header-inner -->
            </header><!-- /#site-header -->
        </div><!-- /#site-header-wrap -->

        @yield('page_contents')

        <!-- Footer -->
        <footer id="footer">
            <div id="footer-widgets" class="container style-1">
                <div class="row">
                    <div class="col-md-4">
                        <div class="widget widget_text">
                            <h2 class="widget-title"><span>{{ trans('footer.about_us_title') }}</span></h2>
                            <div class="textwidget">
                                <img src="{{ url('assets/img/logo-light%402x.png') }}" width="200" height="30" alt="image" class="margin-top-5 margin-bottom-25" />
                                <p>{{ trans('footer.about_us_paragraph') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget widget_links">
                            <h2 class="widget-title"><span>{{ trans('footer.site_map') }}</span></h2>
                            <ul class="wprt-links clearfix col2">
                                <li class="style-2 @if(Route::currentRouteName() == 'public.home') current @endif"><a href="{{ route('public.home') }}">{{ trans('master.Home') }}</a></li>
                                <li class="style-2 @if(Route::currentRouteName() == 'public.about') current @endif"><a href="{{ route('public.about') }}">{{ trans('master.About_us') }}</a></li>
                                <li class="style-2 @if(Route::currentRouteName() == 'public.products') current @endif"><a href="{{ route('public.products') }}">{{ trans('master.products') }}</a></li>
                                <li class="style-2 @if(Route::currentRouteName() == 'public.contact') current @endif"><a href="{{ route('public.contact') }}">{{ trans('master.Contact_us') }}</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="widget widget_information">
                            <h2 class="widget-title"><span>{{ trans('footer.contact_us') }}</span></h2>
                            <ul class="style-2">
                                <li class="address clearfix">
                                    <span class="hl">{{ trans('footer.address') }}</span>
                                    <span class="text">{{ trans('contact.address') }}</span>
                                </li>
                                <li class="phone clearfix">
                                    <span class="hl">{{ trans('footer.phone') }}</span>
                                    <span class="text">{{ trans('contact.phone') }}</span>
                                </li>
                                <li class="email clearfix">
                                    <span class="hl">{{ trans('footer.email') }}</span>
                                    <span class="text">{{ trans('contact.email') }}</span>
                                </li>
                            </ul>
                        </div>

                        <div class="widget widget_spacer">
                            <div class="wprt-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10"></div>
                        </div>

                        <div class="widget widget_socials">
                            <div class="socials">
                                @foreach(\App\Social::all() as $social)
                                    <a target="_blank" href="{{ $social->link }}" title="{{ $social->name }}"><span class="fa {{ $social->provider->class }}" aria-hidden="true"></span></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Bottom -->
        <div id="bottom" class="clearfix style-1">
            <div id="bottom-bar-inner" class="wprt-container">
                <div class="bottom-bar-inner-wrap">

                    <div class="bottom-bar-content">
                        <div id="copyright">&copy; {{ trans('footer.copyright_all_right_reserved') }}</div>
                    </div>

                </div>
            </div>
        </div>

    </div><!-- /#page -->
</div><!-- /#wrapper -->

<a id="scroll-top"></a>

<!-- Javascript -->
<script type="text/javascript" src="{{ url('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/animsition.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/plugins.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/countTo.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/flexslider.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/cube.portfolio.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/main.js') }}"></script>

<!-- Revolution Slider -->
<script type="text/javascript" src="{{ url('includes/rev-slider/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{ url('assets/js/rev-slider.js') }}"></script>

<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript" src="{{ url('includes/rev-slider/js/extensions/revolution.extension.video.min.js') }}"></script>

</body>

</html>
