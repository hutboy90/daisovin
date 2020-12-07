@extends('layouts.main')
@section('title', 'Daisovin.com - '. $pageTitle)
@section('seoKeyword', $seoKeyword)
@section('seoDescription', $seoDescription)
@section('canonical', 'https://daisovin.com/'.$pageSlug)
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
                <?php if(count($newses) > 0):?>
                <?php foreach($newses as $key=> $news):?>
                    <?php if ($key%2 == 0){echo '<div class="row">';}?>
                    <div class="col-md-6">  
                        <div class="zero-post">
                            <div class="post-thumb">
                                <a href="{{genNewsLink($news->category_slug, $news->slug)}}">
                                    <img src="<?php echo $news->thumbnail;?>" alt="" class="img-fluid">    
                                </a>
                            </div>
                            <div class="post-meta"><h6 class="mb-3 mt-3"><a href="{{genNewsLink($news->category_slug, $news->slug)}}">{{$news->title}}</a></h6>
                                <ul class="list-inline news-meta">
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-calendar"></i> 
                                        {{date('d-m-Y', strtotime($news->created_at))}}</a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-comments"></i> 20 Comments</a></li>
                                </ul>
                            </div>
                            <div class="post-excerpt">
                                <p>
                                    {{$news->description}}
                                </p>
                                <div class="text-right">
                                    <a href="{{genNewsLink($news->category_slug, $news->slug)}}" class="btn btn-link">Chi tiết...</a>
                                </div>
                            </div>
                        </div><!--end post-->
                    </div>
                    <?php if (($key+1)%2 == 0 || ($key == count($newses)-1)){echo '</div>';}?>
                <?php endforeach?>
                
                <hr>
                <nav aria-label="Page navigation example" class="clearfix">
                    {{ $newses->links() }}
                </nav>
                
                <?php else:?>
                Không tìm thấy kết quả
                <?php endif;?>
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
                        <?php if (count($related_newses) > 0):?>
                        <ul class="widget-news">
                            <?php foreach($related_newses as $related_news):?>
                            <li>
                                <div class="news-pic"> <img src="{{$related_news->thumbnail}}" alt="{{$related_news->title}}"> </div>
                                <div class="news-box-right">
                                    <h4 class="news-title"><a href="{{genNewsLink($related_news->category_slug, $related_news->slug)}}" title="{{$related_news->title}}">{{$related_news->title}}</a></h4>
                                    <div class="news-meta">{{date('d-m-Y', strtotime($related_news->created_at))}}</a></div>
                                </div>
                            </li>
                            <?php endforeach;?>
                        </ul>
                        <?php endif;?>
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