<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Syahrizaldev">
    <title>Responsive Mega Menu using Vanilla JavaScript</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!--   menu bar-- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/reset.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/style.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/default/new_menu/css/ionicon.min.css')}}">


    <style>
        @media screen and (min-width: 768px) {
            .search-box {
                display: none;
                margin-bottom: 20px;
            }
        }


        .searchbox {
            position: relative;
            min-width: 50px;
            width: 0%;
            height: 50px;
            float: right;
            overflow: hidden;

            -webkit-transition: width 0.3s;
            -moz-transition: width 0.3s;
            -ms-transition: width 0.3s;
            -o-transition: width 0.3s;
            transition: width 0.3s;
        }

        .searchbox-input {
            top: 0;
            right: 0;
            border: 1px solid #d9dfe5;
            outline: 0;
            background: white;
            width: 100%;
            height: 45px;
            margin: 0;
            padding: 0px 55px 0px 20px;
            font-size: 20px;

            border-radius: 20px;
        }


        .searchbox-icon,
        .searchbox-submit {
            width: 50px;
            height: 45px;
            /*border-radius: 100%;*/
            display: block;
            position: absolute;
            top: 0;
            font-size: 22px;
            right: 0;
            padding: 0;
            margin: 0;
            border: 0;
            outline: 0;
            line-height: 45px;
            text-align: center;
            cursor: pointer;
            color: #FFFFFF;
            background: #ED1D4F;
        }

        .searchbox-open {
            width: 100%;
        }


        @media screen and (max-width: 768px) {
            .search-area {
                display: none;
            }
        }
    </style>
</head>

<body>
<!-- Section: Header -->
<header class="header">
    <div class="container">
        <div class="wrapper">
            <div class="header-item-left">
                <h1><a href="./index.html" class="brand">Store</a></h1>
            </div>
            <!-- Section: Navbar Menu -->
            <div class="header-item-center">
                <div class="overlay"></div>
                <nav class="menu">
                    <div class="menu-mobile-header">
                        <button type="button" class="menu-mobile-arrow"><i class="ion ion-ios-arrow-back"></i></button>
                        <div class="menu-mobile-title"></div>
                        <button type="button" class="menu-mobile-close"><i class="ion ion-ios-close"></i></button>
                    </div>
                    <ul class="menu-section">
                        <li><a href="#">Home</a></li>
                        <li class="menu-item-has-children">
                            <a href="#">New Products <i class="ion ion-ios-arrow-down"></i></a>
                            <div class="menu-subs menu-mega menu-column-4">
                                <div class="list-item text-center">
                                    <a href="#">
                                        <img src="./asset/image-1.jpg" class="responsive" alt="New Product">
                                        <h4 class="title">New Product 1</h4>
                                    </a>
                                </div>
                                <div class="list-item text-center">
                                    <a href="#">
                                        <img src="./asset/image-2.jpg" class="responsive" alt="New Product">
                                        <h4 class="title">New Product 2</h4>
                                    </a>
                                </div>
                                <div class="list-item text-center">
                                    <a href="#">
                                        <img src="./asset/image-3.jpg" class="responsive" alt="New Product">
                                        <h4 class="title">New Product 3</h4>
                                    </a>
                                </div>
                                <div class="list-item text-center">
                                    <a href="#">
                                        <img src="./asset/image-4.jpg" class="responsive" alt="New Product">
                                        <h4 class="title">New Product 4</h4>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Categories <i class="ion ion-ios-arrow-down"></i></a>
                            <div class="menu-subs menu-mega menu-column-4">
                                <div class="list-item">
                                    <h4 class="title">Men's Fashion</h4>
                                    <ul>
                                        <li><a href="#">Product List</a></li>
                                        <li><a href="#">Product List</a></li>
                                        <li><a href="#">Product List</a></li>
                                        <li><a href="#">Product List</a></li>
                                    </ul>
                                    <h4 class="title">Kid's Fashion</h4>
                                    <ul>
                                        <li><a href="#">Product List</a></li>
                                        <li><a href="#">Product List</a></li>
                                        <li><a href="#">Product List</a></li>
                                        <li><a href="#">Product List</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Articles <i class="ion ion-ios-arrow-down"></i></a>
                            <div class="menu-subs menu-column-1">
                                <ul>
                                    <li><a href="#">Article One</a></li>
                                    <li><a href="#">Article Two</a></li>
                                    <li><a href="#">Article Three</a></li>
                                    <li><a href="#">Article Four</a></li>
                                    <li><a href="#">Article Five</a></li>
                                    <li><a href="#">Article Six</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="menu-item-has-children">
                            <a href="#">Accounts <i class="ion ion-ios-arrow-down"></i></a>
                            <div class="menu-subs menu-column-1">
                                <ul>
                                    <li><a href="#">Login & Register</a></li>
                                    <li><a href="#">Help & Question</a></li>
                                    <li><a href="#">Privacy & Policy</a></li>
                                    <li><a href="#">Term of Cookies</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </nav>
            </div>

            <div class="header-item-right">
                <a href="#" class="menu-icon"><i class="ion ion-md-search"></i></a>
                <a href="#" class="menu-icon"><i class="ion ion-md-heart"></i></a>
                <a href="#" class="menu-icon"><i class="ion ion-md-cart"></i></a>
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

<!-- Section: Main -->
<main class="main">
    <div class="container">

    </div>
</main>


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
</body>

</html>
