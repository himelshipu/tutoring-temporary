<section class="must-polular-courses mt-5">
    <div class="container">
        <div class="row">
            <!-- start must polular courses heading box -->
            <div class="col-12">
                <div class="heading-box">
                    <h3 class="heading-1">MUST POPULAR COURSES</h3>
                    <a href="/category?order=popular">View more</a>
                </div>
            </div>
            <!-- end must polular courses heading box -->
        </div>
        <div class="row overflow">
            @foreach($popular_content as $index=>$popular)
                @if($index < 4)
                @php $meta = arrayToList($popular->metas, 'option', 'value'); @endphp
                <div class="col-sm-6 col-lg-3 mt-4">
                    @include(getTemplate().'.view.parts.product_box',['product'=>$popular,'meta'=>$meta])
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
