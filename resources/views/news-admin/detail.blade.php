@extends('layouts.main')
@section('title', $news['slug'])
@section('canonical', 'https://daisovin.com/tin-tuc/'.$news['slug'])
@section('content')
<div class="page-breadcrumb">
    <div class="content-table">
        <div class="content-middle">
            <div class="container text-center">
                <h1>Những cách sơ vin đẹp nhất</h1>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">                             
            <div class="col-lg-8">
                <div class="zero-post">
                    <div class="post-thumb">
                        <img src="{{$news['thumbnail']}}" alt="{{$news['title']}}" class="img-fluid">
                    </div>
                    <div class="post-meta"><h4 class="mb-3 mt-3"><a href="#">{{$news['title']}}</a></h4>
                        <ul class="list-inline news-meta">
                            <li class="list-inline-item">
                                <a href="#">Ngày đăng: {{date('d-m-Y', strtotime($news['created_at']))}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="post-content">
                        <p>
                            {{$news->description}}
                        </p>
                        <?php echo $news->content;?>
                    </div>

                    <div class="related-post">
                        <h3><i class="lnr lnr-thumbs-up" aria-hidden="true"></i> Bài Viết liên quan </h3>
                        <ul>
                            <?php foreach($related_newses as $related_news):?>
                            <li>
                                <h4 class="news-title"><a href="/tin-tuc/{{$related_news->slug}}" title="{{$related_news->title}}">{{$related_news->title}}</a></h4>
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
                            <?php foreach($related_newses as $related_news):?>
                            <li>
                                <div class="news-pic"> <img src="{{$related_news->thumbnail}}" alt="{{$related_news->title}}"> </div>
                                <div class="news-box-right">
                                    <h4 class="news-title"><a href="/tin-tuc/{{$related_news->slug}}" title="{{$related_news->title}}">{{$related_news->title}}</a></h4>
                                    <div class="news-meta">{{date('d-m-Y', strtotime($related_news->created_at))}}</a></div>
                                </div>
                            </li>
                            <?php endforeach;?>
                        </ul>

                    </div>
                    <div class="sidebar-widget tags-widget mb-1">
                        <h4 class="widget-title">Tags</h4>
                        <a href="#">Sơ vin</a>
                        <a href="#">Mẹo sơ vin</a>
                        <a href="#">Cách sơ vin</a>
                        <a href="#">Cách đóng thùng</a>
                        <a href="#">Phong cách sơ vin</a>
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