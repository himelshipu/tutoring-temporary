<section class="new-courses mt-5">
    <div class="container">
        <div class="row">
            <!-- start new courses heading box -->
            <div class="col-12">
                <div class="heading-box">
                    <h3 class="heading-1">NEWEST COURSES</h3>
                    <a href="/category?order=new">View more</a>
                </div>
            </div>
            <!-- end new courses heading box -->
        </div>
        <div class="row overflow">
            @foreach($new_content as $index=>$new)
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
