<section class="live-classes mt-5">
    <div class="container">
        <div class="row align-items-center">
            <!-- start live classes description -->
            <div class="col-xl-4">
                <div class="live-classes-description text-center text-xl-left">
                    <div>
                        <div class="live-classes-description-icon mx-auto mx-xl-0">
                                <span>
                                    <i class="iconly-brokenVideo"></i>
                                </span>
                        </div>
                        <h3 class="heading-white-1">Live classes</h3>
                        <p>
                            {{ get_option('plasma_live_class_text') }}
                        </p>
                        <a href="/category?type=live" class="button-secondray">Browse lives</a>
                    </div>
                </div>
            </div>
            <!-- end live classes description -->
            <!---------------------------------------------------------------------->
            <!-- start live classes slider -->
            <div class="col-xl-8">
                <div class="swiper-container grid-3 nicescroll">
                    <div class="swiper-wrapper">
                        @foreach($live_content as $popular)
                            @php $meta = arrayToList($popular->metas, 'option', 'value'); @endphp
                            <div class="swiper-slide p-3">
                                @include(getTemplate().'.view.parts.product_box',['product'=>$popular,'meta'=>$meta])
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- end live classes slider -->
        </div>
    </div>
</section>
