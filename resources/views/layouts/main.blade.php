<!DOCTYPE html>
<!-- saved from url=(0069)#contact -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <title>@yield('title', 'Daisovin.com - Hướng dẫn cách sơ vin đẹp cho nam giới')</title>
    <meta name="keywords" content="@yield('seoKeyword', 'Đai sơ vin, đai giữ áo, đai giữ áo sơ mi, dây giữ áo sơ mi nam')" />
    <meta name="description" content="@yield('seoDescription', 'Hướng dẫn cách sơ vin, đóng thùng đẹp cho nam giới. Cung cấp sản phẩm đai giữ áo sơ mi, giúp áo sơ mi của bạn luôn thẳng, gọn gàng khi sơ vin')">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/image/favicon.png">
    <link rel="stylesheet" href="/css/plugins.min.css">
    <link rel="stylesheet" href="/css/main4.css"> 
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="canonical" href="@yield('canonical', 'https://daisovin.com/')" />
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-51639825-12"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-51639825-12');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '358165161529097');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=358165161529097&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
  
</head>

<body class="transparent-header" data-spy="scroll" data-offset="75" data-target="#navbarCollapse">
    <!-- Loader -->
    <div id="preloader">
    </div>
    <!-- Loader End-->
    <!-- Main Wrap -->
    <div class="wrap">
        <!-- Header -->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-sticky">
                <div class="container">
                    <a class="navbar-brand" href="/"><img
                            class="img-fluid" src="/image/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <ul class="navbar-nav ml-auto mr-auto">
                            <li class="nav-item"><a class="nav-link active" data-scroll="" href="/">Trang chủ</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-scroll=""href="/#tinh-nang">Tính năng</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Sản phẩm</a>
                                <ul class="dropdown-menu ">
                                    <li class="nav-item">
                                        <a class="dropdown-item" data-scroll="" href="/san-pham/dai-so-vin-dai">Đai sơ vin dài</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dropdown-item" data-scroll="" href="/san-pham/dai-so-vin-ngan">Đai sơ vin ngắn</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Tin tức</a>
                                <ul class="dropdown-menu ">
                                    <?php foreach ($categories as $cate):?>
                                        <li class="nav-item">
                                            <a class="dropdown-item" data-scroll="" href="/{{$cate->slug}}">{{$cate->title}}</a>
                                        </li>
                                    <?php endforeach;?>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-scroll=""
                                    href="/#contact">Liên hệ
                                </a></li>
                        </ul>
                        <a href="/#san-pham"
                            class="btn btn-light btn-rounded d-none d-lg-block">Mua ngay</a>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <!-- End Header -->
        @yield('content')
        <!-- Footer -->
        <div class="footer">
            <div class="container">
                <div class="row text-lg-left text-center">
                    <div class="col-12 col-lg-6">
                        <span class="copyright">Copyright @ 2019 <a
                                href="#">DAISOVIN.COM</a> | All right reserved. </span>
                    </div>
                    <div class="col-12 col-lg-6 text-center text-lg-right">
                        <ul class="list-inline my-auto social">
                            <li class="list-inline-item pr-2"><a
                                    href="#"
                                    class="facebook" title="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item pr-2"><a
                                    href="#"
                                    class="twitter" title="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item pr-2"><a
                                    href="#"
                                    class="dribbble" title="dribbble"><i class="fa fa-dribbble"></i></a></li>
                            <li class="list-inline-item pr-2"><a
                                    href="#"
                                    class="pinterest" title="pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="pr-0 list-inline-item pr-0"><a
                                    href="#"
                                    class="linkedin" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer -->
    </div>
    <!-- End Main Wrap -->
    <script src="/js/plugins.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.10/jquery.lazy.plugins.min.js"></script>
    <script defer="defer" async="async" src="/js/main.js"></script>
</body>
</html>
@extends('layouts.tawk')