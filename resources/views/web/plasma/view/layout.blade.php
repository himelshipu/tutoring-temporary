<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{!! get_option('site_fav','/assets/default/404/images/favicon.png') !!}" type="image/png" sizes="32x32">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/plasma/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/plasma/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/assets/plasma/css/style.css">
    <title>@yield('title'){!! $title ?? '' !!}</title>
    @yield('style')
</head>

<body>
<!-- start header -->
<header class="header" id="header">
    <!-- start menu toggle checkbox -->
    <input type="checkbox" id="menu-toggle-checkbox" class="d-none">
    <!-- end menu toggle checkbox -->
    <!---------------------------------------------------------------------->
    <!-- start mobile menu -->
    <div class="header-mobile-menu">
        <nav>
            <div>
                <div class="custom-dropdown">
                    <button class="custom-dropdown-btn">
                        <img src="/assets/plasma/img/usa.svg" alt=""> EN
                        <i class="iconly-boldArrow---Down-2 custom-dropdown-btn-icon"></i>
                    </button>
                    <div class="custom-dropdown-menu">
                        <ul>
                            <li class="active">
                                <a href="#">
                                    <img src="/assets/plasma/img/usa.svg" alt=""> EN
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/plasma/img/iran.svg" alt=""> Ar
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a href="#" class="button-primary">Sign Up</a>
            </div>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">Live classes</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
                <li>
                    <a href="#">Terms</a>
                </li>
            </ul>
        </nav>
    </div>
    <!-- end mobile menu -->
    <!---------------------------------------------------------------------->
    <!-- start navbar -->
    <div class="header-navbar">
        <div class="container">
            <div class="row align-items-center">
                <!-- start brand -->
                <div class="col-6 col-lg-3">
                    <a href="/" class="brand">
                        <img src="{{ get_option('site_logo') }}" alt="{{ get_option('site_title') }}" class="logo-icon"/>
                    </a>
                </div>
                <!-- end brand -->
                <!---------------------------------------------------------------------->
                <!-- start menu -->
                <div class="col-lg-6 d-none d-lg-block">
                    <nav>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Live classes</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Terms</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- start menu -->
                <!---------------------------------------------------------------------->
                <!-- start auth -->
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="header-navbar-auth">
                        <div class="custom-dropdown">
                            <button class="custom-dropdown-btn">
                                <img src="/assets/plasma/img/usa.svg" alt=""> EN
                                <i class="iconly-boldArrow---Down-2 custom-dropdown-btn-icon"></i>
                            </button>
                            <div class="custom-dropdown-menu">
                                <ul class="d-none d-lg-block">
                                    <li class="active">
                                        <a href="#">
                                            <img src="/assets/plasma/img/usa.svg" alt=""> EN
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="/assets/plasma/img/iran.svg" alt=""> FA
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="button-primary">Sign Up</a>
                    </div>
                </div>
                <!-- start auth -->
                <!---------------------------------------------------------------------->
                <!-- start menu toggle button -->
                <div class="col-6 d-block d-lg-none">
                    <label for="menu-toggle-checkbox" class="menu-toggle-btn">
                        <span class="line line-1"></span>
                        <span class="line line-2"></span>
                        <span class="line line-3"></span>
                    </label>
                </div>
                <!-- end menu toggle button -->
            </div>
        </div>
    </div>
    <!-- end navbar -->
</header>
<!-- end header -->
<!---------------------------------------------------------------------->
<!-- start search category -->
<section class="search-category">
    <div class="container">
        <div class="row align-items-center">
            <!-- start category dropdown -->
            <div class="col-md-6 col-lg-3 order-1 order-md-0 mt-3 mt-md-0 text-center text-md-left">
                <div class="category-dropdown">
                    <div class="custom-dropdown">
                        <button class="custom-dropdown-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <line x1="4" y1="6" x2="20" y2="6" />
                                <line x1="4" y1="12" x2="20" y2="12" />
                                <line x1="4" y1="18" x2="20" y2="18" />
                            </svg>
                            Category
                            <i class="iconly-boldArrow---Down-2 custom-dropdown-btn-icon"></i>
                        </button>
                        <div class="custom-dropdown-menu">
                            <ul>
                                @foreach($setting['category'] as $mainCategory)
                                    @if(count($mainCategory->childs)>0)
                                        <li>
                                            <a href="javascript:void(0);">
                                                <img width="20" src="{{ $mainCategory->image }}"/>
                                                {{  $mainCategory->title }}
                                                <i class="iconly-boldArrow---Right-2 arrow"></i>
                                            </a>
                                            <ul class="custom-dropdown-menu-child">
                                                @foreach($mainCategory->childs as $child)
                                                    <li>
                                                        <a href="/category/{{ $child->class }}">
                                                            <img width="20" src="{{ $child->image }}"/>
                                                            {{ $child->title }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="/category/{{ $mainCategory->class }}">
                                                <img width="20" src="{{ $mainCategory->image }}"/>
                                                {{ $mainCategory->title }}
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end category dropdown -->
            <!---------------------------------------------------------------------->
            <!-- start category search box -->
            <div class="col-md-6 order-0 order-md-1">
                <div class="search-box">
                    <form>
                        <div>
                            <input type="text" placeholder="Search anything">
                            <button type="submit">
                                <i class="iconly-brokenSearch"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end category search box -->
        </div>
    </div>
</section>
<!-- start search category -->
<!---------------------------------------------------------------------->
<!-- start page -->
@yield('page')
<!-- end page -->
<!-- start footer -->
<footer class="footer mt-5">
    <!-- start footer text -->
    <div class="footer-text pb-5">
        <div class="container">
            <div class="row">
                <!-- start footer text item -->
                <div class="col-sm-6 col-md-3 mt-5">
                    <div class="footer-text-item">
                        <h4 class="heading-white-2">{{ get_option('footer_col1_title') }}</h4>
                        <p>{!! get_option('footer_col1_content') !!}</p>
                    </div>
                </div>
                <!-- end footer text item -->
                <!---------------------------------------------------------------------->
                <!-- start footer text item -->
                <div class="col-sm-6 col-md-3 mt-5">
                    <div class="footer-text-item">
                        <h4 class="heading-white-2">{{ get_option('footer_col2_title') }}</h4>
                        <p>{!! get_option('footer_col2_content') !!}</p>
                    </div>
                </div>
                <!-- end footer text item -->
                <!---------------------------------------------------------------------->
                <!-- start footer text item -->
                <div class="col-sm-6 col-md-3 mt-5">
                    <div class="footer-text-item">
                        <h4 class="heading-white-2">{{ get_option('footer_col3_title') }}</h4>
                        <p>{!! get_option('footer_col3_content') !!}</p>
                    </div>
                </div>
                <!-- end footer text item -->
                <!---------------------------------------------------------------------->
                <!-- start footer text item -->
                <div class="col-sm-6 col-md-3 mt-5">
                    <div class="footer-text-item">
                        <h4 class="heading-white-2">{{ get_option('footer_col4_title') }}</h4>
                        <p>{!! get_option('footer_col4_content') !!}</p>
                    </div>
                </div>
                <!-- end footer text item -->
            </div>
        </div>
    </div>
    <!-- end footer text -->
    <!---------------------------------------------------------------------->
    <!-- start footer copyright -->
    <div class="footer-copyright py-4">
        <div class="container">
            <div class="row align-items-center">
                <!-- start footer copyright text -->
                <div class="col-12 col-sm text-center text-sm-left">
                    <div class="footer-copyright-text">
                        <p>{{ trans('main.copyright') }}</p>
                        <p>{{ trans('main.copyright2') }}</p>
                    </div>
                </div>
                <!-- end footer copyright text -->
                <!---------------------------------------------------------------------->
                <!-- start footer copyright icon -->
                <div class="col-12 col-sm text-center text-sm-right mt-3 mt-sm-0">
                    <div class="footer-copyright-icon">
                        @if(!empty($socials))
                            @foreach($socials as $social)
                                <a href="{{ $social->link }}" target="_blank" title="{{ $social->title }}">
                                    <img src="{{ $social->icon }}" alt="{{ $social->title }}"/>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
                <!-- end footer copyright icon -->
            </div>
        </div>
    </div>
    <!-- end footer copyright -->
</footer>
<!-- end footer -->
<!---------------------------------------------------------------------->
<!-- start scripts -->
<script src="/assets/plasma/js/jquery-3.5.1.min.js"></script>
<script src="/assets/plasma/js/bootstrap.bundle.js"></script>
<script src="/assets/plasma/js/swiper-bundle.min.js"></script>
<script src="/assets/plasma/js/script.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    var preloader = {!! get_option('site_preloader',0) !!};
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(), 'guest' => !auth()->check()]); ?>;
</script>
@if(isset($user))
    <script>login({!! $user['id'] !!})</script>
@endif
@if(get_option('site_popup',0) == '1' && session('popup') == 0)
    <script>
        $(function () {
            $('#site_popup').modal();
        })
    </script>
    @php session(['popup'=>1]) @endphp
@endif
@yield('script')
@if(session('msg') != null)
    <script>
        $.notify({
            message: '{{ session('msg')}}'
        }, {
            type: 'danger',
            allow_dismiss: false,
            z_index: '99999999',
            placement: {
                from: "bottom",
                align: "right"
            },
            position: 'fixed'
        });
    </script>
@endif
{!! get_option('main_js') !!}
<!-- end scripts -->
</body>

</html>
