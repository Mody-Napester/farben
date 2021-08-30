<section class="news-section">
    <div data-aos="fade-up" class="auto-container">
        <!--Sec Title-->
        <div class="sec-title centered">
            <h2>{{ trans('home.Our_Latest_News') }}</h2>
        </div>

        <div class="row clearfix">
            @foreach($news as $news_single)
                <div class="news-block col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="image">
                            <a href="{{ route('public.news_single', $news_single->id) }}" style="height: 250px;overflow: hidden;display: block;"><img src="{{ url('assets_public/images/news/'. $news_single->image) }}" alt="" /></a>
                        </div>
                        <div class="lower-content">
                            <h5><a href="{{ route('public.news_single', $news_single->id) }}">{{ getFromJson($news_single->title , lang()) }}</a></h5>
                            <div class="text">{!! getFromJson($news_single->details , lang()) !!}</div>
                            <ul class="post-date">
                                <li>{{ $news_single->created_at }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</section>
