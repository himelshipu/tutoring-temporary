<section class="best-channels mt-5">
    <div class="container">
        <div class="row">
            <!-- start best channels heading -->
            <div class="col-12">
                <h3 class="heading-1">Best channels</h3>
            </div>
            <!-- end best channels heading -->
            <!---------------------------------------------------------------------->
            <!-- start best channels slider -->
            <div class="swiper-container grid-4 mt-4">
                <div class="swiper-wrapper">
                    @if(isset($channels))
                        @foreach($channels['popular'] as $ur)
                            <div class="swiper-slide p-3">
                                <div class="best-channels-box">
                                    <a href="chanel/{{ $ur->username }}">
                                        <img height="130" src="{{ !empty($ur->avatar) ? $ur->avatar : '/assets/default/images/user.png' }}" alt="{{ !empty($ur->title) ? $ur->title : '' }}">
                                        <h4 class="heading-3">{{ !empty($ur->title) ? $ur->title : '' }}</h4>
                                        <p>{!! plasmaChannelContentCount($ur->id) !!} Courses | {!! plasmaChannelFollowerCount($ur->id) !!} follower</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <!-- end best channels slider -->
        </div>
    </div>
</section>
