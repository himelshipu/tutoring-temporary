<section class="featured-courses mt-4">
    <div class="container">
        <div class="row">
            <!-- start featured courses heading -->
            <div class="col-12">
                <h3 class="heading-1">FEATURED COURSES</h3>
            </div>
            <!-- end featured courses heading -->
            <!---------------------------------------------------------------------->
            <!-- start featured courses slider -->
            <div class="col-lg-8 mt-4 p-0">
                <div class="swiper-container default">
                    <div class="swiper-wrapper">
                    @if(!empty($slider_container))
                        @foreach($slider_container as $slide)
                            @if(isset($slide->content->metas))
                                @php $slide_meta = arrayToList($slide->content->metas, 'option', 'value'); @endphp
                            @endif
                                <div class="swiper-slide p-3">
                                    <div class="featured-courses-box">
                                        <!-- start featured courses box text -->
                                        <div class="featured-courses-box-text">
                                            <h4 class="heading-2">{{ $slide->content->title ?? '-' }}</h4>
                                            <div class="rate">{!! plasmaContentStar($slide->content->support_rate) !!}</div>
                                            <p>{!! $slide->content->meta_description ?? '' !!}</p>
                                            <div class="featured-courses-box-footer">
                                                <div class="avatar">
                                                    <img src="{{ plasmaUserAvatar($slide->content->user_id)  }}" alt="{{ $slide->content->user->name ?? '' }}">
                                                    <div>
                                                        <h6>{{ $slide->content->user->name ?? '' }}</h6>
                                                        <span>Instructor</span>
                                                    </div>
                                                </div>
                                                <h5 class="price">
                                                    @if(isset($slide_meta['price']) && $slide_meta['price']>0)
                                                        <label>{{currencySign()}}{{ $slide_meta['price'] }}</label>
                                                    @else
                                                        <label>{{ trans('main.free_item') }}</label>
                                                    @endif
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- end featured courses box text -->
                                        <!---------------------------------------------------------------------->
                                        <!-- start featured courses box video -->
                                        <div class="featured-courses-box-video mt-4 mt-md-0">
                                            <div class="video">
                                                <img src="{{ !empty($slide_meta['cover']) ? $slide_meta['cover'] : '' }}" alt="{{ !empty($slide_meta['cover']) ? $slide_meta['cover'] : '' }}">
                                                <a href="/product/{{ $slide->content->id }}/{{ \Illuminate\Support\Str::slug($slide->content->title) ?? '' }}">
                                                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                              d="M15.0501 12.4669C14.3211 13.2529 12.3371 14.5829 11.3221 15.0099C11.1601 15.0779 10.7471 15.2219 10.6581 15.2239C10.4691 15.2299 10.2871 15.1239 10.1991 14.9539C10.1651 14.8879 10.0651 14.4569 10.0331 14.2649C9.93811 13.6809 9.88911 12.7739 9.89011 11.8619C9.88911 10.9049 9.94211 9.95489 10.0481 9.37689C10.0761 9.22089 10.1581 8.86189 10.1821 8.80389C10.2271 8.69589 10.3091 8.61089 10.4081 8.55789C10.4841 8.51689 10.5711 8.49489 10.6581 8.49789C10.7471 8.49989 11.1091 8.62689 11.2331 8.67589C12.2111 9.05589 14.2801 10.4339 15.0401 11.2439C15.1081 11.3169 15.2951 11.5129 15.3261 11.5529C15.3971 11.6429 15.4321 11.7519 15.4321 11.8619C15.4321 11.9639 15.4011 12.0679 15.3371 12.1549C15.3041 12.1999 15.1131 12.3999 15.0501 12.4669Z"
                                                              stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- end featured courses box video -->
                                    </div>
                                </div>
                        @endforeach
                    @endif
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- end featured courses slider -->
            <!---------------------------------------------------------------------->
            <!-- start featured courses ads -->
            <div class="col-lg-4 mt-4 py-3">
                <div class="featured-courses-ads">
                    <div class="row">
                        @if(isset($ads))
                            @foreach($ads as $index=>$ad)
                                @if($ad->position == 'main-slider-side')
                                    <div class="col-sm-6 col-lg-12 @if($index == 1) mt-4 mt-sm-0 mt-lg-4 @endif">
                                        <a href="{{ $ad->url }}">
                                            <img src="{{ $ad->image }}" class="{{ $ad->size }}">
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <!-- end featured courses ads -->
        </div>
    </div>
</section>
