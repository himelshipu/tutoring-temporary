<footer class="new_footer_area bg_color">
    <div class="new_footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Get in Touch</h3>
                        <p>Don’t miss any updates of our new Courses & Articles.</p>
                        <form action="{{ route('subscriptions.store') }}" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                            @csrf
                            <input type="email" name="email" class="form-control memail" placeholder="Email">
                            <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                            <p class="mchimp-errmessage" style="display: none;"></p>
                            <p class="mchimp-sucmessage" style="display: none;"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Contact</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="{{url('/about-us')}}">About Us</a></li>
                            <li><a href="{{url('/contact-us')}}">Contact us</a></li>
                            <li><a href="{{url('/blog')}}">Blog</a></li>
                            <li><a href="{{url('/career')}}">Careers</a></li>
                            <li><a href="{{url('/user-manual')}}">User Guide</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Help</h3>
                        <ul class="list-unstyled f_list">
                            <li><a href="{{url('/faq')}}">FAQ</a></li>
                            <li><a href="{{url('/terms-condition')}}">Term &amp; conditions</a></li>
                            <li><a href="{{url('/privacy-policy')}}">Privacy Policy</a></li>
                            <li><a href="{{url('/contact-us')}}">Report</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                        <h3 class="f-title f_600 t_color f_size_18">Follow Us On</h3>
                        <div class="f_social_icon">
                            <a href="https://www.facebook.com/" >
                                <i class="fab fa-facebook"></i>

                            </a>
                            <a href="https://twitter.com/" >
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/" >
                                <i class="fab fa-linkedin"></i>
                            </a>
                            <a href="https://www.pinterest.com/" >
                                <i class="fab fa-pinterest"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bg">
            <div class="footer_bg_one"></div>
            <div class="footer_bg_two"></div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-sm-12 text-center">
                    <p class="mb-0 f_400">© The Tutoring School 2021 All rights reserved.</p>
                </div>

            </div>
        </div>
    </div>
</footer>

@if(get_option('site_popup',0) == '1')
    <div class="modal fade" id="site_popup">
        <div class="modal-dialog popup_modal">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <i class="fa fa-close" data-dismiss="modal"></i>
                    <a href="{{ get_option('popup_url','javascript:void(0);') }}"><img src="{{ get_option('popup_image','') }}" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>
@endif
@if(get_option('triangle-banner-top-image','')!='')
    <div class="fix-top-banner">
        <a href="{{ get_option('triangle-banner-top-url','') }}"><img src="{{ get_option('triangle-banner-top-image','') }}"></a>
    </div>
@endif
@if(get_option('triangle-banner-bottom-image','')!='')
    <div class="fix-bottom-banner">
        <a href="{{ get_option('triangle-banner-bottom-url','') }}"><img src="{{ get_option('triangle-banner-bottom-image','') }}"></a>
    </div>
@endif
@if(get_option('banner-html-box','')!='')
    <div class="fix-html-bottom">
        {!! get_option('banner-html-box','') !!}
    </div>
@endif

{{--menubar--}}
<script src="{{asset('assets/default/new_menu/js/script.js')}}" defer></script>
<script>
    $(document).ready(function(){
        var submitIcon = $('.searchbox-icon');
        var inputBox = $('.searchbox-input');
        var searchBox = $('.searchbox');
        var isOpen = false;
        submitIcon.click(function(){
            if(isOpen == false){
                searchBox.addClass('searchbox-open');
                inputBox.focus();
                isOpen = true;
            } else {
                searchBox.removeClass('searchbox-open');
                inputBox.focusout();
                isOpen = false;
            }
        });
        submitIcon.mouseup(function(){
            return false;
        });
        searchBox.mouseup(function(){
            return false;
        });
        $(document).mouseup(function(){
            if(isOpen == true){
                $('.searchbox-icon').css('display','block');
                submitIcon.click();
            }
        });
    });
    function buttonUp(){
        var inputVal = $('.searchbox-input').val();
        inputVal = $.trim(inputVal).length;
        if( inputVal !== 0){
            $('.searchbox-icon').css('display','none');
        } else {
            $('.searchbox-input').val('');
            $('.searchbox-icon').css('display','block');
        }
    }
</script>
{{--menubar--}}

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


            @if ($errors->any())
                @foreach ($errors->all() as $error)
                  document.dispatchEvent(new CustomEvent('error', {detail: '{{ $error }}'}));
                @endforeach
            @endif
        });
    });
</script>
<!-- Scripts -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token(), 'guest' => !auth()->check()]); ?>;
</script>

<script type="application/javascript" src="/assets/default/vendor/jquery-ui/js/jquery-1.10.2.js"></script>
<script type="application/javascript" src="/assets/default/vendor/bootstrap/js/bootstrap.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/justgage/raphael-2.1.4.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/justgage/justgage.js"></script>
<script type="application/javascript" src="/assets/default/vendor/simplepagination/jquery.simplePagination.js"></script>
<script type="application/javascript" src="/assets/default/vendor/onloader/js/jquery.oLoader.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/ios7-switch/ios7-switch.js"></script>
<script type="application/javascript" src="/assets/default/vendor/sticky/jquery.sticky.js"></script>
<script type="application/javascript" src="/assets/default/vendor/chartjs/Chart.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/bootstrap-notify-master/bootstrap-notify.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/auto-numeric/autoNumeric.js"></script>
<script type="application/javascript" src="/assets/default/vendor/raty/jquery.raty.js"></script>
<script type="application/javascript" src="/assets/default/vendor/easyautocomplete/jquery.easy-autocomplete.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
<script type="application/javascript" src="/assets/default/vendor/owlcarousel/dist/owl.carousel.min.js"></script>
<script type="application/javascript" src="/assets/default/vendor/jquery-te/jquery-te-1.4.0.min.js"></script>
<script type="application/javascript">var sliderTimer = <?=get_option('main_page_slider_timer', 10000);?>;</script>


<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    var preloader = {!! get_option('site_preloader',0) !!};
</script>

<script type="application/javascript" src="/assets/default/javascripts/view-custom.js"></script>
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
</body>
</html>
