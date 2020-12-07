<?php date_default_timezone_set('Asia/Ho_Chi_Minh');?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
    <title>Daisovin.com - Hướng dẫn cách sơ vin đẹp cho nam giới</title>
    <atom:link href="https://daisovin.com/rss" rel="self" type="application/rss+xml" />
    <description>Hướng dẫn cách sơ vin, đóng thùng đẹp cho nam giới. Cung cấp sản phẩm đai giữ áo sơ mi, giúp áo sơ mi của bạn luôn thẳng, gọn gàng khi sơ vin</description>
    <image>
    <url>
        https://daisovin.com/image/logo.png
    </url>
    <title>Daisovin.com - Hướng dẫn cách sơ vin đẹp cho nam giới</title>
    <link>https://daisovin.com/</link>
    </image>
    <pubDate><?php echo date('D, d M Y H:i:s +0700');?></pubDate>
    <generator>DaiSoVin</generator>
    <link>https://daisovin.com/rss</link>
    <?php foreach($newses as $news): ?>
    <item>
        <title>{{$news->title}}</title>
        <description>
        <![CDATA[
        <a href="https://daisovin.com/{{genNewsLink($news->category_slug, $news->slug)}}">
            <img width=384 height=211 src="{{$news->thumbnail}}">
        </a>
        </br>{{$news->description}}
        ]]>
        </description>
        <pubDate><?php echo date('D, d M Y H:i:s +0700', strtotime($news->created_at));?></pubDate>
        <link>
        https://daisovin.com/{{genNewsLink($news->category_slug, $news->slug)}}
        </link>
        <guid>
            https://daisovin.com/{{genNewsLink($news->category_slug, $news->slug)}}
        </guid>
    </item>
    <?php endforeach;?>
    </channel>
</rss>