@extends('layouts.main')
@section('title', $pageTitle)
@section('seoKeyword', $seoKeyword)
@section('seoDescription', $seoDescription)
<?php
    $canonical = 'https://daisovin.com/tin-tuc/'.$news['slug'];
    if ($news['slug']=="day-kep-ao-so-mi-la-gi") {
        $canonical = 'https://daisovin.com/san-pham/dai-so-vin-ngan';
    }
?>
@section('canonical', $canonical)
<?php if($news['schema']) { echo $news['schema'];}?>
@section('content')
<div class="page-breadcrumb">
    <div class="content-table">
        <div class="content-middle">
            <div class="container text-center">
                
            </div>
        </div>
    </div>
</div>
<section class="post-detail">
    <div class="container">
        <div class="row">                             
            <div class="col-lg-8">
                <div class="breadcrumb">
                    Trang chủ > 
                    <a href="/{{$news['category_slug']}}"><h2>{{$news['category_title']}}</h2></a>
                </div>  
                <div class="zero-post">
                    <div class="post-meta">
                        <ul class="list-inline news-meta">
                            <li class="list-inline-item">
                                Ngày đăng: {{date('d-m-Y', strtotime($news['created_at']))}}
                            </li>
                        </ul>
                        <h1 class="mb-3 mt-3">{{$news['title']}}</h1>
                    </div>
                    <div class="post-content clearfix">
                        <h3>
                            {{$news->description}}
                        </h3>
                        <div class="catalogue">
                            <p class="title">Mục lục:<span class="toc_toggle"></span></p>
                            <ul class="toc_list">
                                <?php echo genCatalogue($news->content);?>
                            </ul>
                        </div>
                        <?php echo $news->content;?>

                        <div class="rating">
                            <div class="star">
                                <i class="fa fa-star voted"></i>
                                <i class="fa fa-star voted"></i>
                                <i class="fa fa-star voted"></i>
                                <i class="fa fa-star voted"></i>
                                <i class="fa fa-star voted"></i>
                            </div>

                            <div class="desc">
                                Xếp hạng: 5 - ‎1 phiếu bầu
                            </div>
                        </div>
                    </div>

                    <div class="related-post">
                        <h3 class="f16"><i class="lnr lnr-thumbs-up" aria-hidden="true"></i> Bài Viết liên quan </h3>
                        <ul>
                            <?php foreach($related_newses as $related_news):?>
                            <li>
                                <h4 class="news-title">
                                    <a href="{{genNewsLink($related_news->category_slug, $related_news->slug)}}">
                                        {{$related_news->title}}
                                    </a>
                                </h4>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </div>

                </div>
                
            </div>
            <div class="col-lg-4">
                <div class="zero-sidebar"> 
                    <div class="sidebar-widget">
                        <h4 class="widget-title">Tìm kiếm</h4>
                        <div class="beside-search">
                            <form action='/tin-tuc' method='GET'>
                                <input type="text" name='keyword' class="form-control" placeholder="Từ khoá...">
                                <button type="sumit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div><!--sidebar widget-->
                    <div class="sidebar-widget">
                        <h4 class="widget-title">Tin nổi bật</h4>
                        <ul class="widget-news">
                            <?php foreach($related_featured_newses as $related_featured_news):?>
                            <li>
                                <div class="news-pic"> <img src="{{$related_featured_news->thumbnail}}" alt="{{$related_featured_news->title}}"> </div>
                                <div class="news-box-right">
                                    <h4 class="news-title">
                                        <a href="{{genNewsLink($related_featured_news->category_slug, $related_featured_news->slug)}}">
                                            {{$related_featured_news->title}}
                                        </a>
                                    </h4>
                                    <div class="news-meta">{{date('d-m-Y', strtotime($related_featured_news->created_at))}}</a></div>
                                </div>
                            </li>
                            <?php endforeach;?>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End News -->
<!-- Section Newsletter -->
<section class="bg-newsletter text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 ml-auto mr-auto wow fadeInUp text-center text-white" style="visibility: hidden; animation-name: none;">
                <h2 class="text-white text-uppercase">Theo dõi chúng tôi</h2>
                <p>Chúng tôi sẽ gửi cho bạn những hướng dẫn giúp bạn trở nên lịch lãm</p>
                <div class="row">
                    <div class="col-md-8 col-lg-8 ml-auto mr-auto">
                        <form action="http://raresolution.com/themeforest/zero/v1.3/html/mailchimp/process-subscribe.php" id="mc-form" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-12 col-lg-8 px-md-0 px-lg-2">
                                    <div class="form-group">
                                        <input type="text" name="mc_email" required="required" class="form-control" placeholder="Địa chỉ email..." aria-required="true">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-4 px-md-0">
                                    <input type="submit" name="mc_add" class="btn btn-cta btn-sm mb-4" value="Theo dõi">
                                </div>
                            </div>
                            <div class="text-center" id="mc-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection