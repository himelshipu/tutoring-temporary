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
                <h1 class="display-4 text-center p-4">Come work with us. </h1>
                <p class=" text-muted mb-0 leading-loose">
                    Tutoring School have a team with a variety of backgrounds and skills. At Tutoring School, every
                    individual gets a flexible and friendly environment to work as a team. Together we are building a
                    solid community of experts. <br>
                    We currently have no openings. Keep your eyes on this page for updates. When a position becomes
                    available, an advertisement will be posted here.

                </p>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row align-items-center">

            <div class="col-lg-6 d-none d-lg-block">
                <h3 class="mt-5 mb-5">Our benefits include (but are not limited to!):</h3>
                <ul style="line-height: 30px;">
                    <li><i class="fas fa-check mr-2"></i> Competitive salaries</li>
                    <li><i class="fas fa-check mr-2"></i> Stock options</li>
                    <li><i class="fas fa-check mr-2"></i>Health, Dental, and Vision coverage</li>
                    <li><i class="fas fa-check mr-2"></i>Unlimited vacation (with a required minimum!)</li>
                    <li><i class="fas fa-check mr-2"></i> Learning and conference stipends</li>
                    <li><i class="fas fa-check mr-2"></i> Ongoing manager training with LifeLabs</li>
                    <li><i class="fas fa-check mr-2"></i> Inclusion workshops with Paradigm</li>
                </ul>
            </div>

            <div class="col-lg-6 d-none d-lg-block">
                <img src="{{asset('assets/default/images/teamName.webp')}}" alt="" class="img-fluid">
            </div>

        </div>
    </div>


    <div class="container py-5">
        <div class="row h-100 align-items-center py-5">
            <div class="col-lg-12">
                <h3 class="mt-4 mb-4"> We Put People First.</h3>
                <p class="text-justify leading-loose">
                    TutoringSchool’s collaborative culture goes far beyond our online community. It’s a real part of the
                    humans-first way we work as a team. We believe the work we do makes a difference in the lives of our
                    members, and our mission extends to ensuring our own team members live balanced, fulfilling lives.
                    That means different things for everyone, but it begins with a workplace that embraces modern
                    flexibility, inclusivity, and transparency.
                    We are committed to building a diverse team that reflects a variety of backgrounds, perspectives,
                    and skills. We’re proud to be recognized as a top place to work by BuiltinNYC, Crain’s, and Forbes,
                    in addition to being one of the five best places to work for women by Bpeace, and a top-rated
                    workplace for dads by Fatherly. We work to ensure a consistent interview process, fair compensation,
                    and inclusive work environment for all.
                </p>
            </div>
        </div>

        <div class="row ">
            <img src="{{asset('assets/default/images/team.jpg')}}" alt="" class="img-fluid w-full">
            <h3 class="mt-4 mb-4 text-center">Job Post will Be available here when there will be a vacancy</h3>
        </div>
        <div class="container">
            @forelse ($jobs as $job)
            <div class="col-md-4">
                <div class="card border p-4">
                    <div class="card-body">
                        <h4 class="card-title">{{ $job->title }}</h4>
                        <p class="card-text">{{ $job->position }}</p>
                        <p>{{  Carbon\Carbon::parse($job->end_date)->format('F d, Y')}}</p>
                        <a href="{{ route('career-job',$job->id) }}" class="btn btn-primary stretched-link">See More</a>
                      </div>
                 </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>

@endsection
