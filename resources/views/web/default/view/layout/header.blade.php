<!doctype html>
<html lang="en">
<head>
    <link rel="icon" href="{!! get_option('site_fav','/assets/default/404/images/favicon.png') !!}" type="image/png"
          sizes="32x32">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="{!! get_option('site_description','') !!}">
    <link href='https://fonts.googleapis.com/css?family=Abril Fatface' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/default/vendor/bootstrap/css/bootstrap.min.css"/>
    {{-- <link rel="stylesheet" href="/assets/default/vendor/bootstrap/css/bootstrap-3.2.rtl.css"/> --}}
    <link rel="stylesheet" href="/assets/default/vendor/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="/assets/default/vendor/owlcarousel/dist/assets/owl.carousel.min.css"/>
    {{-- <link rel="stylesheet" href="/assets/default/vendor/raty/jquery.raty.css"/> --}}
    {{-- <link rel="stylesheet" href="/assets/default/view/fluid-player-master/fluidplayer.min.css"/> --}}
    <link rel="stylesheet" href="/assets/default/vendor/simplepagination/simplePagination.css"/>
    {{-- <link rel="stylesheet" href="/assets/default/vendor/easyautocomplete/easy-autocomplete.css"/> --}}
    {{-- <link rel="stylesheet" href="/assets/default/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css"/> --}}
    {{-- <link rel="stylesheet" href="/assets/default/vendor/jquery-te/jquery-te-1.4.0.css"/> --}}
    <link rel="stylesheet" href="/assets/default/stylesheets/vendor/mdi/css/materialdesignicons.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--   menu bar-- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/reset.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/ionicon.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/stylesheets/modified.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/default/stylesheets/util.css')}}">
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('assets/default/stylesheets/modified.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/stylesheets/custom.css')}}">
    <link href="{{ asset('assets/plugin/toastr/css/toastr.min.css') }}" rel="stylesheet" type="text/css">

    <!--    menu bar-- -->

    @if(get_option('site_rtl','0') == 1)
        <link rel="stylesheet" href="/assets/default/stylesheets/view-custom-rtl.css"/>
    @else
        <link rel="stylesheet" href="/assets/default/stylesheets/view-custom.css?time={!! time() !!}"/>
    @endif
    <link rel="stylesheet" href="/assets/default/stylesheets/view-responsive.css"/>
    @if(get_option('main_css')!='')
        <style>
            {!! get_option('main_css') !!}
            body {
                font-family: 'Abril Fatface';
                font-size: 22px;
            }
        </style>
    @endif
    <script type="application/javascript" src="/assets/default/vendor/jquery/jquery.min.js"></script>
    <title>@yield('title'){!! $title ?? '' !!}</title>

    @yield('style')

</head>

<body>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/61ba1fa480b2296cfdd1e744/1fmvgn7cc';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->



<div class="container-fluid">
    @if(\Illuminate\Support\Facades\Auth::user())
    <div class="row line-header"></div>
    <div class="col-md-10 col-md-offset-1">
        <div class="row middle-header">
            <div class="col-md-3 col-xs-12 tab-con">

            </div>
            <div class="col-md-6 col-xs-12 tab-con">
              <div class="row search-box">
                    <form action="/search">
                        {{ csrf_field() }}
                        <input type="text" name="q" class="col-md-11 provider-json" placeholder="Search..."/>
                        <button type="submit" name="search" class="pull-left col-md-1"><span
                                class="homeicon mdi mdi-magnify"></span></button>
                    </form>
                </div>
            </div>
            <div class="col-md-3 col-xs-12 text-center tab-con">
                <div class="row" style="margin-top: 15px;">
                    @if(isset($user) && isset($user['vendor']) && $user['vendor'] == 1)
                        <a href="/user/content/new" class="header-upload-button pulse"><span
                                class="headericon mdi mdi-arrow-up-bold"></span>{{ trans('main.upload_course') }}</a>
                    @endif
                    @if(isset($user))
                        <a href="/user/ticket" class="header-login-in-button">
                            <img src="{{ $userMeta['avatar'] ?? get_option('default_user_avatar','') }}"
                                 class="user-header-avatar">
                            <span class="header-title-caption">{{ $user['name'] }}</span>
                            <span class="headericon mdi mdi-chevron-down"></span>
                            <div class="animated user-overlap sbox3">
                                <ul>
                                    <li><a href="/user/dashboard"><span
                                                class="headericon mdi mdi-account"></span>
                                            <p>{{ trans('main.user_panel') }}</p></a></li>
                                    <li><a href="/profile/{{ $user['id'] }}"><span
                                                class="headericon mdi mdi-account"></span>
                                            <p>{{ trans('main.profile') }}</p></a></li>
                                    <li><a href="/user/ticket"><span class="headericon mdi mdi-headset"></span>
                                            <p>{{ trans('main.support') }}</p></a></li>
                                    <li><a href="/category?order=favorite"><span
                                                class="headericon mdi mdi-heart"></span>
                                            <p>{{ trans('main.favorite') }}</p></a></li>
                                    <li><a href="/user/profile"><span class="headericon mdi mdi-settings"></span>
                                            <p>{{ trans('main.settings') }}</p></a></li>
                                    <li><a href="/logout"><span class="headericon mdi mdi-power"></span>
                                            <p>Log Out</p></a></li>
                                </ul>
                            </div>
                        </a>
                    @else
                        <span> &nbsp; </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="row sep"></div>
    @endif
    <div>
        <div class="row" style="">
            <!-- Section: Header -->
            <header class="nav-header">
                <div class="container">
                    <div class="wrapper">
                        <div class="header-item-left">
                            <a href="/">
                                <img src="{{ get_option('site_logo') }}" alt="{{ get_option('site_title') }}"
                                     class="logo-icon" style="height: 95px;">
                            </a>
                        </div>
                        <!-- Section: Navbar Menu -->
                        <div class="header-item-center">
                            <div class="overlay"></div>
                            <nav class="menu">
                                <div class="menu-mobile-header">
                                    <button type="button" class="menu-mobile-arrow"><i
                                            class="ion ion-ios-arrow-back"></i></button>
                                    <div class="menu-mobile-title"></div>
                                    <button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i>
                                    </button>
                                </div>
                                <ul class="menu-section">
{{--                                    <li><a href="{{route('/')}}">Home</a></li>--}}
                                    <li><a href="{{route('talent-acquisition')}}">Talent Acquisition</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Categories <i class="ion ion-ios-arrow-down"></i></a>
                                        <div class="menu-subs menu-mega menu-column-4">
                                            @foreach($setting['category'] as $mainCategory)
                                                <div class="list-item">
                                                    <h4 class="title">
                                                        {{$mainCategory->title }}
                                                    </h4>
                                                    <ul>
                                                        @forelse($mainCategory->childs as $child)
                                                            <li>
                                                                <a href="/category/{{ $child->class }}">
                                                                    {{ $child->title }}
                                                                </a>
                                                            </li>
                                                        @empty
                                                            "N/A Right Now"
                                                        @endforelse
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Accounts <i class="ion ion-ios-arrow-down"></i></a>
                                        <div class="menu-subs menu-column-1">
                                            <ul>
                                                @guest()
                                                {{-- <li><a href="/user?redirect={{ Request::path() }}">Sign in</a></li> --}}
                                                <li><a href="/login">Sign in</a></li>
                                                <li><a href="/register">Sign Up</a></li>
                                                @endguest
                                                <li><a href="{{url('privacy-policy')}}">Privacy & Policy</a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    @guest()
                                    {{-- <li><a href="/user?redirect={{ Request::path() }}">Sign in</a></li> --}}
                                    <li><a href="/login">Sign in</a></li>
                                    @endguest


                                </ul>
                            </nav>
                        </div>
                        <div class="header-item-right">

                            <div class="search-area">
                                <form class="searchbox" action="/search">
                                    {{ csrf_field() }}
                                    <input type="search" placeholder="Search......" name="q"
                                           class="searchbox-input" onkeyup="buttonUp();" required>

                                    <button type="submit"    class="searchbox-submit"><i class="fa fa-arrow-right"></i>    </button>
                                    <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
                                </form>
                            </div>

                            <button type="button" class="menu-mobile-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                    </div>
                </div>
            </header>
            <!-- Section: Header -->

            <div class="sep-green"></div>

        </div>
    </div>

</div>

