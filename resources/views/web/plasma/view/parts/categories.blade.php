<section class="catigories">
    <div class="container">
        <div class="row">
            <div class="col-12 p-0">
                <div class="swiper-container grid-6">
                    <div class="swiper-wrapper">
                        @foreach(plasmaCategories() as $plasmaCategory)
                        <div class="swiper-slide px-3 py-4">
                            <div class="catigory-item deepgreen">
                                <a href="{{ $plasmaCategory['link'] ?? '' }}">
                                    <img width="48" src="{{ $plasmaCategory['icon'] ?? '' }}" alt="{{ $plasmaCategory['title'] ?? '' }}">
                                    <p>{{ $plasmaCategory['title'] ?? '' }}</p>
                                    <span>{{ $plasmaCategory['courses'] ?? '0' }} Courses</span>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</section>
