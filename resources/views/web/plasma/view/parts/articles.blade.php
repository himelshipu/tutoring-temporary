<section class="articles mt-5">
    <div class="container">
        <div class="row">
            <!-- start articles heading -->
            <div class="col-12">
                <div class="heading-box">
                    <h3 class="heading-1">ARTICLES</h3>
                    <a href="/article/list">View more</a>
                </div>
            </div>
            <!-- end articles heading -->
        </div>
        <div class="row overflow">
            @foreach($article_post as $article)
                <div class="col-sm-6 col-lg-4 mt-4">
                    <div class="article-box">
                        <a href="/article/item/{{ $article->id }}/{!! \Illuminate\Support\Str::slug($article->title) ?? '' !!}">
                            <img src="{{ $article->image ?? '' }}" height="200" alt="{{ $article->title ?? '' }}">
                        </a>
                        <h4 class="heading-3">
                            <a href="/article/item/{{ $article->id }}/{!! \Illuminate\Support\Str::slug($article->title) ?? '' !!}">{{ $article->title ?? '' }}</a>
                        </h4>
                        <div class="article-box-avatar">
                            <img src="{!! plasmaUserAvatar($article->user_id) !!}" alt="">
                            <div>
                                <h6>{{ $article->user->name ?? '' }}</h6>
                                <span>Instructor</span>
                            </div>
                        </div>
                        <p>{!! strip_tags($article->pre_text) ?? '-' !!}</p>
                        <div class="article-box-footer">
                            <p>
                                <i class="iconly-brokenCalendar"></i>
                                {{ date('l d F Y',$article->created_at) }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
