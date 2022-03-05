@extends('@public._layouts.master')

@section('page_title') {{ trans('home.Home') }} @endsection

@section('body_class') front-page no-sidebar site-layout-full-width header-style-1 menu-has-search menu-has-cart header-sticky @endsection

@section('page_contents')

    <!-- Slider -->
    @include('@public._partials.slider')

    <!-- Main Content -->
    <div id="main-content" class="site-main clearfix">
        <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
                <div id="inner-content" class="inner-content-wrap">
                    <div class="page-content">

                    <!-- Promotion -->
                    @include('@public._partials.call_to_action')

                    <!-- Our -->
                    @include('@public._partials.ours')

                    <!-- WHY CHOOSE US -->
                    {{-- @include('@public._partials.why') --}}

                    <!-- WORKS -->
                    @include('@public._partials.products')

                    <!-- TESTIMONIALS -->
                    @include('@public._partials.testimonials')

                    <!-- FACTS -->
                    @include('@public._partials.facts')

                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>
    </div>

@endsection
