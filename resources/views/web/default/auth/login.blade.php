<!DOCTYPE html>
<html lang="en">
<head>
    <title>
        {{ !empty($setting['site']['site_title']) ? $setting['site']['site_title'] : 'Website Title' }}
        {{ trans('main.user_login') }}
    </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" href="{!! get_option('site_fav','/assets/default/404/images/favicon.png') !!}" type="image/png" sizes="32x32">

    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/logreg/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/logreg/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/logreg/animate/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/logreg/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/logreg/css/main.css')}}">
    <link href="{{ asset('assets/plugin/toastr/css/toastr.min.css') }}" rel="stylesheet" type="text/css">

    <!--===============================================================================================-->
</head>
<body>



<div class="limiter">
    <div class="container-login100" style="background: url({{asset('/assets/default/logreg/images/login-page-background.jpg')}});background-size: cover;">
        <div class="wrap-login100">
            <form class="form" action="{{route('auth.login')}}" method="post" id="loginForm" style="text-align: left;direction: ltr">
                @csrf
                <span class="login100-form-title">Login</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100 input-field validate" type="text" value="{{ old('username') }}" name="username" placeholder="{{ trans('main.username_email') }}"
                            valid-title="Fill out this form">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">

                    <input type="password" name="password" class="input-field validate input100" valid-title="Fill out this form"
                           autocomplete="new-password" placeholder="{{ trans('main.password') }}">

                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        {{ trans('main.sign_in') }}
                    </button>
                </div>

                <div class="text-center p-t-12">
                    <div class="f_link">
                        <a href="" class="resetTag restag"
                           style="color: #242424 !important;">{{ trans('main.forget_password') }}
                        </a>
                    </div>
                </div>

                <div class="text-center p-t-20">

               Sign in with <a href="/user/sociliate/google" class="btn btn-custom btn-check-form ">
                        <img src="{{asset('/assets/default/logreg/images/google.png')}}" alt="IMG" style="width: 25px">
                    </a>
                or
                <a href="{{ url('/user/auth/redirect/github') }}" class="btn btn-custom btn-check-form">
                    <img src="{{asset('/assets/default/logreg/images/fb.png')}}" alt="IMG" style="width: 30px"></a>
                </div>

                <div class="text-center p-t-20">
                    <a class="txt2" href="/register">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
            <div class="login100-pic js-tilt">
                <img src="{{asset('/assets/default/logreg/images/img-02.png')}}" alt="IMG" class="model">
            </div>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="{{asset('assets/default/logreg/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/default/logreg/bootstrap/js/popper.js')}}"></script>
<script src="{{asset('assets/default/logreg/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/default/logreg/tilt/tilt.jquery.min.js')}}"></script>
<script src="{{ asset('assets/plugin/toastr/js/toastr.min.js') }}"></script>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        // catching saved event and showing toaster message for saved event
        $(function () {
            // ============= TOASTER HANDLING =====================
            toastr.options = {
                "closeButton": false,
                "newestOnTop": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            }

            document.addEventListener('success', function (event) {
                toastr.success(event.detail)
            })

            document.addEventListener('error', function (event) {
                toastr.error(event.detail)
            })

            document.addEventListener('warning', function (event) {
                toastr.warning(event.detail)
            })

            document.addEventListener('info', function (event) {
                toastr.info(event.detail)
            })

            // handling redirect messages
            @if (Session::has('success'))
                document.dispatchEvent(new CustomEvent('success', {detail: '{{Session::get('success')}}'}));
            @endif

            @if (Session::has('error'))
                document.dispatchEvent(new CustomEvent('error', {detail: '{{Session::get('error')}}'}));
            @endif

            @if (Session::has('info'))
                document.dispatchEvent(new CustomEvent('info', {detail: '{{Session::get('info')}}'}));
            @endif

            @if (Session::has('warning'))
                document.dispatchEvent(new CustomEvent('warning', {detail: '{{Session::get('warning')}}'}));
            @endif


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                  document.dispatchEvent(new CustomEvent('error', {detail: '{{ $error }}'}));
                @endforeach
            @endif
        });
    });
</script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->




<script>
    $(document).keypress(function (e) {
        if (e.which == 13) {
            $('#loginForm').submit();
        }
    });
</script>
<script>
    $('.btn-register-user').on('click', function (e) {
        if ($('#r-password').val() != $('#r-re-password').val()) {
            $.notify({
                message: 'Password & its confirmation are not the same.'
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
            e.preventDefault();
        }
    })
</script>
<script>
    $('.regTag').click(function () {
        if ($('.regTag strong').text() == 'Register') {
            $('.regTag strong').text('Login');
            $('.regTag strong').css('position', 'static');
        } else {
            $('.regTag strong').text('Register');
            $('.regTag strong').css('position', 'relative');
            $('.regTag strong').css('top', '-8px');
        }
    })
</script>

</body>
</html>
