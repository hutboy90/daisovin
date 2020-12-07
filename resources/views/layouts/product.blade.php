<!DOCTYPE html>
<!-- saved from url=(0069)#contact -->
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <title>@yield('title', 'Sơ vin phải đẹp')</title>
    <meta name="keywords" content="@yield('seoKeyword', 'Đai sơ vin, đai giữ áo, đai giữ áo sơ mi, dây giữ áo sơ mi nam')" />
    <meta name="description" content="@yield('seoDescription', 'Hướng dẫn cách sơ vin đúng cách, lịch sử cho nam giới. Cung cấp sẩn phẩm đai sơ vin chính hãng, giúp chiếc áo sơ mi của bạn không bị xô lệch và nằm gọn gàng trong quần suốt ngày dài làm việc')">
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
    <style>
        .transparent-header .navbar {
            background: black;
        }
    </style>
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
    <div id="preloader" class="d-none"></div>
    <!-- Loader End-->
    <!-- Main Wrap -->
    <div class="wrap">
        <!-- Header -->
        <header class="header">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-sticky sticky-active">
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
                            <li class="nav-item dropdown"><a class="nav-link"
                                    aria-expanded="false"
                                    href="/tin-tuc">Tin tức</a>
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

        <section id="contact" class="bg-dark text-white" data-scroll-id="contact" tabindex="-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 ml-auto mr-auto text-justify wow fadeInUp">
                        <h2 class="text-white">DAISOVIN.COM - Chúng tôi là ai ?</h2>
                        <p>
                            Chúng tôi là những người trẻ đầy nhiệt huyết, có mặt ở đây với niềm khao khát và mong muốn được giúp bạn và những người đàn ông Việt Nam trở nên lịch lãm, tự tin hơn trong công việc và cuộc sống.
    
                            Xin được gửi những lời cảm ơn chân thành và sâu sắc nhất đến bạn vì đã tin dùng sản phẩm của chúng tôi tạo ra. Chúng tôi luôn cố gắng hết sức để hoàn thiện sản phẩm của mình. Nếu trong quá trình sử dụng hoặc giao nhận hàng gặp bất cứ vấn đề nào, vui lòng liên hệ với chúng tôi theo thông tin dưới đây.
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-xl-10 mr-auto ml-auto">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
                                <div class="address-block mb-2">
                                    <i class="lnr lnr-map-marker"></i>
                                    <p class="">Ngõ 97, Khương Trung, Quận Đống Đa<br> Thành phố Hà Nội</p>
                                </div>
                                <div class="address-block mb-2">
                                    <i class="lnr lnr-inbox"></i>
                                    <p class="">contact@daisovin.com<br> support@daisovin.com
                                    </p>
                                </div>
                                <div class="address-block">
                                    <i class="lnr lnr-phone-handset"></i>
                                    <p class="">083.9911.745<br> 083.9911.745</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 wow fadeInUp">
                                <form id="contact-form" action="/contact" method="post" novalidate="novalidate">
                                    <div class="form-group">
                                        <input type="text" name="contact_name" id="contact_name" class="form-control" placeholder="Tên của bạn">
                                    </div>
                                    <div class="form-group clearfix">
                                        <div class="col-6 no-padding-left">
                                            <input type="text" name="contact_email" id="contact_email" class="form-control" placeholder="Địa chỉ email">
                                        </div>
                                        <div class="col-6 no-padding-right">
                                            <input type="text" name="contact_phone" id="contact_phone" class="form-control" placeholder="Số điện thoại">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="contact_message" id="contact_message" placeholder="Nội dung" rows="5" cols="4"></textarea>
                                    </div>
                                    <div class="d-flex justify-content-start mb-4"><input type="submit" name="contact_submit" class="btn btn-cta text-uppercase btn-xl" value="Gửi"></div>
                                    <div id="contact-result"></div>
                                </form>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
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