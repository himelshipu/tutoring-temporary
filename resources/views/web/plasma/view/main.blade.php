@extends(getTemplate().'.view.layout')
@section('page')
    @include(getTemplate().'.view.parts.intro')
    @include(getTemplate().'.view.parts.categories')
    @include(getTemplate().'.view.parts.featured_courses')
    @include(getTemplate().'.view.parts.new_courses')
    @if(get_option('plasma_middle_feature_enable',0) == 1)
        @include(getTemplate().'.view.parts.intro_middle')
    @endif
    @include(getTemplate().'.view.parts.popular_courses')
    @include(getTemplate().'.view.parts.most_sold')
    @include(getTemplate().'.view.parts.featured_classes')
    @include(getTemplate().'.view.parts.customer_comments')
    @include(getTemplate().'.view.parts.articles')
    @include(getTemplate().'.view.parts.best_instructors')
    @include(getTemplate().'.view.parts.best_channels')
    @include(getTemplate().'.view.parts.live_classes')

@stop
