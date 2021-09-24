<section class="wprt-section works parallax">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                <h2 class="text-left text-white">{{ trans('products_section.title') }}</h2>
                <div class="wprt-lines custom-2">
                    <div class="line-1"></div>
                </div>
                <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
            </div>

            <div class="col-md-12">
                <div class="wprt-project arrow-style-2 has-arrows arrow60 arrow-dark" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                    <div id="projects" class="cbp">
                        @foreach(\App\Product::where('show_in_home', 1)->get() as $product)
                            <div class="cbp-item">
                                <div class="project-item">
                                    <div class="inner">
                                        <div class="grid">
                                            <figure class="effect-sadie" style="height: 300px">
                                                <img src="{{ url('assets_public/images/product/'. $product->image) }}" alt="image" />
                                                <figcaption>
                                                    <div>
                                                        <h2>
                                                            <a target="_blank" href="{{ route('public.product', $product->id) }}">{{ getFromJson($product->title , lang()) }}</a>
                                                        </h2>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>

                                        <a class="project-zoom cbp-lightbox" href="{{ url('assets_public/images/product/'. $product->image) }}" data-title="{{ getFromJson($product->title , lang()) }}">
                                            <i class="fa fa-arrows-alt"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><!-- /.col-md-12 -->

            <div class="col-md-12">
                <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
            </div>
        </div>
    </div>
</section>
