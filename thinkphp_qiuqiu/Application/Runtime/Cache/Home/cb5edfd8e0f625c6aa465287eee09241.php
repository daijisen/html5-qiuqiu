<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>新闻页</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" charset="UTF-8">
    <link rel="stylesheet" href="/thinkphp_3.2.3/Public/front/res/jquery.mobile-1.4.5.min.css">
    <link rel='stylesheet' id='camera-css'  href='/thinkphp_3.2.3/Public/front/css/camera.css' type='text/css' media='all'/>
    <style type="text/css">

        .con{
            width:100%;
            float:left;
        }
        .ww{
            width:100%;
            float:left;
        }
        .left{
            width:70%;
            float:left;

        }
        .right{
            width:30%;
            float:left;

        }
    </style>

    <script src="/thinkphp_3.2.3/Public/front/res/jquery-2.2.2.js"></script>
    <script src="/thinkphp_3.2.3/Public/front/res/jquery.mobile-1.4.5.min.js"></script>
    <script type='text/javascript' src='/thinkphp_3.2.3/Public/front/scripts/jquery.min.js'></script>
    <script type='text/javascript' src='/thinkphp_3.2.3/Public/front/scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='/thinkphp_3.2.3/Public/front/scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='/thinkphp_3.2.3/Public/front/scripts/camera.min.js'></script>
</head>
<body>
<header data-am-widget="header">
<div data-role="header" data-theme="a">
    <a href="<?php echo U('Home/news/newspage');?>" data-role="button" data-icon="arrow-l"  rel="external">新闻</a>
    <h1>NBA</h1>
</div>
</header>

<div data-role="content">
    <h3>赛后，勇士胜鹈鹕，库里破三分记录</h3>
    <p>来自两小时前</p>
    <br>----------
    <div class="img">
        <img src="/thinkphp_3.2.3/Public/front/images/114.png" height="220px" width="380px">
    </div>
    <p>体育11月8日讯 今天勇士回到主场迎战鹈鹕，戴维斯首节就砍下12分让鹈鹕稍占上风，而找到手感的库里单节命中三记三分将比分反差，此届初在双方轮换阵容短暂
    的相持后，勇士连续打出反击，其间库里再命中三记三分，率队打出一波20-3瞬间拉开比分，戴维斯带队趁势反击完成反超。</p>
</div>

<div data-role="footer" data-position="fixed" data-type="horizontal">
    <div>    <textarea name="content" rows="4" cols="80" style="width:80%"  onpropertychange="if(this.scrollHeight>80) this.style.posHeight=this.scrollHeight+5">我要评论...</textarea>

    </div>

</div>
</body>
</html>