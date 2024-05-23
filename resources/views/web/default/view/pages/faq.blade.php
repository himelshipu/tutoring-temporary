@extends(getTemplate().'.view.layout.layout')

@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
@endsection
@section('meta_description',get_option('site_meta_description'))
@section('meta_keyword',get_option('site_meta_keyword'))
@section('page')

    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
           integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">--}}



    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-12">
                <h1 class="display-4 text-center p-4">FAQ</h1>
                <p class=" text-muted mb-0 leading-loose">
                    You can find several FAQ answers below. You may have one on your mind right now. If you still need help, feel free to reach out to us at
                    info@tutoringschool.com or 415-814-3744 for assistance. We welcome your questions and feedback.
                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">

            <div class="col-lg-6 d-none d-lg-block">
                <h4 class="mt-5 mb-5">What is Tutoring School?</h4>
                <p style="line-height: 30px">
                    Tutoring School is a global e-learning platform. Here you can learn and teach simultaneously.
                </p>

                <h4 class="mt-5 mb-5">What is Talent Acquisition? </h4>
                <p style="line-height: 30px">
                    Talent acquisition is a sub-brand of Tutoring School where you will get all the solutions for your IT services.
                </p>

                <h4 class="mt-5 mb-5">Is there any career opportunity? </h4>
                <p style="line-height: 30px">
                    When there is an opening, you will get the details on the Career page.
                </p>

                <h4 class="mt-5 mb-5">What about the peer-to-peer session? </h4>
                <p style="line-height: 30px">
                    This session will allow you or your team to join a private meeting with an instructor. You can personally get a solution to a problem you are facing.
                </p>


            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('assets/default/images/Questions-amico.png')}}" alt="" class="img-fluid">
            </div>

        </div>
    </div>

@endsection
