@extends(getTemplate().'.view.layout')
@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
    - {{ $product->title }}
@endsection
@section('meta_description',$product->meta_description)
@section('meta_keyword',$product->meta_keyword)
@section('page')
    <!-- start course title -->
    <section class="course-title">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p>{{ $product->category->title ?? '' }}</p>
                    <h1 class="heading-white-1">{{ $product->title ?? '' }}</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- end course title -->
    <!---------------------------------------------------------------------->
    <!-- start course -->
    <section class="course">
        <div class="container">
            <div class="row">
                @if(!empty($product['discount']))
                    <div class="col-12 mt-4">
                        <div class="course-offer">
                        <div class="row align-items-end">
                            <div class="col-lg-6">
                                <div class="course-offer-off">
                                    <img src="assets/plasma/img/offer.png" alt="">
                                    <div class="ml-sm-5">
                                        <h2 class="heading-1">
                                            <span>>%{{ !empty($product->discount->off) ? $product->discount->off : 0 }}</span><br>
                                            {{ trans('main.discount') }}
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="course-offer-time justify-content-center justify-content-md-end">
                                    <div>
                                        <p>2 day left</p>
                                        <div class="timer">
                                            <span>11:55:27</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                @endif
                <!---------------------------------------------------------------------->
                <!-- start course video -->
                <div class="col-lg-8 mt-4">
                    <div class="course-video">
                        <video id="myDiv" class="video" width="100%" controls>
                            <source src="{{ !empty($partVideo) ? $partVideo : $meta['video'] }}" type="video/mp4"/>
                        </video>
                    </div>
                </div>
                <!-- end course video -->
                <!---------------------------------------------------------------------->
                <!-- start course silebar -->
                <div class="col-lg-4 mt-4">
                    <!-- start course price -->
                    <aside class="course-price">
                        <div class="price">
                            <h4>
                                @if(isset($meta['price']) && $product->price != 0)
                                    <span id="buy-price">{{ currencySign() }}{{ price($product->id,$product->category_id,$meta['price'])['price']  }}</span>
                                @else
                                    <span id="buy-price">{{ trans('main.free') }}</span>
                                @endif
                            </h4>
                        </div>
                        <form class="custom-form">
                            {{ csrf_field() }}
                            @if(isset($user) && $product->user_id == $user['id'])
                                <div class="custom-form-item mt-4">
                                    <a class="btn-primary btn-block" id="buy-btn" href="/user/content/edit/{{ $product->id }}">{{ trans('main.edit_course') }}</a>
                                    <a class="btn-primary btn-block" id="buy-btn" href="/user/content/part/list/{{ $product->id }}">{{ trans('main.add_video') }}</a>
                                </div>
                            @elseif(!$buy)
                                @if(!empty($product->price) and $product->price != 0)
                                    <div class="custom-form-item radio mt-4">
                                    <label>
                                        Purchase and download
                                        <input type="radio" name="course-radio" checked>
                                        <span></span>
                                    </label>
                                </div>
                                @endif
                                @if($product->post == 1 && userMeta($product->user_id,'trip_mode') == 0)
                                    @if(!empty($product->price) and $product->price != 0)
                                        <div class="custom-form-item radio mt-4">
                                    <label>
                                        Purchase a physical package
                                        <input type="radio" name="course-radio">
                                        <span></span>
                                    </label>
                                </div>
                                    @endif
                                @endif
                                @if(!empty($product->price) and $product->price != 0)
                                    <div class="custom-form-item mt-4">
                                        <a href="javascript:void(0);" class="button-primary btn-block" id="buy-btn" data-toggle="modal" data-target="#buyModal">{{ trans('main.pay') }}</a>
                                    </div>
                                @endif
                            @else
                                @if(!empty($product->price) and $product->price != 0)
                                    <a class="btn-primary btn-block" href="javascript:void(0);">{{ trans('main.purchased_item') }}</a>
                                @endif
                            @endif

                        </form>
                    </aside>
                    <!-- end course price -->
                    <!---------------------------------------------------------------------->
                    <!-- start course next live -->
                    @if($live)
                        @foreach($live as $l)
                            <div class="course-next-live mt-4">
                                <h4 class="heading-3">The next live session:</h4>
                                <p>
                                    {{ $l->title ?? '' }} <br>
                                    {!! $l->date !!}&nbsp;|&nbsp;{!! $l->time ?? '' !!} <br>
                                    On {{ $l->type ?? '' }}
                                </p>
                                <a href="{{ $l->join_url ?? '' }}">Get Information</a>
                                <span class="icon">
                                    <i class="iconly-brokenDiscovery"></i>
                                </span>
                            </div>
                        @endforeach
                    @endif
                    <!-- end course next live -->
                </div>
                <!-- end course silebar -->
                <!---------------------------------------------------------------------->
                <!-- start course tab -->
                <div class="col-lg-8 mt-4">
                    <div class="course-tab">
                        <!-- start course tab nav -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="information-tab" data-toggle="tab" href="#information" role="tab" aria-controls="information" aria-selected="true">Information</a>
                            </li>
                            @if(count($parts) > 0)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="parts-tab" data-toggle="tab" href="#parts" role="tab" aria-controls="parts" aria-selected="false">Parts</a>
                            </li>
                            @endif
                            @if(count($precourse) > 0)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="prerequistis-tab" data-toggle="tab" href="#prerequistis" role="tab" aria-controls="prerequistis" aria-selected="false">Prerequistis</a>
                            </li>
                            @endif
                            @if($product->support == 1)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="support-tab" data-toggle="tab" href="#support" role="tab" aria-controls="support" aria-selected="false">Support</a>
                            </li>
                            @endif
                            @if (!empty($product->quizzes) and !$product->quizzes->isEmpty())
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="quiz-tab" data-toggle="tab" href="#quiz" role="tab" aria-controls="quiz" aria-selected="false">Quiz</a>
                            </li>
                            @endif
                            @if (!empty($product->quizzes) and !$product->quizzes->isEmpty() and $hasCertificate)
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="certificates-tab" data-toggle="tab" href="#certificates" role="tab" aria-controls="certificates" aria-selected="false">Certificates</a>
                            </li>
                            @endif
                        </ul>
                        <!-- end course tab nav -->
                        <!---------------------------------------------------------------------->
                        <!-- start course tab content  -->
                        <div class="tab-content nicescroll">
                            <!-- start course tab content information -->
                            <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="information-tab">
                                {!! $product->content ?? '' !!}
                            </div>
                            <!-- end course tab content information -->
                            <!---------------------------------------------------------------------->
                            <!-- start course tab content parts -->
                            <div class="tab-pane fade" id="parts" role="tabpanel" aria-labelledby="parts-tab">
                                <div class="part">
                                    @foreach($parts as $part)
                                        <div class="part-item mt-3">
                                            <div class="row align-items-center">
                                                <div class="col-10 col-md-4">
                                                    <div class="part-item-name">
                                                        <p>
                                                            @if($buy or $part['free'] == 1)
                                                                <i class="iconly-brokenPlay"></i>
                                                            @else
                                                                <i class="iconly-brokenLock"></i>
                                                            @endif
                                                            {{ $part['title'] }}
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-md-3 order-1 order-md-0 mt-3 mt-md-0">
                                                    <div class="part-item-description">
                                                        <a href="javascript:void(0);" data-toggle="modal" href="#description-{{ $part['id'] }}">Description</a>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 order-1 order-md-0 mt-3 mt-md-0">
                                                    <div class="part-item-volume">
                                                        <p>{{ $part['size'] }} MB</p>
                                                    </div>
                                                </div>
                                                <div class="col-3 col-md-2 order-1 order-md-0 mt-3 mt-md-0">
                                                    <div class="part-item-time">
                                                        <p>{{ $part['duration'] }} Min</p>
                                                    </div>
                                                </div>
                                                <div class="col-2 col-md-1 order-0 order-md-1">
                                                    <div class="part-item-btn">
                                                        <a @if($product->content_type == 'captivate') href="/product/captivate/{{ $product->id }}/{{ $part['id'] }}" target="_blank" @else href="/product/part/{{ $product->id }}/{{ $part['id'] }}" @endif><i class="iconly-brokenArrow---Down-Square"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="description-{{ $part['id'] }}">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close"
                                                                data-dismiss="modal" aria-hidden="true">
                                                            &times;
                                                        </button>
                                                        <h4 class="modal-title">{{ trans('main.description') }}</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        {!! $part['description'] !!}
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-custom pull-left" data-dismiss="modal">{{ trans('main.close') }}</button>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->
                                    @endforeach
                                </div>
                            </div>
                            <!-- end course tab content parts -->
                            <!---------------------------------------------------------------------->
                            <!-- start course tab content prerequistis -->
                            <div class="tab-pane fade" id="prerequistis" role="tabpanel" aria-labelledby="prerequistis-tab">
                                <div class="prerequistis">
                                    <div class="prerequistis-item">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="prerequistis-item-name">
                                                    <p><i class="iconly-brokenVideo"></i> How to draw cartoon characters</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mt-3 mt-md-0">
                                                <div class="prerequistis-item-by">
                                                    <p>By <a href="#">Parviz Ahsan</a></p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mt-3 mt-md-0">
                                                <div class="prerequistis-item-btn">
                                                    <a href="#">View course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prerequistis-item mt-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="prerequistis-item-name">
                                                    <p><i class="iconly-brokenVideo"></i> How to draw cartoon characters</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mt-3 mt-md-0">
                                                <div class="prerequistis-item-by">
                                                    <p>By <a href="#">Parviz Ahsan</a></p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mt-3 mt-md-0">
                                                <div class="prerequistis-item-btn">
                                                    <a href="#">View course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="prerequistis-item mt-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="prerequistis-item-name">
                                                    <p><i class="iconly-brokenVideo"></i> How to draw cartoon characters</p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mt-3 mt-md-0">
                                                <div class="prerequistis-item-by">
                                                    <p>By <a href="#">Parviz Ahsan</a></p>
                                                </div>
                                            </div>
                                            <div class="col-6 col-md-3 mt-3 mt-md-0">
                                                <div class="prerequistis-item-btn">
                                                    <a href="#">View course</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end course tab content prerequistis -->
                            <!---------------------------------------------------------------------->
                            <!-- start course tab content support -->
                            <div class="tab-pane fade" id="support" role="tabpanel" aria-labelledby="support-tab"></div>
                            <!-- end course tab content support -->
                            <!---------------------------------------------------------------------->
                            <!-- start course tab content quiz -->
                            <div class="tab-pane fade" id="quiz" role="tabpanel" aria-labelledby="quiz-tab">
                                <div class="quiz-heading">
                                    <div class="row text-center">
                                        <div class="col-4 col-md-4">
                                            <h6>Quiz Name</h6>
                                        </div>
                                        <div class="col-4 col-md-1">
                                            <h6>Time</h6>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <h6>Question</h6>
                                        </div>
                                        <div class="col-4 col-md-2 mt-3 mt-md-0">
                                            <h6>Min grade</h6>
                                        </div>
                                        <div class="col-4 col-md-1 mt-3 mt-md-0">
                                            <h6>Grade</h6>
                                        </div>
                                        <div class="col-4 col-md-2"></div>
                                    </div>
                                </div>
                                <div class="quiz-item mt-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-4">
                                            <div class="quiz-item-name certificate">
                                                <i class="iconly-brokenPaper"></i>
                                                <div>
                                                    <p>
                                                        Placement name
                                                    </p>
                                                    <span>+ Certificate</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-1">
                                            <div class="quiz-item-text">
                                                <p>12 Min</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="quiz-item-text">
                                                <p>28</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2 mt-3 mt-md-0">
                                            <div class="quiz-item-text">
                                                <p>60</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-1 mt-3 mt-md-0">
                                            <div class="quiz-item-text">
                                                <p>56</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2 mt-3 mt-md-0">
                                            <span class="custom-badg success">Task</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="quiz-item mt-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-4">
                                            <div class="quiz-item-name">
                                                <p><i class="iconly-brokenPaper"></i> Placement name</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-1">
                                            <div class="quiz-item-text">
                                                <p>12 Min</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="quiz-item-text">
                                                <p>28</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2 mt-3 mt-md-0">
                                            <div class="quiz-item-text">
                                                <p>60</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-1 mt-3 mt-md-0">
                                            <div class="quiz-item-text">
                                                <p>56</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2 mt-3 mt-md-0">
                                            <span class="custom-badg danger">Failed</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="quiz-item mt-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-4">
                                            <div class="quiz-item-name">
                                                <p><i class="iconly-brokenPaper"></i> Placement name</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-1">
                                            <div class="quiz-item-text">
                                                <p>12 Min</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2">
                                            <div class="quiz-item-text">
                                                <p>28</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2 mt-3 mt-md-0">
                                            <div class="quiz-item-text">
                                                <p>60</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-1 mt-3 mt-md-0">
                                            <div class="quiz-item-text">
                                                <p>56</p>
                                            </div>
                                        </div>
                                        <div class="col-4 col-md-2 mt-3 mt-md-0">
                                            <span class="custom-badg success">Passes</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end course tab content quiz -->
                            <!---------------------------------------------------------------------->
                            <!-- start course tab content certificates -->
                            <div class="tab-pane fade" id="certificates" role="tabpanel" aria-labelledby="certificates-tab">
                                <div class="certificate">
                                    <div class="certificate-heading">
                                        <div class="row">
                                            <div class="col-4 col-md-5">
                                                <h6>Quiz Name</h6>
                                            </div>
                                            <div class="col-4 col-md-2 text-center">
                                                <h6>Pass Mark</h6>
                                            </div>
                                            <div class="col-4 col-md-2 text-center">
                                                <h6>Your Grade</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="certificate-item mt-3">
                                        <div class="row align-items-center">
                                            <div class="col-8 col-md-5">
                                                <div class="certificate-item-name">
                                                    <p><i class="iconly-brokenBag"></i> Placement name</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="certificate-item-mark">
                                                    <p>28</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="certificate-item-grade">
                                                    <p>28</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mt-3 mt-md-0">
                                                <div class="certificate-item-btn">
                                                    <a href="#">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="certificate-item mt-3">
                                        <div class="row align-items-center">
                                            <div class="col-8 col-md-5">
                                                <div class="certificate-item-name">
                                                    <p><i class="iconly-brokenBag"></i> Placement name</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="certificate-item-mark">
                                                    <p>28</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="certificate-item-grade">
                                                    <p>28</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mt-3 mt-md-0">
                                                <div class="certificate-item-btn">
                                                    <a href="#">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="certificate-item mt-3">
                                        <div class="row align-items-center">
                                            <div class="col-8 col-md-5">
                                                <div class="certificate-item-name">
                                                    <p><i class="iconly-brokenBag"></i> Placement name</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="certificate-item-mark">
                                                    <p>28</p>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <div class="certificate-item-grade">
                                                    <p>28</p>
                                                </div>
                                            </div>
                                            <div class="col-md-3 mt-3 mt-md-0">
                                                <div class="certificate-item-btn">
                                                    <a href="#">Download</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end course tab content certificates -->
                        </div>
                        <!-- end course tab content  -->
                    </div>
                </div>
                <!-- end course tab -->
                <!---------------------------------------------------------------------->
                <!-- start course information -->
                <div class="col-lg-4 mt-4">
                    <aside class="course-info">
                        <h3 class="heading-3">Course Information</h3>
                        <dl>
                            <dt>
                                <i class="iconly-brokenVideo"></i> Type
                            </dt>
                            <dd>{{ $product->type ?? '' }}</dd>
                        </dl>
                        <dl>
                            <dt>
                                <i class="iconly-brokenCalendar"></i> Publish date
                            </dt>
                            <dd>{{ date('Y F d',$product->created_at) }}</dd>
                        </dl>
                        <dl>
                            <dt>
                                <i class="iconly-brokenTime-Square"></i> Duration
                            </dt>
                            <dd>{{ contentDuration($product->id) }}</dd>
                        </dl>
                        <dl>
                            <dt>
                                <i class="iconly-brokenPaper-Download"></i> Size
                            </dt>
                            <dd>{{ $MB }} MB</dd>
                        </dl>
                        <dl>
                            <dt>
                                <i class="iconly-brokenUser1"></i> Support
                            </dt>
                            <dd>
                                @if($product->support == 1)
                                    {{ 'Vendor supports this course' }}
                                @else
                                    {{ 'Vendor doesnt support this course' }}
                                @endif
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <i class="iconly-brokenDocument"></i> Quizzes
                            </dt>
                            <dd>
                                @if(isset($product->quizzes))
                                    {{ count($product->quizzes) }}
                                @else
                                    0
                                @endif
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <i class="iconly-brokenDiscount"></i> Certificate
                            </dt>
                            <dd>
                                @if($hasCertificate)
                                    Yes
                                @else
                                    No
                                @endif
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                                <i class="iconly-brokenTicket-Star"></i> Rating
                            </dt>
                            <dd>
                                <div class="rate">
                                    {!! plasmaContentStar($product->support_rate) !!}
                                </div>
                            </dd>
                        </dl>
                        <div class="course-info-btns">
                            <a href="#">
                                <i class="iconly-brokenShow"></i>
                                <p>{{ $product->view ?? 0 }} Views</p>
                            </a>
                            <a href="#">
                                <i class="iconly-brokenSend"></i>
                                <p>Share</p>
                            </a>
                            @if(count($product->favorite) > 0)
                                <a href="/product/unfav/{{ $product->id }}">
                                    <i class="iconly-brokenHeart" style="color: gold;"></i>
                                    <p>Favorite</p>
                                </a>
                            @else
                                <a href="/product/fav/{{ $product->id }}">
                                    <i class="iconly-brokenHeart"></i>
                                    <p>Favorite</p>
                                </a>
                            @endif
                        </div>
                    </aside>
                </div>
                <!-- end course information -->
                <!---------------------------------------------------------------------->
                <!-- start course comment -->
                <div class="col-lg-8 mt-5 order-1 order-lg-0" id="course-comments-wrapper">
                    <!-- start course comment heading -->
                    <div class="course-comment-heading">
                        <h3 class="heading-1">Comments</h3>
                    </div>
                    <!-- end course comment heading -->
                    <!---------------------------------------------------------------------->
                    <!-- start course comment list -->
                    <div class="course-comments mt-4 comment" id="course-comments">
                        <div class="row justify-content-center">
                            <!-- start course comment item -->
                            <div class="col-12">
                                <div class="comment-item">
                                    <div class="comment-item-header">
                                        <div>
                                            <img src="img/avatar.png" alt="">
                                            <div>
                                                <div>
                                                    <h5 class="heading-3">Bobby Hekmat</h5>
                                                    <span class="comment-item-header-badg instructor">Instructor</span>
                                                </div>
                                                <p>20 Aug 2020 | 14:05 AM</p>
                                            </div>
                                        </div>
                                        <a href="#">Replay</a>
                                    </div>
                                    <div class="comment-item-comment mt-4">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt fuga eius, at rem laborum quisquam minima aspernatur, blanditiis reprehenderit qui quaerat officiis voluptas expedita quas nam doloremque distinctio, repellat mollitia?
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt fuga eius, at rem laborum quisquam minima aspernatur, blanditiis reprehenderit qui quaerat officiis voluptas expedita quas nam doloremque distinctio, repellat mollitia?
                                        </p>
                                    </div>
                                    <!-- start child comment -->
                                    <div class="row justify-content-end">
                                        <div class="col-md-10 px-4 px-md-0">
                                            <div class="comment-item child">
                                                <div class="comment-item-header">
                                                    <div>
                                                        <img src="img/avatar.png" alt="">
                                                        <div>
                                                            <div>
                                                                <h5 class="heading-3">Bobby Hekmat</h5>
                                                                <span class="comment-item-header-badg student">Student</span>
                                                            </div>
                                                            <p>20 Aug 2020 | 14:05 AM</p>
                                                        </div>
                                                    </div>
                                                    <a href="#">Replay</a>
                                                </div>
                                                <div class="comment-item-comment">
                                                    <p>
                                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt fuga eius, at rem laborum quisquam minima aspernatur, blanditiis reprehenderit qui quaerat officiis voluptas expedita quas nam doloremque distinctio, repellat mollitia?
                                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt fuga eius, at rem laborum quisquam minima
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end child comment -->
                                </div>
                            </div>
                            <!-- end course comment item -->
                            <!---------------------------------------------------------------------->
                            <!-- start course comment item -->
                            <div class="col-12">
                                <div class="comment-item">
                                    <div class="comment-item-header">
                                        <div>
                                            <img src="img/avatar.png" alt="">
                                            <div>
                                                <div>
                                                    <h5 class="heading-3">Bobby Hekmat</h5>
                                                    <span class="comment-item-header-badg instructor">Instructor</span>
                                                </div>
                                                <p>20 Aug 2020 | 14:05 AM</p>
                                            </div>
                                        </div>
                                        <a href="#">Replay</a>
                                    </div>
                                    <div class="comment-item-comment">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt fuga eius, at rem laborum quisquam minima aspernatur, blanditiis reprehenderit qui quaerat officiis voluptas expedita quas nam doloremque distinctio, repellat mollitia?
                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deserunt fuga eius, at rem laborum quisquam minima aspernatur, blanditiis reprehenderit qui quaerat officiis voluptas expedita quas nam doloremque distinctio, repellat mollitia?
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end course comment item -->
                            <!---------------------------------------------------------------------->
                            <!-- start course load more comment button -->
                            <div class="col-12 py-3">
                                <div class="course-comment-load-more">
                                    <a href="#">Load more comments</a>
                                </div>
                            </div>
                            <!-- end course load more comment button -->
                            <!---------------------------------------------------------------------->
                            <!-- start course comment form -->
                            <div class="col-12">
                                <div class="course-comment-form comment-form">
                                    <form class="custom-form">
                                        <div class="custom-form-item">
                                            <label for="comment">Leave your commetn</label>
                                            <textarea id="comment" rows="7"></textarea>
                                        </div>
                                        <div class="custom-form-item">
                                            <p class="description">Your comment will be displayed after approved by admin.</p>
                                        </div>
                                        <div class="custom-form-item">
                                            <button class="button-primary">Post</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- end course comment form -->
                        </div>
                    </div>
                    <!-- end course comment list -->
                </div>
                <!-- end course comment -->
                <!---------------------------------------------------------------------->
                <!-- start course instructor info -->
                <div class="col-lg-4">
                    @php $userMetas = arrayToList($product->user->usermetas, 'option', 'value'); @endphp
                    <div class="course-instructor-info">
                        <img src="{{ !empty($userMetas['avatar']) ? $userMetas['avatar'] : get_option('default_user_avatar','') }}" alt="{{ $product->user->username ?? '' }}">
                        <h5 class="heading-3">{{ $product->user->name }}</h5>
                        <p>Instructor</p>
                        <div class="course-instructor-info-btns">
                            @foreach($rates as $rate)
                                @if (!empty($rate['image']))
                                    <a href="javascript:void(0);" class="custom-tooltip">
                                        <img src="{{ $rate['image'] }}" alt="{{ $rate['description'] }}">
                                        <span class="custom-tooltip-text top">{{ $rate['description'] }}</span>
                                    </a>
                                @endif
                            @endforeach
                        </div>
                        <div class="course-instructor-info-para">
                            <p>{{ $userMetas['short_biography'] }}</p>
                        </div>
                    </div>
                </div>
                <!-- end course instructor info -->
            </div>
        </div>
    </section>
    <!-- end course -->
    <!---------------------------------------------------------------------->
    <!-- start similar courses -->
    <section class="similar-courses mt-5">
        <div class="container">
            <div class="row">
                <!-- start similar courses courses heading box -->
                <div class="col-12">
                    <h3 class="heading-1">Similar courses</h3>
                </div>
                @foreach($related as $rel)
                    @php $rmeta = arrayToList($rel->metas, 'option', 'value'); @endphp
                        <div class="col-sm-6 col-lg-3 mt-4">
                            @include(getTemplate().'.view.parts.product_box',['product'=>$rel,'meta'=>$rmeta])
                        </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- end similar courses -->
    <!---------------------------------------------------------------------->
    <!-- start instructor courses -->
    <section class="instructor-courses mt-5">
        <div class="container">
            <div class="row">
                <!-- start instructor courses courses heading box -->
                <div class="col-12">
                    <h3 class="heading-1">Instructor courses</h3>
                </div>
                @foreach(plasmaInstructorCurses($product->user_id) as $item)
                    <div class="col-sm-6 col-lg-3 mt-4">
                        @include(getTemplate().'.view.parts.product_box',['product'=>$item['product'],'meta'=>$item['meta']])
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end instructor courses -->

    <div id="buyModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">{{ trans('main.purchase') }}</h4>
                </div>
                <div class="modal-body">
                    <p>{{ trans('main.select_payment_method') }}</p>
                    <p>
                        <input type="hidden" id="buy_method" value="download">
                    <div class="radio">
                        <input type="radio" class="buy-mode" id="mode-1" value="credit" name="buyMode">
                        &nbsp;
                        <label class="radio-label" for="mode-1">{{ trans('main.account_charge') }}&nbsp;<b id="credit-remain-modal">({{ currencySign() }}{{ $user['credit'] }})</b></label>
                    </div>
                    @if(get_option('gateway_paypal') == 1)
                        <div class="radio">
                            <input type="radio" class="buy-mode" id="mode-2" value="paypal" name="buyMode">
                            &nbsp;
                            <label class="radio-label" for="mode-2"> Paypal </label>
                        </div>
                    @endif
                    @if(get_option('gateway_paystack',0) == 1)
                        <div class="radio">
                            <input type="radio" class="buy-mode" id="mode-3" value="paystack" name="buyMode">
                            &nbsp;
                            <label class="radio-label" for="mode-3"> Paystack </label>
                        </div>
                    @endif
                    @if(get_option('gateway_paytm') == 1)
                        <div class="radio">
                            <input type="radio" class="buy-mode" id="mode-4" value="paytm" name="buyMode">
                            &nbsp;
                            <label class="radio-label" for="mode-4"> Paytm </label>
                        </div>
                    @endif
                    @if(get_option('gateway_payu') == 1)
                        <div class="radio">
                            <input type="radio" class="buy-mode" id="mode-5" value="payu" name="buyMode">
                            &nbsp;
                            <label class="radio-label" for="mode-5"> Payu </label>
                        </div>
                    @endif
                    @if(get_option('gateway_razorpay') == 1)
                        <div class="radio">
                            <input type="radio" class="buy-mode" id="mode-6" value="razorpay" name="buyMode">
                            &nbsp;
                            <label class="radio-label" for="mode-6"> Razorpay </label>
                        </div>
                    @endif
                    @if(get_option('gateway_cinetpay') == 1)
                        <div class="radio">
                            <input type="radio" class="buy-mode" id="mode-6" value="cinetpay" name="buyMode">
                            &nbsp;
                            <label class="radio-label" for="mode-6"> Cinetpay </label>
                        </div>
                    @endif
                    @if(get_option('gateway_stripe') == 1)
                        <div class="radio">
                            <input type="radio" class="buy-mode" id="mode-7" value="stripe" name="buyMode">
                            &nbsp;
                            <label class="radio-label" for="mode-7"> Stripe </label>
                        </div>
                    @endif
                    <div class="h-10"></div>
                    <div class="table-responsive table-base-price">
                        <table class="table table-hover table-factor-modal">
                            <thead>
                            <tr>
                                <th class="text-center">{{ trans('main.amount') }}</th>
                                <th class="text-center">{{ trans('main.discount') }}</th>
                                <th class="text-center">{{ trans('main.tax') }}</th>
                                <th class="text-center">{{ trans('main.total_amount') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">{{ $meta['price']}}</td>
                                @if(isset($meta['price']) && $meta['price'] > 0 && price($product->id, $product->category->id, $meta['price']) > 0)
                                    <td class="text-center">{{ round((($meta['price'] - price($product->id, $product->category->id, $meta['price'])['price']) * 100) / $meta['price']) }}</td>
                                @endif
                                <td class="text-center">0</td>
                                <td class="text-center">{{ price($product->id,$product->category->id,$meta['price'])['price'] }}</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-responsive table-post-price table-post-price-s">
                        <table class="table table-hover table-factor-modal" style="margin-bottom: 0;padding-bottom: 0;">
                            <thead>
                            <tr>
                                <th class="text-center">{{ trans('main.amount') }}</th>
                                <th class="text-center">{{ trans('main.discount') }}</th>
                                <th class="text-center">{{ trans('main.tax') }}</th>
                                <th class="text-center">{{ trans('main.total_amount') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-center">{{ $meta['post_price'] }}</td>
                                @if(isset($meta['post_price']) && $meta['post_price']>0)
                                    <td class="text-center">{{ round((($meta['post_price'] - price($product->id,$product->category->id,$meta['post_price'])['price']) * 100) / $meta['post_price']) }}</td>
                                    <td class="text-center">۰</td>
                                    <td class="text-center">۰</td>
                                    <td class="text-center">{{ price($product->id,$product->category->id,$meta['post_price'])['price'] }}</td>
                                @endif
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-body">
                    <div id="postAddressText">

                        @if(isset($user))
                            <p><b>{{ trans('main.address') }}</b>{!!  userAddress($user['id']) !!}</p>
                        @endif
                    </div>
                    <div id="postAddress">
                        <form method="post" class="form-horizontal" action="/user/profile/meta/store">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label col-md-1 tab-con">{{ trans('main.province') }}</label>
                                <div class="col-md-5 tab-con">
                                    <input type="text" class="form-control" name="state" value="{!! $userMeta['state'] ?? '' !!}"/>
                                </div>
                                <label class="control-label col-md-1 tab-con">{{ trans('main.city') }}</label>
                                <div class="col-md-5 tab-con">
                                    <input type="text" name="city" value="{{ $userMeta['city'] ?? '' }}" class="form-control">
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-1 tab-con">{{ trans('main.address') }}</label>
                                <div class="col-md-5 tab-con">
                                    <textarea name="address" rows="4" class="form-control">{{ $userMeta['address'] ?? '' }}</textarea>
                                </div>
                                <label class="control-label col-md-1 tab-con">{{ trans('main.zip_code') }}</label>
                                <div class="col-md-5 tab-con">
                                    <input type="text" name="postalcode" value="{{ $userMeta['postalcode'] ?? '' }}" class="form-control text-center">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="submit" name="submit" class="btn btn-orange pull-left" value="Save">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="giftCard">
                        <form method="post" class="form-horizontal">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-9 tab-con">
                                    <input type="text" dir="ltr" class="form-control text-center" placeholder="Discount or Gift code" name="gift-card" id="gift-card">
                                </div>
                                <div class="col-md-3 tab-con">
                                    <button type="button" name="gift-card-check" id="gift-card-check" class="btn btn-custom pull-left">{{ trans('main.validate') }}</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center" id="gift-card-result"></div>
                            </div>
                        </form>
                    </div>
                    @if(isset($user))
                        <div id="modal-user-category">
                            <span>{{ trans('main.you_are_in') }}</span>
                            <b>{{ $user['category']['title'] }}</b>
                            <span>{{ trans('main.group_and') }}</span>
                            <b>{{ $user['category']['off'] }}٪</b>
                            <span> {{ trans('main.extra_discount') }}</span>
                        </div>
                    @endif
                </div>
                @if(checkSubscribeSell($product))
                    <div class="modal-body">
                        <h6 style="font-weight:bold;">You Can Subscribe..... Select Items</h6>
                        <div class="h-10"></div>
                        @if($product->price_3 > 0)<a href="/product/subscribe/{!! $product->id !!}/3/credit" p-id="{!! $product->id !!}" s-type="3" class="btn-subscribe btn btn-custom">3 month : {!! currencySign() !!}{!! $product->price_3 !!}</a>@endif
                        @if($product->price_6 > 0)<a href="/product/subscribe/{!! $product->id !!}/6/credit" p-id="{!! $product->id !!}" s-type="6" class="btn-subscribe btn btn-custom">6 month : {!! currencySign() !!}{!! $product->price_6 !!}</a>@endif
                        @if($product->price_9 > 0)<a href="/product/subscribe/{!! $product->id !!}/9/credit" p-id="{!! $product->id !!}" s-type="9" class="btn-subscribe btn btn-custom">9 month : {!! currencySign() !!}{!! $product->price_9 !!}</a>@endif
                        @if($product->price_12 > 0)<a href="/product/subscribe/{!! $product->id !!}/12/credit" p-id="{!! $product->id !!}" s-type="12" class="btn-subscribe btn btn-custom">12 month : {!! currencySign() !!}{!! $product->price_12 !!}</a>@endif
                    </div>
                @endif
                <div class="modal-footer">
                    <button type="button" class="btn btn-custom pull-left" data-dismiss="modal">{{ trans('main.cancel') }}</button>
                    <a href="javascript:void(0);" class="btn btn-custom pull-left" id="buyBtn">{{ trans('main.purchase') }}</a>
                    <a href="javascript:void(0);" class="btn btn-custom pull-right" id="btn-address" onclick="$('#postAddress').slideToggle(200);">{{ trans('main.change_address') }}</a>
                    <a href="javascript:void(0);" class="btn btn-custom pull-right" onclick="$('#giftCard').slideToggle(200);">{{ trans('main.have_giftcard') }}</a>
                </div>
            </div>

        </div>
    </div>
@stop
@section('script')
    <script type="application/javascript" src="/assets/default/view/fluid-player-master/fluidplayer.min.js"></script>
    <script>
        $(function () {
            fluidPlayer("myDiv", {
                layoutControls: {
                    posterImage: '{!! !empty($meta['cover']) ? $meta['cover'] : '' !!}',
                    logo: {
                        imageUrl: '{!! get_option('video_watermark','') !!}', // Default null
                        position: 'top right', // Default 'top left'
                        clickUrl: '{!! url('/') !!}', // Default null
                        opacity: 0.9, // Default 1
                        imageMargin: '10px', // Default '2px'
                        hideWithControls: true, // Default false
                        showOverAds: 'true' // Default false
                    }
                },
                @if(get_option('site_videoads',0) == 1)
                vastOptions: {
                    vastTimeout: {!! get_option('site_videoads_time',5) * 1000 !!},
                    adList: [
                        {
                            roll: '{!! get_option('site_videoads_roll_type','preRoll') !!}',
                            vastTag: '{!! get_option('site_videoads_source') !!}',
                            adText: '{!! get_option('site_videoads_title') !!}',
                        }
                    ]
                }
                @endif
            });
        });
    </script>
    <script>
        $('.raty').raty({
            starType: 'i', score: {{ ($product->rates->avg('rate')) ? $product->rates->avg('rate') : 0  }}, click: function (rate) {
                window.location = window.location.href + '/rate/' + rate;
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.answer-btn').click(function () {
                var parent = $(this).attr('answer-id');
                var title = $(this).attr('answer-title');
                $('input[name="parent"]').val(parent);
                scrollToAnchor('.back-green');
                $('textarea').attr('placeholder', ' Replied to ' + title);
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $('.download-part').click(function (e) {
                e.preventDefault();
                window.location = $(this).attr('data-href');
            })
        });
    </script>
    <script>
        $(document).ready(function () {
            $('input[type=radio][name=buy_mode]').change(function () {
                $('#buy-price').html($(this).val() + ' {!! currencySign() !!} ');
                $('#buy_method').val($(this).attr('data-mode'));
                $('input[type=radio][name=buyMode]').removeAttr('selected');
                $('#buyBtn').attr('href', '#');
                if ($(this).attr('data-mode') == 'post') {
                    $('.table-base-price').hide();
                    $('.table-post-price').show();
                } else {
                    $('.table-base-price').show();
                    $('.table-post-price').hide();
                }
            })
        });
    </script>
    <script>
        $(document).ready(function () {
            $('input[type=radio][name=buyMode]').change(function () {
                var buyLink = '/bank/' + $(this).val() + '/pay/{{ $product->id }}/' + $('#buy_method').val();
                $('#buyBtn').attr('href', buyLink);
            })
        });
    </script>
    <script>
        $('.userraty').raty({
            starType: 'i',
            score: function () {
                return $(this).attr('data-score');
            },
            click: function (rate) {
                var id = $(this).attr('data-id');
                $.get('/product/support/rate/' + id + '/' + rate, function (data) {
                    if (data == 0) {
                        $.notify({
                            message: 'Sorry rating not submited.'
                        }, {
                            type: 'danger',
                            allow_dismiss: false,
                            z_index: '99999999',
                            placement: {
                                from: "bottom",
                                align: "right"
                            },
                            position: 'fixed'
                        });
                    }
                    if (data == 1) {
                        $.notify({
                            message: 'Rating Submited.'
                        }, {
                            type: 'danger',
                            allow_dismiss: false,
                            z_index: '99999999',
                            placement: {
                                from: "bottom",
                                align: "right"
                            },
                            position: 'fixed'
                        });
                    }
                })
            }
        });
    </script>
    <script>
        $(document).ready(function () {
            var size_li = $(".support-list li").size();
            var x = 5;
            $('.support-list li:lt(' + x + ')').show();
            $('#loadMore').click(function () {
                x = (x + 5 <= size_li) ? x + 5 : size_li;
                $('.support-list li:lt(' + x + ')').show();
                $('#showLess').show();
                if (x == size_li) {
                    $('#loadMore').hide();
                }
            });
            $('#showLess').click(function () {
                x = (x - 5 < 0) ? 3 : x - 5;
                $('.support-list li').not(':lt(' + x + ')').hide();
                $('#loadMore').show();
                $('#showLess').show();
                if (x == 3) {
                    $('#showLess').hide();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            var size_li = $(".support-list1 li").size();
            var x = 5;
            $('.support-list1 li:lt(' + x + ')').show();
            $('#loadMore1').click(function () {
                x = (x + 5 <= size_li) ? x + 5 : size_li;
                $('.support-list1 li:lt(' + x + ')').show();
                $('#showLess1').show();
                if (x == size_li) {
                    $('#loadMore1').hide();
                }
            });
            $('#showLess1').click(function () {
                x = (x - 5 < 0) ? 3 : x - 5;
                $('.support-list1 li').not(':lt(' + x + ')').hide();
                $('#loadMore1').show();
                $('#showLess1').show();
                if (x == 3) {
                    $('#showLess1').hide();
                }
            });
        });
    </script>
    <script>
        $('#buy-btn').click(function () {
            if ($('input[name="buy_mode"]:checked').attr('data-mode') == 'download') {
                $('#btn-address').hide();
                $('#postAddress').slideUp();
                $('#postAddressText').slideUp();

            } else {
                $('#btn-address').show();
                $('#postAddressText').show();
            }
        })
    </script>
    <script>
        $('#gift-card-check').click(function () {
            var code = $('#gift-card').val();
            if (code == '') {
                $.notify({
                    message: 'Please fillout all inputs.'
                }, {
                    type: 'danger',
                    allow_dismiss: false,
                    z_index: '99999999',
                    placement: {
                        from: "bottom",
                        align: "right"
                    },
                    position: 'fixed'
                });
            } else {
                $('#gift-card-result').html('<div class="loader"></div> Please wait...');
                $.get('/gift/' + code, function (data) {
                    if (data == 0) {
                        $('#gift-card-result').html('<b class="red-r">Sorry code is invalid.</b>');
                    } else {
                        if (data.type == 'gift')
                            $('#gift-card-result').html('<b class="green-s"> Congratulations! {!! currencySign() !!}' + data.off + ' Discount applied successfully!</b>');
                        if (data.type == 'off')
                            $('#gift-card-result').html('<b class="green-s"> Congratulations! %' + data.off + ' Discount applied successfully!</b>');
                    }
                })
            }
        });
    </script>
    <script>
        $('.buy-mode').on('change', function () {
            if ($(this).is(':checked')) {
                let buyMode = $(this).val();
                $('.btn-subscribe').each(function () {
                    let url = '/product/subscribe/' + $(this).attr('p-id') + '/' + $(this).attr('s-type') + '/' + buyMode;
                    $(this).attr('href', url);
                });
            }
        });
    </script>
    @if($buy and isset($user))
        <script>
            usage({!! $product->id !!},{!! $user['id'] !!});
        </script>
    @endif
    @if($product->discount != null || $product->category->discount != null)
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script>
            var Countdown = {
                $el: $('.countdown'),
                countdown_interval: null,
                total_seconds: 18000,
                init: function () {
                    this.$ = {
                        hours: this.$el.find('.bloc-time.hours .figure'),
                        minutes: this.$el.find('.bloc-time.min .figure'),
                        seconds: this.$el.find('.bloc-time.sec .figure')
                    };
                    this.values = {
                        hours: this.$.hours.parent().attr('data-init-value'),
                        minutes: this.$.minutes.parent().attr('data-init-value'),
                        seconds: this.$.seconds.parent().attr('data-init-value'),
                    };
                    this.total_seconds = this.values.hours * 60 * 60 + (this.values.minutes * 60) + this.values.seconds;
                    this.count();
                },
                count: function () {
                    var that = this,
                        $hour_1 = this.$.hours.eq(0),
                        $hour_2 = this.$.hours.eq(1),
                        $min_1 = this.$.minutes.eq(0),
                        $min_2 = this.$.minutes.eq(1),
                        $sec_1 = this.$.seconds.eq(0),
                        $sec_2 = this.$.seconds.eq(1);
                    this.countdown_interval = setInterval(function () {
                        if (that.total_seconds > 0) {
                            --that.values.seconds;
                            if (that.values.minutes >= 0 && that.values.seconds < 0) {
                                that.values.seconds = 59;
                                --that.values.minutes;
                            }
                            if (that.values.hours >= 0 && that.values.minutes < 0) {
                                that.values.minutes = 59;
                                --that.values.hours;
                            }
                            that.checkHour(that.values.hours, $hour_1, $hour_2);
                            that.checkHour(that.values.minutes, $min_1, $min_2);
                            that.checkHour(that.values.seconds, $sec_1, $sec_2);
                            --that.total_seconds;
                        } else {
                            clearInterval(that.countdown_interval);
                        }
                    }, 1000);
                },
                animateFigure: function ($el, value) {
                    var that = this,
                        $top = $el.find('.top'),
                        $bottom = $el.find('.bottom'),
                        $back_top = $el.find('.top-back'),
                        $back_bottom = $el.find('.bottom-back');
                    $back_top.find('span').html(value);
                    $back_bottom.find('span').html(value);
                    TweenMax.to($top, 0.8, {
                        rotationX: '-180deg',
                        transformPerspective: 300,
                        ease: Quart.easeOut,
                        onComplete: function () {
                            $top.html(value);
                            $bottom.html(value);
                            TweenMax.set($top, {rotationX: 0});
                        }
                    });
                    TweenMax.to($back_top, 0.8, {
                        rotationX: 0,
                        transformPerspective: 300,
                        ease: Quart.easeOut,
                        clearProps: 'all'
                    });
                },
                checkHour: function (value, $el_1, $el_2) {
                    var val_1 = value.toString().charAt(0),
                        val_2 = value.toString().charAt(1),
                        fig_1_value = $el_1.find('.top').html(),
                        fig_2_value = $el_2.find('.top').html();

                    if (value >= 10) {
                        if (fig_1_value !== val_1) this.animateFigure($el_1, val_1);
                        if (fig_2_value !== val_2) this.animateFigure($el_2, val_2);
                    } else {
                        if (fig_1_value !== '0') this.animateFigure($el_1, 0);
                        if (fig_2_value !== val_1) this.animateFigure($el_2, val_1);
                    }
                }
            };
            Countdown.init();
        </script>
    @endif
@endsection
