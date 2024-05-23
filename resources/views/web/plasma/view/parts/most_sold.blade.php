<section class="must-sold-courses mt-5">
    <div class="container">
        <div class="row">
            <!-- start must sold courses heading box -->
            <div class="col-12">
                <div class="heading-box">
                    <h3 class="heading-1">MUST SOLD COURSES</h3>
                    <a href="/category?order=sell">View more</a>
                </div>
            </div>
            <!-- end must sold courses heading box -->
        </div>
        <div class="row overflow">
            @foreach($sell_content as $index=>$new)
                @if($index < 4)
                @php $meta = arrayToList($new->metas, 'option', 'value'); @endphp
                <div class="col-sm-6 col-lg-3 mt-4">
                    @include(getTemplate().'.view.parts.product_box',['product'=>$new,'meta'=>$meta])
                </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
