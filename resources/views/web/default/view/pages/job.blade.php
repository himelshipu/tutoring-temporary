@extends(getTemplate().'.view.layout.layout')

@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
@endsection
@section('meta_description',get_option('site_meta_description'))
@section('meta_keyword',get_option('site_meta_keyword'))
@section('page')

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-12">
                <h1 class="display-4 text-center p-4">Job Details </h1>
                 <h4>
                    <span style="font-weight: bold">Job Title :</span>
                    <span>{{ $job->title }}</span>
                 </h4>
                 <h4>
                    <span style="font-weight: bold">Position :</span>
                    <span>{{ $job->position }}</span>
                 </h4>
                 <h4>
                    <span style="font-weight: bold">Last Date :</span>
                    <span>{{  Carbon\Carbon::parse($job->end_date)->format('F d, Y')}}</span>
                 </h4>
                <p class=" text-muted mb-0 leading-loose">
                  {!! $job->description !!}
                </p>
            </div>
        </div>
    </div>
@endsection
