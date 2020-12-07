@extends('layouts.product')
@section('title', 'Đai giữ áo sơ mi dài chính hãng, bền đẹp | DaiSoVin')
@section('seoKeyword', 'Dây giữ áo sơ mi, dây giữ áo sơ mi dài, đai gữ áo sơ mi, đai giữ áo sơ mi dài, dây giữ áo sơ vin, dây giữ áo sơ vin dìa, dây giữ áo sơ vin ở Hà Nội')
@section('seoDescription', 'Dây giữ áo sơ mi dài. Giúp áo sơ mi không bị bung ra khỏi quần khi sơ vin. Thiết kế bền đẹp, chất liệu cao cấp và mát')
@section('canonical', 'https://daisovin.com/san-pham-dai-so-vin-dai')
@section('content')
<section class="product-detail">
    <div class="container">
        <br><br><br><br>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="https://storage.googleapis.com/daisovin/dai-so-vin-dai.jpg" alt="Đai giữ áo sơ mi dài">
            </div>

            <div class="col-lg-6 ml-auto wow zoomIn" data-wow-duration=".3s" data-wow-delay=".2s">
                <h1 class="text-center text-lg-left">Đai giữ áo sơ mi dài</h1>
                <p class="product-price">
                    <strike>169.000₫</strike> <strong>69.000₫</strong></p>
                <div class="product-number">
                    <strong>Số lượng</strong>
                    <div class="quantity buttons_added">
                        <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
                    </div>
                </div>

                <div class="text-center">
                    <a class="hotline" href="tel:083.9911.745">
                        <strong>Hotline</strong>
                        <p>083.9911.745</p>
                    </a>
                    <p><a href="#order-popup" class="btn btn-cta btn-lg" id="order-now">Đặt hàng ngay</a></p>
                </div>
                <div id="order-popup" class="overlay">
                    <div class="popup section-order">
                        <form action="/order" id="order-form" method="post">
                            <h3>Thông tin mua hàng</h3>
                            <a class="close" href="#">&times;</a>
                            <div class="content">
                                <div class="row">
                                    <label class="col-lg-4 col-sm-12">Tên sản phẩm</label>
                                    <span class="col-lg-8 col-sm-12 no-padding-left title">Đai giữ áo sơ mi dài</span>
                                </div>
                                <div class="product-number row">
                                    <label class="col-lg-4">Số lượng</label>
                                    <div class="quantity buttons_added col-lg-8">
                                        <input type="button" value="-" class="minus">
                                        <input type="number" step="1" min="1" max="100" name="quantity" value="1" title="" class="input-text qty text" size="4" pattern="" inputmode="">
                                        <input type="button" value="+" class="plus">
                                        <input type="hidden" name="type" value="1">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">Tên của bạn (*)</label>
                                    <div class="form-group col-lg-8 no-padding-left">
                                        <input type="text" name="fullname">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4">Số điện thoại (*)</label>
                                    <div class="form-group col-lg-8 no-padding-left">
                                         <input type="text" name="phone">
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-lg-4"></label>
                                    <div class="col-log-8">
                                        <input type="submit" name="order_submit" class="btn btn-cta text-uppercase btn-xl" value="Đặt hàng">
                                    </div>
                                </div>
                                <div class="row">
                                    <p id="order-result"></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="our-mission"> 
                    <p>TRÁCH NHIỆM CỦA CHÚNG TÔI</p>
                    <div>
                        <span><i class="fa fa-car"></i>Giao hàng toàn quốc</span>
                        <span><i class="fa fa-money"></i>Thanh toán khi nhận hàng</span>
                    </div>

                    <div>
                        <i class="fa fa-undo"></i>Đảm bảo đổi trả, hoặc hoàn lại 100% tiền nếu sản phẩm bị lỗi
                    </div>
            </div>
        </div>

        <div class="col-lg-8">
            <div class="post-content clearfix">
                    <p>
                    <br />
                    <strong>Bạn l&agrave; người th&iacute;ch ăn mặc lịch sự, gọn g&agrave;ng. Hay bạn l&agrave; người th&iacute;ch sơ vin khi ra ngo&agrave;i để đi l&agrave;m, đi dự tiệc hay đơn giản chỉ l&agrave; đi gặp b&agrave;n b&egrave;.</strong></p>
                    
                    <p>C&oacute; một vấn đề hầu hết m&agrave; đ&agrave;n &ocirc;ng ch&uacute;ng ta đều gặp phải khi đ&oacute;ng th&ugrave;ng l&agrave; &aacute;o sơ mi hay bị bung ra ngo&agrave;i sau một v&agrave;i lần đứng l&ecirc;n ngồi xuống. Đặc biệt l&agrave; phần lưng &aacute;o v&agrave; phần bụng. Giải ph&aacute;p của ch&uacute;ng ta l&agrave; t&igrave;m một chỗ k&iacute;n đ&aacute;o để chỉnh trang lại, bạn c&oacute; thấy đ&oacute; l&agrave; sự bất tiện rất lớn kh&ocirc;ng ?</p>
                    
                    <p>Giải ph&aacute;p đơn giản nhưng hiệu quả hơn m&agrave; đ&agrave;n &ocirc;ng Ch&acirc;u &Acirc;u hay sử d&ugrave;ng đ&oacute; ch&iacute;nh l&agrave; sử dụng <strong>Đai giữ áo sơ mi</strong>. H&atilde;y xem t&aacute;c dụng của n&oacute; mang lại khi sử dụng nh&eacute;</p>
                    
                    <p><strong>Giữ &aacute;o kh&ocirc;ng bị bung khi sơ vin<br />
                    <img alt="Đai giữ áo sơ mi dài" src="https://storage.googleapis.com/daisovin/dai-so-vin-dai2.jpg" style="height:384px; width:610px" /></strong><br />
                    Với thiết kế 3 kẹp bao gồm 2 đầu &aacute;o v&agrave; 1 đầu tất. Thật kh&oacute; để &aacute;o của bạn c&oacute; thể tuột ra ngo&agrave;i khi sử dụng. Bạn c&oacute; thể y&ecirc;n t&acirc;m đi lại, thậm ch&iacute; l&agrave; chạy nhảy, vận động mạnh hết cỡ th&igrave; trạng th&aacute;i của bạn vẫn sẽ quay lại như l&uacute;c ban đầu. Th&ecirc;m nữa l&agrave; đai sơ vin d&agrave;i c&oacute; độ co gi&atilde;n, đ&agrave;n hồi rất tốt. Đảm bảo cho việc d&acirc;y đai kh&ocirc;ng bị căng trong qu&aacute; tr&igrave;nh sử dụng</p>
                    
                    <p><strong>Đơn giản để sử dụng</strong><br />
                    Chỉ với 2 bước đơn giản dưới đ&acirc;y:<br />
                    <strong>Bước 1: </strong>Kẹp đ&acirc;y đai sơ vin d&agrave;i v&agrave;o đầu &aacute;o v&agrave; tất<br />
                    <strong>Bước 2: </strong>Chỉnh độ d&agrave;i d&acirc;y cho ph&ugrave; hợp bằng khuy ở giữa d&acirc;y<br />
                    Thời gian trung b&igrave;nh cho người mới sử dụng khoảng 2 ph&uacute;t. V&agrave; khi bạn sử dụng quen th&igrave; chỉ trong 20s bạn đ&atilde; c&oacute; thể ho&agrave;n th&agrave;nh 2 bước tr&ecirc;n<br />
                    <br />
                    <strong>Kh&ocirc;ng bị cộm, vướng v&iacute;u kh&oacute; chịu khi sử dụng</strong><br />
                    Trong thời gian đầu sử dụng, bạn sẽ cảm thấy chưa được quen lắm với việc c&oacute; một vật g&igrave; đ&oacute; đang ở trong quần m&igrave;nh. Ch&uacute;ng t&ocirc;i cũng từng c&oacute; cảm gi&aacute;c đ&oacute; ở những lần thứ 1, lần thứ 2, lần thứ 3 sử dụng. Nhưng những lần tiếp theo, bạn sẽ cảm thấy ho&agrave;n to&agrave;n tho&aacute;i m&aacute;i v&agrave; tự tin<br />
                    <br />
                    <strong>Kh&ocirc;ng g&acirc;y hư tổn cho &aacute;o quần<br />
                    <img alt="Đầu kẹp đai sơ vin dài" src="https://storage.googleapis.com/daisovin/dai_so_vin_dai_dau_kep.jpg" style="height:657px; width:600px" /></strong><br />
                    Với mỗi đầu kẹp được thiết kế lớp bằng inox đem lại sự chắc chắn. C&ugrave;ng với đ&oacute; l&agrave; lớp nhựa mềm b&ecirc;n trong để giữ &aacute;o bạn được chắc hơn v&agrave; đảm bảo 100% kh&ocirc;ng g&acirc;y hư tổn l&ecirc;n chiếc &aacute;o sơ mi<br />
                    <br />
                    <strong>Mọi người đều c&oacute; thể sử dụng được</strong><br />
                    Chiếc đai sơ mi d&agrave;i c&oacute; thể sử dụng được cho mọi đối tượng: học sinh, sinh vi&ecirc;n, người đi l&agrave;m, con trai, con g&aacute;i ... đơn giản bởi v&igrave; n&oacute; c&oacute; kẹp ở giữa d&acirc;y. C&oacute; thể k&eacute;o d&agrave;i hay r&uacute;t ngắn lại khoảng c&aacute;ch từ &aacute;o đến tất của bạn một c&aacute;ch dễ d&agrave;ng<br />
                    <br />
                    <strong>So s&aacute;nh với giải ph&aacute;p kh&aacute;c</strong><br />
                    C&oacute; một số phương ph&aacute;p kh&aacute;c như: sử dụng&nbsp;underwear, thắt lưng chặt hơn, d&ugrave;ng &aacute;o sơ mi d&agrave;i hơn ... nhưng thật sự c&aacute;c phương ph&aacute;p n&agrave;y đều mang lại hiệu quả kh&ocirc;ng tốt với người sử dụng.<br />
                    Ở c&aacute;c nước Ch&acirc;u &Acirc;u, đặc biệt l&agrave; Mỹ, người ta hay sử dụng sản phẩm c&ugrave;ng loại đến từ&nbsp;<strong>KK&amp;Jay</strong>&nbsp;hay&nbsp;<strong>NVHolder</strong>. Ch&uacute;ng t&ocirc;i ho&agrave;n to&agrave;n tin tưởng chất lượng v&agrave; tiện &iacute;ch m&agrave; sản phẩm ch&uacute;ng t&ocirc;i mang đến c&oacute; thể đ&aacute;p ứng được mọi người ti&ecirc;u d&ugrave;ng.<br />
                    Ngo&agrave;i ra ch&uacute;ng t&ocirc;i c&ograve;n c&oacute; một giải ph&aacute;p kh&aacute;c để gi&uacute;p bạn c&oacute; thể thoải m&aacute;i cả ng&agrave;y d&agrave;i l&agrave;m việc khi sơ vin đ&oacute; l&agrave;&nbsp;<a href="https://www.daisovin.com/san-pham/dai-so-vin-ngan">Đai sơ vin ngắn</a><br />
                    <br />
                    <strong>Giao h&agrave;ng nhanh</strong><br />
                    Hiện nay chúng tôi có nhiều cơ sở ở Hà Nội và Hồ Chí Minh, nên sản phẩm của bạn sẽ được giao đi trong ng&agrave;y. Đảm bảo ho&agrave;n tiền 100% nếu sản phẩm kh&ocirc;ng mang lại lợi &iacute;ch thiết thực cho bạn</p>      

                    <div class="post-detail">
                        <div class="rating">
                            <div class="star">
                                <i class="fa fa-star voted"></i>
                                <i class="fa fa-star voted"></i>
                                <i class="fa fa-star voted"></i>
                                <i class="fa fa-star voted"></i>
                                <i class="fa fa-star voted"></i>
                            </div>
        
                            <div class="desc">
                                Xếp hạng: 4.7 - &lrm;21 phiếu bầu
                            </div>
                        </div>
                    </div>
            </div>

            <div class="product-related">
                <h3>Sản phẩm liên quan</h3>
                <div>
                    <a href="/san-pham/dai-so-vin-ngan">
                        <img src="https://storage.googleapis.com/daisovin/dai-so-vin-ngan2.jpg" alt="Đai giữ áo sơ mi ngắn">
                        <h6 class="text-center text-lg-left">Đai giữ áo sơ mi ngắn</h6>
                        <p class="product-price">
                            <strike>169.000₫</strike> <strong>69.000₫</strong></p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News -->
<script type="application/ld+json">
                    
    {
    "@context": "http://schema.org/",
    "@type": "Product",
    "name": "Đai giữ áo sơ mi dài", 
    "image": "https://storage.googleapis.com/daisovin/dai-so-vin-dai.jpg",
    "description": "Đai giữ áo sơ mi dài. Giúp áo sơ mi không bị bung ra khỏi quần khi sơ vin.",
    "sku": "daisovindai",
    "mpn": "2121",
    "brand": {
        "@type": "Thing",
        "name": "DaiSoVin"
    },  
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.7",
        "reviewCount": "21"
    },
    "review": {
        "@type": "Review",
        "reviewRating": {
            "@type": "Rating",
            "ratingValue": "4",
            "bestRating": "5"
        },
        "author": {
            "@type": "Person",
            "name": "Đai Sơ Vin"
        }
    },
    "offers": {
        "@type": "Offer",
        "url": "https://daisovin.com/san-pham/dai-so-vin-dai",
        "priceCurrency": "VND",
        "price": "69000",
        "priceValidUntil": "2020-11-05",
        "itemCondition": "https://schema.org/UsedCondition",
        "availability": "https://schema.org/InStock",
        "seller": {
        "@type": "Organization",
        "name": "DaiSoVin"
        }
    }
    }
</script>

@endsection