<section class="featured-classes mt-5">
    <div class="container">
        <div class="row">
            <!-- start featured courses heading box -->
            <div class="col-12">
                <div class="heading-box">
                    <h3 class="heading-1">FEATURED COURSES</h3>
                    <a href="/category">View more</a>
                </div>
            </div>
            <!-- end featured courses heading box -->
        </div>
        <div class="row overflow">
            @foreach($vip_content as $content)
                <?php $popular = $content->content; ?>
                @if(isset($popular->metas))
                    <?php $meta = arrayToList($popular->metas, 'option', 'value'); ?>
                    <div class="col-sm-6 col-lg-3 mt-4">
                        @include(getTemplate().'.view.parts.product_box',['product'=>$popular,'meta'=>$meta])
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</section>
