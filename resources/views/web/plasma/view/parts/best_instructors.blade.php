<section class="best-instructors mt-5">
    <div class="container">
        <div class="row">
            <!-- start best instructors heading -->
            <div class="col-12">
                <h3 class="heading-1">Best instructors</h3>
            </div>
            <!-- end best instructors heading -->
            <!---------------------------------------------------------------------->
            <!-- start best instructors slider -->
            <div class="col-12">
                <div class="swiper-container grid-6 mt-4">
                    <div class="swiper-wrapper">
                        @if(isset($user_rate))
                            @foreach($user_rate as $ur)
                                    <div class="swiper-slide px-3 py-4">
                                        <div class="best-instructors-item">
                                            <a href="/profile/{{ $ur->id }}">
                                                <div>
                                                    <div class="best-instructors-item-overlay">
                                                <span>
                                                    <i class="iconly-brokenProfile"></i>
                                                </span>
                                                    </div>
                                                    <img src="{!! plasmaUserAvatar($ur->id) !!}" alt="{{ $ur->name ?? '' }}">
                                                </div>
                                                <h4 class="heading-3">{{ $ur->name ?? '' }}</h4>
                                                <p>{!! plasmaUserCourseCount($ur->id) !!} Courses</p>
                                            </a>
                                        </div>
                                    </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <!-- end best instructors slider -->
        </div>
    </div>
</section>
