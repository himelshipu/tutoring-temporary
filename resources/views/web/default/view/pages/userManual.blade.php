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
                <h3 class="mt-4 mb-4 text-center"> User Manual for an Vendor </h3>
                <p class="text-justify leading-loose m-4">
                    We are very excited to have you on board with us. Sign up by filling out our short registration form
                    with your details. During the procedure, please authenticate your e-mail address. You can begin
                    teaching as soon as you have finished the registration process. We hope you have an excellent
                    teaching experience at Tutoring School. <br>
                    Here's a step-by-step video tutorial on becoming a vendor at Tutoring School.
                </p>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                </div>

                <div class="pages my-4">
.
                </div>


            </div>

            <div class="col-lg-12">
                <h3 class="mt-4 mb-4 text-center"> User Manual for a Student </h3>
                <p class="text-justify leading-loose m-4">
                    At Tutoring School, you are always welcome to learn. To access all of the course modules, you must
                    first register as a student. The procedure is straightforward and self-explanatory. Enter your
                    correct details and validate your e-mail address. <br>
                    You will get access to the course module once you have registered as a student.
                    Please watch the short-guidance video below if you have any trouble signing up.
                </p>

                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/BbHkJ7AVC5c"
                            title="YouTube video player" allowfullscreen></iframe>
                </div>

                <div class="pages my-4">
                   .
                </div>


            </div>
        </div>

    </div>

@endsection
