@extends(getTemplate().'.view.layout.layout')

@section('title')
    {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : '' }}
@endsection
@section('meta_description',get_option('site_meta_description'))
@section('meta_keyword',get_option('site_meta_keyword'))
@section('page')

    {{--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
           integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">--}}
    <!-- Header -->

    <div class="bg-light">
        <div class="container py-5">
            <div class="row h-100 align-items-center py-5">
                <div class="col-lg-6">
                    <h1 class="display-4">Who We Are </h1>
                    <p class="lead text-muted mb-0 lh-2-0 text-justify">
                        Tutoring School is an international e-learning platform that allows both educators and students
                        to spread and gain their knowledge in a comfortable domain. Here you get the flexibility to
                        learn by enrolling in our exclusive content and driving yourself to be more skilled to be in
                        demand. <br>

                        You get both the taste of live meetings and pre-recorded lectures as a student. Whether you are
                        alone or you have a team, you can ask for a peer-to-peer learning session with our finest
                        teachers over the Zoom platform. A difficulty may occur in your academic syllabus or on a
                        project you are working on now. You can schedule a meeting with an instructor to get the
                        solution privately. Welcome to the next generation of learning at Tutoring School. <br>

                        And if you are an educator. You can sign up anytime. We assure you that you will experience an
                        excellent teaching venture over the Tutoring School medium. Sign-up and start teaching today. We
                        are determined to deliver unique and valid content over our platform. So, you are always welcome
                        to be a teacher at Tutoring School.

                    </p>

                </div>
                <div class="col-lg-6 d-none d-lg-block">
                    <img src="{{asset('assets/default/images/about.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-white py-5">
        <div class="container py-5">
            <div class="row align-items-center mb-5">
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2">
                    <img src="{{asset('assets/default/images/online-class.jpg')}}" alt=""
                         class="img-fluid mb-4 mb-lg-0">
                </div>
                <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Talent Acquisition</h2>
                    <p class="font-italic text-muted mb-4 lh-2-0 text-justify">
                        Besides teaching and learning, Tutoring School is a one-stop venue for all of your IT solutions
                        dubbed as Talent Acquisition. You may need a website or other project based on your business.
                        Our service allows you to contact us by filling up a simple form. Mention your suited budget and
                        project goal, then leave it on us. We will contact you as soon as possible after receiving your
                        submission. <br>

                        Talent Acquisition is firmly client-focused. We develop and deliver a project that endures
                        longer. Our team of experts is adequately prepared to handle your job with ease and in the most
                        efficient manner.

                    </p>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Our Mission</h2>
                    <p class="font-italic text-muted mb-4 lh-2-0">
                        We focus on delivering high-quality content that covers the skill required in every sector of
                        our lives. We want to carry the concept of self-learning to a whole new level where anyone over
                        the internet can access required courses at an affordable expense. We have brought the idea of
                        peer-to-peer problem-solving sessions, enabling learners to get help on their academic studies
                        and in skill refinement. We prioritize an environment for the betterment of the students. <br>
                        Our platform is a gathering of enriched content. Then again, more and more content is adding up
                        daily to the list. We ought to cover every segment of digital content with resourceful
                        instructors.
                    </p>
                </div>

                <div class="col-lg-5 px-5 mx-auto">
                    <img src="{{asset('assets/default/images/Online-Education-PNG-Transparent-Image.png')}}" alt=""
                         class="img-fluid mb-4 mb-lg-0">
                </div>
            </div>


            <div class="row align-items-center mb-5">
                <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2">
                    <img src="{{asset('assets/default/images/online-class.jpg')}}" alt=""
                         class="img-fluid mb-4 mb-lg-0">
                </div>
                <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Our Vision</h2>
                    <p class="font-italic text-muted mb-4 lh-2-0 text-justify">
                        Tutoring School focuses on expanding the community to each sector of digital transformation,
                        where keen learners will come to do real-life projects under the supervision of expert trainers.
                        Having demanding skills will allow them to build a portfolio to ace a job interview. <br>
                        Tutoring school is a global classroom where anyone can join to take the next step to their
                        professional journey. We envision it as one of the best teaching and learning platforms over the
                        internet. Let us open the path for your career opportunity by transforming your creative skills.


                    </p>
                </div>
            </div>
            <div class="row align-items-center">

                <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
                    <h2 class="font-weight-light">Our Courses</h2>
                    <p class="font-italic text-muted mb-4 lh-2-0 text-justify">
                        Learning is the way you develop yourself. We have courses relying on STEM (Science, Technology,
                        Engineering, Mathematics) and other parts of creative skills. From digital illustration to
                        Machine learning, we got it all covered. <br>
                        We have lessons on Language, Graphics and Illustration, Web Design and Development, Programming,
                        Cloud Computing, Artificial intelligence, Machine learning, and the list goes on. The classes
                        are designed for curious and enthusiastic learners all around the globe. Grab the opportunity to
                        enroll yourself. <br>

                        Whether you are a fresh graduate or trying to acquire new skills, find your desired course, and
                        start learning in Tutoring School. We believe everyone deserves to learn. Our platform is always
                        ready to serve them.

                    </p>

                    <h2 class="font-weight-light">Transform Yourself</h2>
                    <p class="font-italic text-muted mb-4 lh-2-0 text-justify" >
                        New skills are essential in this digital transformation era—your expertise matters when you want
                        to keep up with this evolving generation. To be in demand, you need the necessary skills that
                        will aid you to stand out from the crowd. <br>
                        At Tutoring School, you will uncover your wished classes based on your requirements. Now it's
                        time to start learning, remaking yourself, and touching your dreams. Transform your life through
                        self-learning.


                    </p>
                </div>

                <div class="col-lg-5 px-5 mx-auto">
                    <img src="{{asset('assets/default/images/Online-Education-PNG-Transparent-Image.png')}}" alt=""
                         class="img-fluid mb-4 mb-lg-0">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light py-5">
        <div class="container py-5">
            <div class="row mb-4">
                <div class="col-lg-12 text-center">
                    <h2 class="display-4 font-weight-light">Our team</h2>
                    <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
            </div>

            <div class="row text-center">
                <!-- Team item-->
                <div class="col-md-3 mb-5  ">
                    <div class="bg-white rounded shadow py-5 px-4">
                        <img src="https://bootstrapious.com/i/snippets/sn-about/avatar-4.png" alt="" width="100"
                             class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Manuella Nevoresky</h5><span class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-md-3 mb-5">
                    <div class="bg-white rounded shadow py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/avatar-3.png" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Samuel Hardy</h5><span
                            class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-md-3 mb-5 ">
                    <div class="bg-white rounded shadow py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/avatar-2.png" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">Tom Sunderland</h5><span
                            class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

                <!-- Team item-->
                <div class="col-md-3 mb-5 ">
                    <div class="bg-white rounded shadow py-5 px-4"><img
                            src="https://bootstrapious.com/i/snippets/sn-about/avatar-1.png" alt="" width="100"
                            class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
                        <h5 class="mb-0">John Tarly</h5><span
                            class="small text-uppercase text-muted">CEO - Founder</span>
                        <ul class="social mb-0 list-inline mt-3">
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- End-->

            </div>
        </div>
    </div>

    <!-- Carousel -->

    {{--<div class="container-fluid">
        <div class="row">
            <div class="parts-slider"
                 style="background:url('{{ get_option('main_page_slide','/assets/default/images/view/sample/slider-sample.png') }}');
                     ">
                <div class="col-xs-12 col-md-4 col-md-offset-4 parts-slider-container">
                    <h2>Who we are</h2>
                    <span>{{ get_option('main_page_slide_text','') }}</span>

                </div>
                <i class="fa fa-angle-down down-flesh"></i>
            </div>
        </div>
    </div>--}}

@endsection
