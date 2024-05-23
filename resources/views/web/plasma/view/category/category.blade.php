@extends(getTemplate().'.view.layout')
@section('title')
    {{ get_option('site_title','') }} - {{ $category->title ?? 'Categories' }}
@endsection
@section('meta_description',get_option('site_meta_description'))
@section('meta_keyword',get_option('site_meta_keyword'))
@section('page')
    <!-- start category title -->
    <section class="category-title py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 my-2">
                    <h1 class="heading-white">Technology</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end category title -->
    <!---------------------------------------------------------------------->
    <!-- start category search -->
    <section class="category-search py-4">
        <div class="container">
            <div class="row justify-content-between">
                <!-- start category search box -->
                <div class="col-md-6 col-xl-3">
                    <div class="category-search-box">
                        <form class="custom-form">
                            {{ csrf_field() }}
                            <div class="custom-form-item inside-button">
                                <input type="text" id="search" name="q" value="{{ !empty(request()->get('q')) ? request()->get('q') : '' }}" placeholder="Search in {{ !empty($category->title) ? $category->title : 'Search in all categories' }}">
                                <button type="submit" class="button-primary">
                                    <i class="iconly-brokenSearch"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end category search box -->
                <!---------------------------------------------------------------------->
                <!-- start category search select -->
                <div class="col-md-6 col-xl-3 mt-3 mt-md-0">
                    <div class="category-search-select">
                        <form class="custom-form">
                            <div class="custom-form-item custom-select2">
                                <select class="select">
                                    <option>Sert items</option>
                                    <option>Sert items</option>
                                    <option>Sert items</option>
                                    <option>Sert items</option>
                                    <option>Sert items</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end category search select -->
            </div>
        </div>
    </section>
    <!-- end category search -->
    <!---------------------------------------------------------------------->
    <!-- start category courses -->
    <section class="category-courses mt-5">
        <div class="container">
            <div class="row">
                <!-- start category courses filters -->
                <div class="col-xl-3">
                    <div class="row">
                        <!-- start category courses filters item -->
                        <div class="col-md-6 col-xl-12 mt-4">
                            <aside class="category-courses-filter">
                                <h4 class="heading-2">General filters</h4>
                                <form class="custom-form">
                                    <div class="custom-form-item switch">
                                        <p>Discount</p>
                                        <label>
                                            <input type="hidden" value="0" name="off">
                                            <input type="checkbox" name="off" value="1" @if($off == 1) checked @endif>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="custom-form-item switch">
                                        <p>Support</p>
                                        <label>
                                            <input type="hidden" value="0" name="support">
                                            <input type="checkbox" name="support" value="1" @if(!empty(request()->get('support')) && request()->get('support') == 1) checked @endif>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="custom-form-item switch">
                                        <p>Physical Package</p>
                                        <label>
                                            <input type="hidden" value="0" name="post-sell">
                                            <input name="post-sell" value="1" type="checkbox" @if(!empty(request()->get('post-sell')) && request()->get('post-sell') == 1) checked @endif>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="custom-form-item radio-btn mt-2">
                                        <input type="radio" name="course" value="all" id="radio-1" @if($course == 'all' || $course == '') checked @endif>
                                        <label for="radio-1">
                                            All
                                        </label>
                                        <input type="radio" name="course" value="multi" id="radio-2" @if($course == 'multi') checked @endif>
                                        <label for="radio-2">
                                            Courses
                                        </label>
                                        <input type="radio" name="course" value="webinar" id="radio-3" @if($course == 'webinar') checked @endif>
                                        <label for="radio-3">
                                            Live
                                        </label>
                                    </div>
                                    <div class="custom-form-item radio-btn mt-2">
                                        <input type="radio" name="pricing" value="all" id="radio-4" @if($pricing == 'all' || $pricing == '') checked @endif>
                                        <label for="radio-4">
                                            All
                                        </label>
                                        <input type="radio" name="pricing" value="price" id="radio-5" @if($pricing == 'price') checked @endif>
                                        <label for="radio-5">
                                            Paid
                                        </label>
                                        <input type="radio" name="pricing" value="free" id="radio-6" @if($pricing == 'free') checked @endif>
                                        <label for="radio-6">
                                            Free
                                        </label>
                                    </div>
                                </form>
                            </aside>
                        </div>
                        <!-- end category courses filters item -->
                        <!---------------------------------------------------------------------->
                        <!-- start category courses filters item -->
                        <div class="col-md-6 col-xl-12 mt-4">
                            <aside class="category-courses-filter">
                                <h4 class="heading-2">Level</h4>
                                <form class="custom-form">
                                    <div class="custom-form-item checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span></span>
                                            Amateur
                                        </label>
                                    </div>
                                    <div class="custom-form-item checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span></span>
                                            Joniour
                                        </label>
                                    </div>
                                    <div class="custom-form-item checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span></span>
                                            Bigginer
                                        </label>
                                    </div>
                                    <div class="custom-form-item checkbox">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span></span>
                                            Professional
                                        </label>
                                    </div>
                                    <div class="custom-form-item checkbox">
                                        <label>
                                            <input type="checkbox">
                                            <span></span>
                                            Top player
                                        </label>
                                    </div>
                                    <div class="custom-form-item checkbox">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span></span>
                                            World class
                                        </label>
                                    </div>
                                </form>
                            </aside>
                        </div>
                        <!-- end category courses filters item -->
                    </div>
                </div>
                <!-- end category courses filters -->
                <!---------------------------------------------------------------------->
                <!-- start category courses list -->
                <div class="col-xl-9">
                    <div class="row">
                        <?php $vipIds[] = 0; ?>
                        @if(!empty($vip) && !isset($order) && !isset($pricing) && !isset($course) && !isset($off) && !isset($post_sell) && !isset($q) && !isset($support) && !isset($filters))
                            @foreach($vip as $content)
                                @if(isset($content->content->id))
                                    @php $vipIds[] = $content->content->id; @endphp
                                    <div class="col-md-4 mt-4">
                                        @include(getTemplate().'.view.parts.product_box',['product'=>$content->content])
                                    </div>
                                @endif
                            @endforeach
                        @else
                            <?php $vipIds[] = 0; ?>
                        @endif
                        @foreach($contents as $content)
                            @if(!in_array($content['id'],$vipIds))
                                <div class="col-md-4 mt-4">
                                    @include(getTemplate().'.view.parts.product_box',['product'=>(object)$content,'meta'=>$content['metas']])
                                </div>
                            @endif
                        @endforeach
                        <!--
                        <div class="col-12 mt-5">
                            <div class="pagination">
                                <a href="#" class="pagination-prev">
                                    <i class="iconly-brokenArrow---Left-2"></i>
                                </a>
                                <a href="#" class="pagination-item">1</a>
                                <a href="#" class="pagination-item active">2</a>
                                <a href="#" class="pagination-item">3</a>
                                <a href="#" class="pagination-item">4</a>
                                <a href="#" class="pagination-next">
                                    <i class="iconly-brokenArrow---Right-2"></i>
                                </a>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
                <!-- end category courses list -->
            </div>
        </div>
    </section>
@stop
@section('script')
    <script>
        $(function () {
            pagination('.body-target', {{ !empty($content['discount']['off']) ? $content['discount']['off'] : 6 }}, 0);
            $('.pagi').pagination({
                items: {!! count($contents) !!},
                itemsOnPage: {{ !empty($content['discount']['off']) ? $content['discount']['off'] : 6 }},
                cssStyle: 'light-theme',
                prevText: 'Pre.',
                nextText: 'Next',
                onPageClick: function (pageNumber, event) {
                    pagination('.body-target',{{ !empty($content['discount']['off']) ? $content['discount']['off'] : 6 }}, pageNumber - 1);
                }
            });
        });
    </script>
    <script type="application/javascript" src="/assets/default/javascripts/category-page-custom.js"></script>
@endsection
