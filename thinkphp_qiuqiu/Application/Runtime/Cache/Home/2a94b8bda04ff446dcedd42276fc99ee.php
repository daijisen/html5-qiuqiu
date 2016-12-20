<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/css/sm.min.css">
    <script type='text/javascript' src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/jquery.min.js' charset='utf-8'></script>
    <script type='text/javascript' src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/zepto.min.js' charset='utf-8'></script>
    <script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/config.js"></script>
    <script type='text/javascript' src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/sm.min.js' charset='utf-8'></script>

    <script type='text/javascript' src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/sm-extend.min.js' charset='utf-8'></script>
    <script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/icon/iconfont.js"></script>
    <link rel="stylesheet" href="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/css/yinyong.css">
    <title>求球</title>
</head>
<style type="text/css">
    .icon {
        width: 35px; height: 35px;

    }
    .bar.bar-nav{
        background: url("/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/1.png");
    }
    .page{
        background: url("/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/19.png");
        background-size: cover;
    }
    .bar.bar-tab{
        background: url("/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/15.jpg");
    }

    .tx{
        border: 1px solid #dedede;border-radius:50%;overflow: hidden;
    }
    .tab-item.external.active{
        background-color: #cbc5c8;
    }
    .icon.pull-left{
        width: 2em;
        height: 100%;
        font-size: larger;
        color: #93f7ff;
        fill: white;
    }
    .content.fabu{
        padding: 20px;
        background-color: #ffffff;
    }
    .shuru{
        border: 0;
        background-color: #ffffff;
        width: 100%;
        height: 100%;
    }
    .icon1{
        width: 2em; height: 100%;
        vertical-align: -0.15em;
        fill: black;
        overflow: hidden;
    }
    .icon{
        width: 2em; height: 100%;
        vertical-align: -0.15em;
        fill: black;
        overflow: hidden;
    }
    .icon.qiu{
        width: 40px;
        height: 40px;
    }
    .list-block.d2{
        margin-top: 0px;
    }
    .list-block.news{
        margin-bottom: 10px;
    }

    .icon.pull-left.d1{
        width: 2em;
        height: 40px;
        font-size: larger;
        color: #93f7ff;
    }
    .card-content{
        margin-left: 12px;
    }
    .card-content.d5{

    }
    .card.facebook-card{
        padding-bottom: 5px;
    }
    .facebook-date{
        font-size: smaller;
    }
    .icon.zuqiu{
        width:44px;
        height: 44px;
    }
    .tag{
        margin-bottom: 10px;
        margin-top: 10px;
    }
</style>
<body>
<div class="cover">
<div class="page-group">
    <!--首页-->
    <div class="page page-current" id="index">
        <header class="bar bar-nav">

            <h1 class="title" style="color: white">
                <svg class="icon" aria-hidden="true" style="width: 30px;height: 30px">
                    <use xlink:href="#icon-xiao"></use>
                </svg>
                求球
            </h1>
            <button class="button button-link button-nav pull-right">

            </button>
        </header>
        <div class="content"></div>
        <nav class="bar bar-tab">

            <a class="tab-item active" href="#index">
                <span class="icon">
                    <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-feihang" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item  active" href="#news">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-hengqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">新闻</span>
            </a>
            <a class="tab-item active" href="#page-fabu">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-xingqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">组团</span>
            </a>
            <a class="tab-item active" href="#me">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-yuhangyuan" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">我的</span>
            </a>
        </nav>

        <div class="content">
            <?php if(is_array($indexdata)): $i = 0; $__LIST__ = $indexdata;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="card facebook-card">
                    <div class="card-header no-border">
                        <div class="facebook-avatar"><img class="tx" src="/html5-qiuqiu/thinkphp_qiuqiu/Public/uploads<?php echo ($vo["head"]); ?>" width="34" height="34"></div>
                        <div class="facebook-name"><?php echo ($vo["username"]); ?></div>
                        <div class="facebook-date"><?php echo ($vo["signature"]); ?></div>
                    </div>
                    <div class="card-content">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/uploads<?php echo ($vo["uploadpic"]); ?>" width="100%">
                        <div class="card-content-inner">
                            <div class="content-block">
                                <p>#<a ><?php echo ($vo["class"]); ?></a>#</p>
                                <p><?php echo ($vo["ncontent"]); ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer no-border">
                        <a href="#" class="link">
						<span class="badge">
							<svg class="icon-pinglun" aria-hidden="true" style="width: 30px;height: 30px">
							<use xlink:href="#icon-duoseqiu"></use>
						</svg>团队（<?php echo ($vo["num"]); ?>/10)</span>
                        </a>
                        <a href="#" class="link">
						<span class="badge">
							<svg class="icon-pinglun" aria-hidden="true" style="width: 30px;height: 30px">
							<use xlink:href="#icon-huojian"></use>
						</svg>加入团队
						</span>
                        </a>
                        <a href="#" class="link">
						<span class="badge">
							<svg class="icon-pinglun" aria-hidden="true" style="width: 30px;height: 30px">
							<use xlink:href="#icon-yuhangyuan2"></use>
						</svg>评论一波
						</span>
                        </a>
                    </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <!--新闻列表页--> <div class="page" id="news">
    <!-- 标题栏 -->
    <header class="bar bar-nav">

        <h1 class="title" style="color: white">求球</h1>
    </header>

    <!-- 工具栏 -->
    <nav class="bar bar-tab">

        <a class="tab-item active" href="#index">
                <span class="icon">
                    <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-feihang" class="shouhui"></use>
                    </svg>
                </span>
            <span class="tab-label">首页</span>
        </a>
        <a class="tab-item  active" href="#news">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-hengqiu" class="shouhui"></use>
                    </svg>
                </span>
            <span class="tab-label">新闻</span>
        </a>
        <a class="tab-item active" href="#page-fabu">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-xingqiu" class="shouhui"></use>
                    </svg>
                </span>
            <span class="tab-label">组团</span>
        </a>
        <a class="tab-item active" href="#me">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-yuhangyuan" class="shouhui"></use>
                    </svg>
                </span>
            <span class="tab-label">我的</span>
        </a>
    </nav>

    <!-- 这里是页面内容区 -->
    <div class="content">


        <div class="content-block tag">
            <div class="row">
                <div class="col-20"><a href="#" class="button button-big button-fill button-danger">NBA</a></div>
                <div class="col-20"><a href="#cba" class="button button-big button-fill button-success">CBA</a></div>
                <div class="col-20"><a href="#zhongchao" class="button button-big button-fill button-success">中超</a></div>
                <div class="col-20"><a href="#xijia" class="button button-big button-fill button-success">西甲</a></div>
                <div class="col-20"><a href="#yingchao" class="button button-big button-fill button-success">英超</a></div>
            </div>
        </div>
        <div class="list-block media-list tag">
            <ul>
                <?php if(is_array($newsNBA)): $i = 0; $__LIST__ = $newsNBA;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a href="#news-content" class="item-link item-content">
                            <div class="item-media"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/uploads<?php echo ($vo["newpic"]); ?>" style='width: 4rem;'></div>
                            <div class="item-inner">
                                <div class="item-title-row">
                                    <div class="item-title"><?php echo ($vo["title"]); ?></div>

                                </div>

                                <div class="item-text"><?php echo ($vo["ncontent"]); ?></div>
                            </div>
                        </a>
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
    </div>
</div>
    <!--新闻内容页--><div class="page" id="news-content">
    <header class="bar bar-nav">
        <a href="#zhongchao">
            <svg class="icon pull-left" aria-hidden="true">
                <use xlink:href="#icon-shouhui02" class="shouhui"></use>
            </svg>
        </a>
        <h1 class="title">NBA</h1>
        <button class="button button-link button-nav pull-right">
            <a href="#" style="color: white"> 刷新</a>
        </button>

    </header>

    <div class="content">
        <div class="content-padded">
            <h2>赛后，勇士胜鹈鹕，库里破三分记录<br><small>来源：虎扑体育</small></h2>
            <div>
                <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/10.jpg" style="width: 100%">
            </div>

            <p>体育11月8日讯 今天勇士回到主场迎战鹈鹕，戴维斯首节就砍下12分让鹈鹕稍占上风，而找到手感的库里单节命中三记三分将比分反差，此届初在双方轮换阵容短暂
                的相持后，勇士连续打出反击，期间库里再命中三记三分，率队打出一波20-3瞬间拉开比分，戴维斯带队趁势反击完成反超。</p>
        </div>
        <div class="list-block news">
            <ul>
                <li class="item-content">
                    <div class="item-media">
                        <svg class="icon pull-left d1" aria-hidden="true">
                            <use xlink:href="#icon-loudspeaker" class="shouhui"></use>
                        </svg>
                    </div>
                    <div class="item-inner">
                        <div class="item-title">一起吐槽</div>

                    </div>
                </li>
            </ul>
        </div>
        <div class="ping1" >
            <div class="ping2">
                <div class="ping21">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/113.png">
                </div>
                <div class="ping22">
                    <span class="ping221"><h2>想增肥的请举手</h2></span>
                    <span class="ping222"><p>来自手机客户端</p></span>
                </div>
            </div>
            <div class="ping3">
                <p class="ping31">沃尔的人品和球品都很好，感觉沃尔是最被忽略的球星。加油，我墙我永远支持你</p>
            </div>
        </div>
        <div class="ping1" >
            <div class="ping2">
                <div class="ping21">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/115.png">
                </div>
                <div class="ping22">
                    <span class="ping221"><h2>大牛牛</h2></span>
                    <span class="ping222"><p>来自手机客户端</p></span>
                </div>
            </div>
            <div class="ping3">
                <p class="ping31">看到沃尔为小女孩去世哭了我也感动的哭了，沃尔算不上巨星，可每次看到别人黑他
                    我都感到不平，甚至有人说他是扶不起的阿斗，传球至上的控卫注定不是如今联盟的主流，可那又怎样。</p>
            </div>
        </div>

        <div class="ping1" >
            <div class="ping2">
                <div class="ping21">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/111.png">
                </div>
                <div class="ping22">
                    <span class="ping221"><h2>如果我是dj</h2></span>
                    <span class="ping222"><p>来自手机客户端</p></span>
                </div>
            </div>
            <div class="ping3">
                <p class="ping31">这好比我打王者荣耀，同样是四个人，真心带不动</p>
            </div>
        </div>

        <div class="ping1" >
            <div class="ping2">
                <div class="ping21">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/112.png">
                </div>
                <div class="ping22">
                    <span class="ping221"><h2>洛杉矶铁匠</h2></span>
                    <span class="ping222"><p>来自手机客户端</p></span>
                </div>
            </div>
            <div class="ping3">
                <p class="ping31">自从知道沃尔为小女孩一战之后，无论怎样我都不会黑沃尔，一个人的战斗</p>
            </div>
        </div>

    </div>

</div>
    <!--CBA-->
    <div class="page" id="cba">
        <!-- 标题栏 -->
        <header class="bar bar-nav ">

            <h1 class="title">求球</h1>
        </header>

        <!-- 工具栏 -->
        <nav class="bar bar-tab">

            <a class="tab-item active" href="#index">
                <span class="icon">
                    <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-feihang" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item  active" href="#news">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-hengqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">新闻</span>
            </a>
            <a class="tab-item active" href="#page-fabu">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-xingqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">组团</span>
            </a>
            <a class="tab-item active" href="#me">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-yuhangyuan" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">我的</span>
            </a>
        </nav>


        <!-- 这里是页面内容区 -->
        <div class="content">


            <div class="content-block tag">
                <div class="row">
                    <div class="col-20"><a href="#news" class="button button-big button-fill button-success">NBA</a></div>
                    <div class="col-20"><a href="#cba" class="button button-big button-fill button-danger">CBA</a></div>
                    <div class="col-20"><a href="#zhongchao" class="button button-big button-fill button-success">中超</a></div>
                    <div class="col-20"><a href="#xijia" class="button button-big button-fill button-success">西甲</a></div>
                    <div class="col-20"><a href="#yingchao" class="button button-big button-fill button-success">英超</a></div>
                </div>
            </div>
            <div class="list-block media-list tag">
                <ul>
                    <?php if(is_array($newsCBA)): $i = 0; $__LIST__ = $newsCBA;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="#news-content" class="item-link item-content">
                                <div class="item-media"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/uploads<?php echo ($vo["newpic"]); ?>" style='width: 4rem;'></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"><?php echo ($vo["title"]); ?></div>

                                    </div>

                                    <div class="item-text"><?php echo ($vo["ncontent"]); ?></div>
                                </div>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!--中超-->
    <div class="page" id="zhongchao">
        <!-- 标题栏 -->
        <header class="bar bar-nav">

            <h1 class="title">求球</h1>
        </header>

        <!-- 工具栏 -->
        <nav class="bar bar-tab">

            <a class="tab-item active" href="#index">
                <span class="icon">
                    <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-feihang" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item  active" href="#news">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-hengqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">新闻</span>
            </a>
            <a class="tab-item active" href="#page-fabu">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-xingqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">组团</span>
            </a>
            <a class="tab-item active" href="#me">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-yuhangyuan" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">我的</span>
            </a>
        </nav>


        <!-- 这里是页面内容区 -->
        <div class="content">


            <div class="content-block tag">
                <div class="row">
                    <div class="col-20"><a href="#news" class="button button-big button-fill button-success">NBA</a></div>
                    <div class="col-20"><a href="#cba" class="button button-big button-fill button-success">CBA</a></div>
                    <div class="col-20"><a href="#zhongchao" class="button button-big button-fill button-danger">中超</a></div>
                    <div class="col-20"><a href="#xijia" class="button button-big button-fill button-success">西甲</a></div>
                    <div class="col-20"><a href="#yingchao" class="button button-big button-fill button-success">英超</a></div>
                </div>
            </div>
            <div class="list-block media-list tag">
                <ul>
                    <?php if(is_array($newsZhong)): $i = 0; $__LIST__ = $newsZhong;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="#news-content" class="item-link item-content">
                                <div class="item-media"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/uploads<?php echo ($vo["newpic"]); ?>" style='width: 4rem;'></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"><?php echo ($vo["title"]); ?></div>

                                    </div>

                                    <div class="item-text"><?php echo ($vo["ncontent"]); ?></div>
                                </div>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </div>
    </div>
    <!--西甲-->
    <div class="page" id="xijia">
        <!-- 标题栏 -->
        <header class="bar bar-nav">

            <h1 class="title">求球</h1>
        </header>

        <!-- 工具栏 -->
        <nav class="bar bar-tab">

            <a class="tab-item active" href="#index">
                <span class="icon">
                    <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-feihang" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item  active" href="#news">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-hengqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">新闻</span>
            </a>
            <a class="tab-item active" href="#page-fabu">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-xingqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">组团</span>
            </a>
            <a class="tab-item active" href="#me">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-yuhangyuan" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">我的</span>
            </a>
        </nav>


        <!-- 这里是页面内容区 -->
        <div class="content">


            <div class="content-block tag">
                <div class="row">
                    <div class="col-20"><a href="#news" class="button button-big button-fill button-success">NBA</a></div>
                    <div class="col-20"><a href="#cba" class="button button-big button-fill button-success">CBA</a></div>
                    <div class="col-20"><a href="#zhongchao" class="button button-big button-fill button-success">中超</a></div>
                    <div class="col-20"><a href="#xijia" class="button button-big button-fill button-danger">西甲</a></div>
                    <div class="col-20"><a href="#yingchao" class="button button-big button-fill button-success">英超</a></div>
                </div>
            </div>
            <div class="list-block media-list tag">
                <ul>
                    <?php if(is_array($newsXi)): $i = 0; $__LIST__ = $newsXi;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="#news-content" class="item-link item-content">
                                <div class="item-media"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/uploads<?php echo ($vo["newpic"]); ?>" style='width: 4rem;'></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"><?php echo ($vo["title"]); ?></div>

                                    </div>

                                    <div class="item-text"><?php echo ($vo["ncontent"]); ?></div>
                                </div>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>



                </ul>
            </div>
        </div>
    </div>
    <!--英超-->
    <div class="page" id="yingchao">
        <!-- 标题栏 -->
        <header class="bar bar-nav">

            <h1 class="title">求球</h1>
        </header>

        <!-- 工具栏 -->
        <nav class="bar bar-tab">

            <a class="tab-item active" href="#index">
                <span class="icon">
                    <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-feihang" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item  active" href="#news">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-hengqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">新闻</span>
            </a>
            <a class="tab-item active" href="#page-fabu">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-xingqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">组团</span>
            </a>
            <a class="tab-item active" href="#me">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-yuhangyuan" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">我的</span>
            </a>
        </nav>


        <!-- 这里是页面内容区 -->
        <div class="content">


            <div class="content-block tag">
                <div class="row">
                    <div class="col-20"><a href="#news" class="button button-big button-fill button-success">NBA</a></div>
                    <div class="col-20"><a href="#cba" class="button button-big button-fill button-success">CBA</a></div>
                    <div class="col-20"><a href="#zhongchao" class="button button-big button-fill button-success">中超</a></div>
                    <div class="col-20"><a href="#xijia" class="button button-big button-fill button-success">西甲</a></div>
                    <div class="col-20"><a href="#" class="button button-big button-fill button-danger">英超</a></div>
                </div>
            </div>
            <div class="list-block media-list tag">
                <ul>
                    <?php if(is_array($newsYing)): $i = 0; $__LIST__ = $newsYing;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="#news-content" class="item-link item-content">
                                <div class="item-media"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/uploads<?php echo ($vo["newpic"]); ?>" style='width: 4rem;'></div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title"><?php echo ($vo["title"]); ?></div>

                                    </div>

                                    <div class="item-text"><?php echo ($vo["ncontent"]); ?></div>
                                </div>
                            </a>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>
        </div>
    </div>
    <!--cba内容页-->
    <div class="page" id="cba-content">
        <header class="bar bar-nav">
            <a href="#cba">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title">NBA</h1>
            <button class="button button-link button-nav pull-right">
                <a href="#" style="color: white"> 刷新</a>
            </button>

        </header>

        <div class="content">
            <div class="content-padded">
                <h2>赛后，勇士胜鹈鹕，库里破三分记录<br><small>来源：虎扑体育</small></h2>
                <div>
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/10.jpg" style="width: 100%">
                </div>

                <p>体育11月8日讯 今天勇士回到主场迎战鹈鹕，戴维斯首节就砍下12分让鹈鹕稍占上风，而找到手感的库里单节命中三记三分将比分反差，此届初在双方轮换阵容短暂
                    的相持后，勇士连续打出反击，期间库里再命中三记三分，率队打出一波20-3瞬间拉开比分，戴维斯带队趁势反击完成反超。</p>
            </div>
            <div class="list-block news">
                <ul>
                    <li class="item-content">
                        <div class="item-media">
                            <svg class="icon pull-left d1" aria-hidden="true">
                                <use xlink:href="#icon-loudspeaker" class="shouhui"></use>
                            </svg>
                        </div>
                        <div class="item-inner">
                            <div class="item-title">一起吐槽</div>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/113.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>想增肥的请举手</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">沃尔的人品和球品都很好，感觉沃尔是最被忽略的球星。加油，我墙我永远支持你</p>
                </div>
            </div>
            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/115.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>大牛牛</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">看到沃尔为小女孩去世哭了我也感动的哭了，沃尔算不上巨星，可每次看到别人黑他
                        我都感到不平，甚至有人说他是扶不起的阿斗，传球至上的控卫注定不是如今联盟的主流，可那又怎样。</p>
                </div>
            </div>

            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/111.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>如果我是dj</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">这好比我打王者荣耀，同样是四个人，真心带不动</p>
                </div>
            </div>

            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/112.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>洛杉矶铁匠</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">自从知道沃尔为小女孩一战之后，无论怎样我都不会黑沃尔，一个人的战斗</p>
                </div>
            </div>

        </div>

    </div>
    <!--中超内容页-->
    <div class="page" id="zhongchao-content">
        <header class="bar bar-nav">
            <a href="#zhongchao">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title">NBA</h1>
            <button class="button button-link button-nav pull-right">
                <a href="#" style="color: white"> 刷新</a>
            </button>

        </header>

        <div class="content">
            <div class="content-padded">
                <h2>赛后，勇士胜鹈鹕，库里破三分记录<br><small>来源：虎扑体育</small></h2>
                <div>
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/10.jpg" style="width: 100%">
                </div>

                <p>体育11月8日讯 今天勇士回到主场迎战鹈鹕，戴维斯首节就砍下12分让鹈鹕稍占上风，而找到手感的库里单节命中三记三分将比分反差，此届初在双方轮换阵容短暂
                    的相持后，勇士连续打出反击，期间库里再命中三记三分，率队打出一波20-3瞬间拉开比分，戴维斯带队趁势反击完成反超。</p>
            </div>
            <div class="list-block news">
                <ul>
                    <li class="item-content">
                        <div class="item-media">
                            <svg class="icon pull-left d1" aria-hidden="true">
                                <use xlink:href="#icon-loudspeaker" class="shouhui"></use>
                            </svg>
                        </div>
                        <div class="item-inner">
                            <div class="item-title">一起吐槽</div>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/113.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>想增肥的请举手</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">沃尔的人品和球品都很好，感觉沃尔是最被忽略的球星。加油，我墙我永远支持你</p>
                </div>
            </div>
            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/115.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>大牛牛</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">看到沃尔为小女孩去世哭了我也感动的哭了，沃尔算不上巨星，可每次看到别人黑他
                        我都感到不平，甚至有人说他是扶不起的阿斗，传球至上的控卫注定不是如今联盟的主流，可那又怎样。</p>
                </div>
            </div>

            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/111.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>如果我是dj</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">这好比我打王者荣耀，同样是四个人，真心带不动</p>
                </div>
            </div>

            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/112.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>洛杉矶铁匠</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">自从知道沃尔为小女孩一战之后，无论怎样我都不会黑沃尔，一个人的战斗</p>
                </div>
            </div>

        </div>

    </div>
    <!--西甲内容-->
    <div class="page" id="xijia-content">
        <header class="bar bar-nav">
            <a href="#xijia">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title">NBA</h1>
            <button class="button button-link button-nav pull-right">
                <a href="#" style="color: white"> 刷新</a>
            </button>

        </header>

        <div class="content">
            <div class="content-padded">
                <h2>赛后，勇士胜鹈鹕，库里破三分记录<br><small>来源：虎扑体育</small></h2>
                <div>
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/10.jpg" style="width: 100%">
                </div>

                <p>体育11月8日讯 今天勇士回到主场迎战鹈鹕，戴维斯首节就砍下12分让鹈鹕稍占上风，而找到手感的库里单节命中三记三分将比分反差，此届初在双方轮换阵容短暂
                    的相持后，勇士连续打出反击，期间库里再命中三记三分，率队打出一波20-3瞬间拉开比分，戴维斯带队趁势反击完成反超。</p>
            </div>
            <div class="list-block news">
                <ul>
                    <li class="item-content">
                        <div class="item-media">
                            <svg class="icon pull-left d1" aria-hidden="true">
                                <use xlink:href="#icon-loudspeaker" class="shouhui"></use>
                            </svg>
                        </div>
                        <div class="item-inner">
                            <div class="item-title">一起吐槽</div>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/113.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>想增肥的请举手</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">沃尔的人品和球品都很好，感觉沃尔是最被忽略的球星。加油，我墙我永远支持你</p>
                </div>
            </div>
            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/115.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>大牛牛</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">看到沃尔为小女孩去世哭了我也感动的哭了，沃尔算不上巨星，可每次看到别人黑他
                        我都感到不平，甚至有人说他是扶不起的阿斗，传球至上的控卫注定不是如今联盟的主流，可那又怎样。</p>
                </div>
            </div>

            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/111.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>如果我是dj</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">这好比我打王者荣耀，同样是四个人，真心带不动</p>
                </div>
            </div>

            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/112.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>洛杉矶铁匠</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">自从知道沃尔为小女孩一战之后，无论怎样我都不会黑沃尔，一个人的战斗</p>
                </div>
            </div>

        </div>

    </div>
    <!--英超内容页-->
    <div class="page" id="yingchao-content">
        <header class="bar bar-nav">
            <a href="#yingchao">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title">NBA</h1>
            <button class="button button-link button-nav pull-right">
                <a href="#" style="color: white"> 刷新</a>
            </button>

        </header>

        <div class="content">
            <div class="content-padded">
                <h2>赛后，勇士胜鹈鹕，库里破三分记录<br><small>来源：虎扑体育</small></h2>
                <div>
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/10.jpg" style="width: 100%">
                </div>

                <p>体育11月8日讯 今天勇士回到主场迎战鹈鹕，戴维斯首节就砍下12分让鹈鹕稍占上风，而找到手感的库里单节命中三记三分将比分反差，此届初在双方轮换阵容短暂
                    的相持后，勇士连续打出反击，期间库里再命中三记三分，率队打出一波20-3瞬间拉开比分，戴维斯带队趁势反击完成反超。</p>
            </div>
            <div class="list-block news">
                <ul>
                    <li class="item-content">
                        <div class="item-media">
                            <svg class="icon pull-left d1" aria-hidden="true">
                                <use xlink:href="#icon-loudspeaker" class="shouhui"></use>
                            </svg>
                        </div>
                        <div class="item-inner">
                            <div class="item-title">一起吐槽</div>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/113.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>想增肥的请举手</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">沃尔的人品和球品都很好，感觉沃尔是最被忽略的球星。加油，我墙我永远支持你</p>
                </div>
            </div>
            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/115.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>大牛牛</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">看到沃尔为小女孩去世哭了我也感动的哭了，沃尔算不上巨星，可每次看到别人黑他
                        我都感到不平，甚至有人说他是扶不起的阿斗，传球至上的控卫注定不是如今联盟的主流，可那又怎样。</p>
                </div>
            </div>

            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/111.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>如果我是dj</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">这好比我打王者荣耀，同样是四个人，真心带不动</p>
                </div>
            </div>

            <div class="ping1" >
                <div class="ping2">
                    <div class="ping21">
                        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/112.png">
                    </div>
                    <div class="ping22">
                        <span class="ping221"><h2>洛杉矶铁匠</h2></span>
                        <span class="ping222"><p>来自手机客户端</p></span>
                    </div>
                </div>
                <div class="ping3">
                    <p class="ping31">自从知道沃尔为小女孩一战之后，无论怎样我都不会黑沃尔，一个人的战斗</p>
                </div>
            </div>

        </div>

    </div>
    <!--发布页-->
    <div class="page" id="page-fabu">
        <header class="bar bar-nav">
            <a href="#index">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-quxiao1" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title">我要组团</h1>
            <a href="#">
                <svg class="icon pull-right" aria-hidden="true">
                    <use xlink:href="#icon-ok" class="shouhui"></use>
                </svg>
            </a>
        </header>

        <!-- 工具栏 -->
        <nav class="bar bar-tab">
            <a class="tab-item external" href="#">
                <span class="icon">
                    <svg class="icon1" aria-hidden="true">
                       <use xlink:href="#icon-weixiao" class="shouhui"></use>
                    </svg>
                </span>
            </a>
            <a class="tab-item external" href="#">
                <span class="icon">
                    <svg class="icon1" aria-hidden="true">
                       <use xlink:href="#icon-xiangce" class="shouhui"></use>
                    </svg>
                </span>
            </a>
            <a class="tab-item external" href="#">
                <span class="icon">
                    <svg class="icon1" aria-hidden="true">
                       <use xlink:href="#icon-xiangji" class="shouhui"></use>
                    </svg>
                </span>
            </a>

        </nav>

        <!-- 这里是页面内容区 -->
        <div class="content fabu"  >
            <div class="content-block">
                <div class="list-block">
                    <ul>
                        <!-- Text inputs -->
                        <li>
                            <div class="item-content">
                                <div class="item-inner">

                                    <div class="item-input">
                                        <input type="text" placeholder="选择分类" id='picker-ball' readonly/>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <textarea  name="textarea" id="textarea" class="shuru"data-position="incline" type="number" placeholder="快来组团吧~"></textarea>

        </div>
    </div>
    <!--个人中心页-->
    <div class="page" id="me">
        <header class="bar bar-nav">
            <h1 class="title" style="color: white">求球</h1>
        </header>
        <!-- 你的html代码 -->
        <!-- 这里是页面内容区 -->
        <div class="content">
            <div class="list-block">
                <ul>
                    <li class="item-content">
                        <div class="item-media">
                            <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/3.png" width="50px" height="50" class="tx">
                        </div>
                        <div class="item-inner">
                            <div class="item-title">酱油<br><small class="d1">简介:软件学院扛把子</small></div>
                            <div class="item-after"></div>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="list-block d2">
                <ul>
                    <li><a href="#callme" class="item-content item-link">
                        <div class="item-media">
                            <svg class="icon qiu" aria-hidden="true">
                                <use xlink:href="#icon-lanqiu" class="qiu"></use>
                            </svg>
                        </div>
                        <div class="item-inner">
                            <div class="item-title">有人叫我</div>
                            <span class="badge" style="background-color: red;color:white">2</span>


                        </div></a>
                    </li>

                    <li ><a href="#richeng" class="item-content item-link">
                        <div class="item-media">
                            <svg class="icon qiu" aria-hidden="true">
                                <use xlink:href="#icon-waixingren" class="qiu"></use>
                            </svg>
                        </div>
                        <div class="item-inner">

                            <div class="item-title">干了点啥</div>

                        </div></a>
                    </li>
                </ul>
            </div>
            <div class="list-block d3">
                <ul>

                    <li ><a href="#set" class="item-content item-link">
                        <div class="item-media">
                            <svg class="icon qiu" aria-hidden="true">
                                <use xlink:href="#icon-raohang" class="qiu"></use>
                            </svg>
                        </div>
                        <div class="item-inner">
                            <div class="item-title">设置</div>
                        </div></a>
                    </li>

                    <li><a href="#shop" class="item-content item-link">
                        <div class="item-media">
                            <svg class="icon qiu" aria-hidden="true">
                                <use xlink:href="#icon-taikong" class="qiu"></use>
                            </svg>
                        </div>
                        <div class="item-inner">

                            <div class="item-title">买买买！</div>

                        </div></a>
                    </li>

                </ul>
            </div>
            <div class="list-block d3">
                <ul>
                    <li class="item-content">
                        <div class="item-media">
                            <svg class="icon qiu" aria-hidden="true">
                                <use xlink:href="#icon-xingxi" class="qiu"></use>
                            </svg>
                        </div>
                        <div class="item-inner">

                            <div class="item-title">夜间模式</div>
                            <div class="item-after">
                                <div class="item-input">
                                    <label class="label-switch" id="night">
                                        <input type="checkbox">
                                        <div class="checkbox"></div>
                                    </label>
                                </div>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <nav class="bar bar-tab">

            <a class="tab-item active" href="#index">
                <span class="icon">
                    <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-feihang" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item  active" href="#news">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-hengqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">新闻</span>
            </a>
            <a class="tab-item active" href="#page-fabu">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-xingqiu" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">组团</span>
            </a>
            <a class="tab-item active" href="#me">
                <span class="icon">
                     <svg class="icon d4" aria-hidden="true">
                      <use xlink:href="#icon-yuhangyuan" class="shouhui"></use>
                    </svg>
                </span>
                <span class="tab-label">我的</span>
            </a>
        </nav>


    </div>
    <!--设置-->
    <div class="page" id="set">
        <header class="bar bar-nav">
            <a href="#me">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title" style="color: white">设置</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul><a href="#account">
                    <li class="item-content item-link">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">账号管理</div>
                        </div>
                    </li></a>
                    <a href="#safe">
                        <li class="item-content item-link">
                            <div class="item-media"><i class="icon icon-f7"></i></div>
                            <div class="item-inner">
                                <div class="item-title">账号安全</div>
                            </div>
                        </li></a>
                </ul>
            </div>
            <div class="list-block">
                <ul>
                    <a href="#huancun">
                        <li class="item-content item-link">
                            <div class="item-media"><i class="icon icon-f7"></i></div>
                            <div class="item-inner">
                                <div class="item-title">清除缓存</div>

                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li class="item-content item-link">
                            <div class="item-media"><i class="icon icon-f7"></i></div>
                            <div class="item-inner">
                                <div class="item-title">检查更新</div>

                            </div>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="list-block">
                <ul>
                    <a href="#aboutus">
                        <li class="item-content item-link">
                            <div class="item-media"><i class="icon icon-f7"></i></div>
                            <div class="item-inner">
                                <div class="item-title">关于我们</div>
                            </div>
                        </li>
                    </a>
                    <a href="#feedback">
                        <li class="item-content item-link">
                            <div class="item-media"><i class="icon icon-f7"></i></div>
                            <div class="item-inner">
                                <div class="item-title">意见反馈</div>
                            </div>
                        </li></a>
                </ul>
            </div>
        </div>
    </div>
    <!--有人叫我-->
    <div class="page" id="callme">
        <!-- 标题栏 -->
        <header class="bar bar-nav">
            <a href="#me">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title" style="color: white">有人叫我</h1>
            <button class="button button-link button-nav pull-right">
                刷新
            </button>

        </header>


        <!-- 这里是页面内容区 -->
        <div class="content">
            <div class="card facebook-card">
                <a href="#" class="d6  create-actions">
                    <div class="card-header no-border">
                        <div class="facebook-avatar"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/3.png" width="40" height="40" class="tx"></div>
                        <div class="facebook-name">
                            酱油
                        </div>
                        <div class="facebook-date"><small>如果世界漆黑,其实我很美</small></div>

                    </div>
                </a>
                <div class="card-content">
                    同学，老子想要和你一起踢球！！
                    <div class="card">
                        <div class="card-content d5">
                            <div class="list-block media-list">
                                <ul >
                                    <li class="item-content">
                                        <div class="item-media">
                                            <a href="#"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/tx.jpg" width="55" height="55" class="tx"></a>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                <div class="item-title">软件梅西赵子旭</div>
                                            </div>
                                            <div class="item-subtitle xiaobiaoti"><small class="xiaobiaoti">#足球#，西操场，来一个虐一个 </small></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card facebook-card">
                <a href="#" class="d6">
                    <div class="card-header no-border">
                        <div class="facebook-avatar"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/4.png" width="40" height="40" class="tx"></div>
                        <div class="facebook-name">
                            jiaomingbo
                        </div>
                        <div class="facebook-date"><small>你还要我怎样，要怎样</small></div>

                    </div>
                </a>
                <div class="card-content">
                    加入了我的队伍
                    <div class="card">
                        <div class="card-content d5">
                            <div class="list-block media-list">
                                <ul >
                                    <li class="item-content">
                                        <div class="item-media">
                                            <a href="#"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/tx.jpg" width="55" height="55" class="tx"></a>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title-row">
                                                <div class="item-title">软件梅西赵子旭</div>
                                            </div>
                                            <div class="item-subtitle xiaobiaoti"><small class="xiaobiaoti">#足球#，西操场，来一个虐一个 </small></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--评论-->
    <div class="page" id="pinglun">
        <header class="bar bar-nav">
            <a href="#callme">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-quxiao1" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title">我要评论</h1>
            <a href="#callme">
                <svg class="icon pull-right" aria-hidden="true">
                    <use xlink:href="#icon-ok" class="shouhui"></use>
                </svg>
            </a>
        </header>

        <!-- 工具栏 -->
        <nav class="bar bar-tab">
            <a class="tab-item external" href="#">
                <span class="icon">
                    <svg class="icon1" aria-hidden="true">
                       <use xlink:href="#icon-weixiao" class="shouhui"></use>
                    </svg>
                </span>
            </a>
            <a class="tab-item external" href="#">
                <span class="icon">
                    <svg class="icon1" aria-hidden="true">
                       <use xlink:href="#icon-xiangce" class="shouhui"></use>
                    </svg>
                </span>
            </a>
            <a class="tab-item external" href="#">
                <span class="icon">
                    <svg class="icon1" aria-hidden="true">
                       <use xlink:href="#icon-xiangji" class="shouhui"></use>
                    </svg>
                </span>
            </a>

        </nav>

        <!-- 这里是页面内容区 -->
        <div class="content fabu"  >


            <textarea  name="textarea" id="textarea" class="shuru"data-position="incline" type="number" placeholder="快来评论吧~~"></textarea>

        </div>
    </div>
    <!--日程-->
    <div class="page" id="richeng">
        <header class="bar bar-nav">
            <a href="#me">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title" style="color: white">都干了点啥</h1>
            <button class="button button-link button-nav pull-right">
                <a href="#richeng" style="color: white">刷新</a>
            </button>

        </header>
        <!-- 这里是页面内容区 -->
        <div class="content">
            <div class="card">
                <div class="card-header">12/5至12/11</div>
                <div class="card-content">
                    <div class="card-content-inner">
                        <div class="list-block">
                            <ul>
                                <li class="item-content">
                                    <div class="item-media">
                                        <svg class="icon zuqiu" aria-hidden="true">
                                            <use xlink:href="#icon-boot-1" class="shouhui"></use>
                                        </svg>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">踢球</div>
                                        <div class="item-after">2次</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media">
                                        <svg class="icon zuqiu" aria-hidden="true">
                                            <use xlink:href="#icon-basketball-jersey" class="shouhui"></use>
                                        </svg>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">打篮球</div>
                                        <div class="item-after">3次</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media">
                                        <svg class="icon zuqiu" aria-hidden="true">
                                            <use xlink:href="#icon-paobuji" class="shouhui"></use>
                                        </svg>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">跑步</div>
                                        <div class="item-after">6次</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media">
                                        <svg class="icon zuqiu" aria-hidden="true">
                                            <use xlink:href="#icon-xinghe" class="shouhui"></use>
                                        </svg>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">一共运动</div>
                                        <div class="item-after">11次</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <svg class="icon zuqiu" aria-hidden="true">
                        <use xlink:href="#icon-weixiao02" class="shouhui"></use>
                    </svg>
                    爱运动的男孩子都不会差哦
                </div>
            </div>
            <div class="card">
                <div class="card-header">11/28至12/4</div>
                <div class="card-content">
                    <div class="card-content-inner">
                        <div class="list-block">
                            <ul>
                                <li class="item-content">
                                    <div class="item-media">
                                        <svg class="icon zuqiu" aria-hidden="true">
                                            <use xlink:href="#icon-basketball-jersey" class="shouhui"></use>
                                        </svg>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">打篮球</div>
                                        <div class="item-after">1次</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media">
                                        <svg class="icon zuqiu" aria-hidden="true">
                                            <use xlink:href="#icon-paobuji" class="shouhui"></use>
                                        </svg>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">跑步</div>
                                        <div class="item-after">1次</div>
                                    </div>
                                </li>
                                <li class="item-content">
                                    <div class="item-media">
                                        <svg class="icon zuqiu" aria-hidden="true">
                                            <use xlink:href="#icon-xinghe" class="shouhui"></use>
                                        </svg>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">一共运动</div>
                                        <div class="item-after">2次</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <svg class="icon zuqiu" aria-hidden="true">
                        <use xlink:href="#icon-biaoqing2" class="shouhui"></use>
                    </svg>
                    变懒了呢，哼~
                </div>
            </div>
            <div class="card">
                <div class="card-header">12/5至12/11</div>
                <div class="card-content">
                    <div class="card-content-inner">
                        <div class="list-block">
                            <ul>
                                <li class="item-content">
                                    <div class="item-media">
                                        <svg class="icon zuqiu" aria-hidden="true">
                                            <use xlink:href="#icon-xinghe" class="shouhui"></use>
                                        </svg>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title">一共运动</div>
                                        <div class="item-after">0次</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <svg class="icon zuqiu" aria-hidden="true">
                        <use xlink:href="#icon-ku1" class="shouhui"></use>
                    </svg>
                    你这一周，都特么干了点啥！死宅真可怕~~
                </div>
            </div>

        </div>
    </div>
    <!--购物-->
    <div class="page" id="shop">
        <header class="bar bar-nav">
            <a href="#me">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title">周边商城</h1>
        </header>
        <div class="content"  align="center">
            <div class="row">
                <div class="col-33">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/羽毛球.png" width="50px" height="50px">
                    <p> <a href="https://s.taobao.com/search?ie=utf8&initiative_id=staobaoz_20161124&stats_click=search_radio_all%3A1&js=1&imgfile=&q=%E7%BE%BD%E6%AF%9B%E7%90%83%E6%8B%8D&suggest=0_1&_input_charset=utf-8&wq=yumaoqiu&suggest_query=yumaoqiu&source=suggest"rel="external">羽毛球</a></p>
                </div>
                <div class="col-33">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/台球.png" width="50px" height="50px">
                    <p> <a href="https://s.taobao.com/search?ie=utf8&initiative_id=staobaoz_20161124&stats_click=search_radio_all%3A1&js=1&imgfile=&q=%E5%8F%B0%E7%90%83%E6%9D%86&suggest=0_1&_input_charset=utf-8&wq=taiqiu&suggest_query=taiqiu&source=suggest"rel="external">台球</a></p>
                </div>
                <div class="col-33">  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/网球.png" width="50px" height="50px">
                    <p><a href="https://s.taobao.com/search?ie=utf8&initiative_id=staobaoz_20161124&stats_click=search_radio_all%3A1&js=1&imgfile=&q=%E7%BD%91%E7%90%83%E6%8B%8D&suggest=0_1&_input_charset=utf-8&wq=wangqiu&suggest_query=wangqiu&source=suggest"rel="external">网球</a></p></div>
            </div>

            <div class="row">
                <div class="col-33">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/足球.png"width="50px" height="50px">
                    <p><a href="https://s.taobao.com/search?q=zuqiu&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8"rel="external">足球</a></p>
                </div>
                <div class="col-33">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/篮球.png"width="50px" height="50px">
                    <p><a href="https://s.taobao.com/search?q=lanqiu&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8"rel="external">篮球</a></p>
                </div>
                <div class="col-33">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/棒球.png"width="50px" height="50px">
                    <p><a href="https://s.taobao.com/search?q=bangqiu+&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8"rel="external">棒球</a></p>
                </div>
            </div>
            <div class="row">
                <div class="col-33">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/排球.png"width="50px" height="50px">
                    <p><a href="https://s.taobao.com/search?q=%E6%8E%92%E7%90%83&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8"rel="external">排球</a></p>
                </div>
                <div class="col-33">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/乒乓球.png" width="50px" height="50px">
                    <p><a href="https://s.taobao.com/search?q=%E4%B9%92%E4%B9%93%E7%90%83%E6%8B%8D&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8"rel="external">乒乓球</a></p>
                </div>
                <div class="col-33">
                    <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/加号.png" width="50px" height="50px">
                    <p><a href="https://www.taobao.com/?spm=a230r.1.0.0.xrWULK" rel="external">其他</a></p>
                </div>
            </div>
        </div>
        >
    </div>
    <!--账户管理-->
    <div class="page" id="account">
        <header class="bar bar-nav">
            <a href="#set">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title" style="color:white;">账号管理</h1>
        </header>
        <div class="content">

            <div class="list-block">
                <ul>
                    <li class="item-content">
                        <div class="item-media">
                            <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/1.jpg" width="50px" height="50">
                        </div>
                        <div class="item-inner">
                            <div class="item-title">阿斯蒂芬<br><small class="d1">123456789@qq.com</small></div>
                            <div class="item-after"></div>
                        </div>
                    </li>
                    <li class="item-content">
                        <div class="item-inner">
                            <div class="item-title" ><a href="#" rel="external">添加账号</a></div>
                        </div>
                    </li>

                    <li class="item-content">
                        <div class="item-inner">
                            <div class="item-title" ><a href="#" rel="external">退出登录</a></div>
                        </div>
                    </li>


                </ul>
            </div>
            <div class="list-block">

            </div>
        </div>
    </div>
    <!--账号安全-->
    <div class="page" id="safe">
        <header class="bar bar-nav">
            <a href="#set">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title"style="color: white">账号安全</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li class="item-content item-link">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title"><a href="#password"rel="external">修改密码</a></div>
                        </div>
                    </li>
                    <li class="item-content item-link">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title"><a href="#phone"rel="external">绑定手机</a></div>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
    <!--修改密码-->
    <div class="page" id="password">
        <header class="bar bar-nav">
            <a href="#safe">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title" style="color: white">修改密码</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-password"></i></div>
                            <div class="item-inner">
                                <div class="item-title label">旧密码</div>
                                <div class="item-input">
                                    <input type="password" placeholder="6-12个字符，区分大小写" class="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-password"></i></div>
                            <div class="item-inner">
                                <div class="item-title label">新密码</div>
                                <div class="item-input">
                                    <input type="password" placeholder="6-12个字符，区分大小写" class="">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="content-block">
                    <div class="row">
                        <div class="col-50"><a href="#password" class="button button-big button-fill button-danger"rel="external">取消</a></div>
                        <div class="col-50"><a href="#safe" class="button button-big button-fill button-success"rel="external">提交</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--绑定手机-->
    <div class="page" id="phone">
        <header class="bar bar-nav">
            <a href="#safe">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title" style="color: white">绑定手机</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-password"></i></div>
                            <div class="item-inner">
                                <div class="item-title label">请输入密码：</div>
                                <div class="item-input">
                                    <input type="password" placeholder="6-12个字符，区分大小写" class="">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-name"></i></div>
                            <div class="item-inner">
                                <div class="item-title label">输入手机号：</div>
                                <div class="item-input">
                                    <input type="text" placeholder="Your phone">
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="content-block">
                    <div class="row">
                        <div class="col-50"><a href="#phone" class="button button-big button-fill button-danger"rel="external">取消</a></div>
                        <div class="col-50"><a href="#safe" class="button button-big button-fill button-success"rel="external">绑定</a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!--清除缓存-->
    <div class="page" id="huancun">
        <header class="bar bar-nav">
            <a href="#set">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title">清除缓存</h1>
        </header>
        <div class="content">

        </div>
    </div>
    <!--关于我们-->
    <div class="page" id="aboutus">
        <header class="bar bar-nav">
            <a href="#set">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title" style="color: white">关于我们</h1>
        </header>
        <div class="content" align="center">
            <p>求球</p>
            <p>当前版本号：v1.0.1</p>
        </div>
        <div class="bar bar-footer-secondary">
            <p>求球 - Friends Find</p>
            <p>Designed By Root & <a href="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/image/zrong.me">Root.xxx</a> 2016</p>


        </div>

    </div>
    <!--意见反馈-->
    <div class="page" id="feedback">
        <header class="bar bar-nav">
            <a href="#set">
                <svg class="icon pull-left" aria-hidden="true">
                    <use xlink:href="#icon-shouhui02" class="shouhui"></use>
                </svg>
            </a>
            <h1 class="title" style="color: white">意见反馈</h1>
        </header>
        <div class="content">
            <div class="list-block">
                <ul>
                    <li class="align-top">
                        <div class="item-content">
                            <div class="item-media"><i class="icon icon-form-comment"></i></div>
                            <div class="item-inner">
                                <div class="item-input">

                                    <textarea placeholder="有不爽的？来吐槽吧！"></textarea>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="content-block">
                <div class="row">
                    <div class="col-50"><a href="#feedback" class="button button-big button-fill button-danger"rel="external">取消</a></div>
                    <div class="col-50"><a href="#set" class="button button-big button-fill button-success"rel="external">提交</a></div>
                </div>
            </div>

        </div>
    </div>

</div>
</div>


<script src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/toast.js'></script>
<script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/sm.js"></script>
<script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/sm-extend.js"></script>
<script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/sm-city-picker.js"></script>
<script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/demos.js"></script>
<script type="text/javascript">
    var brightness = 0;
    //显示遮罩
    function cover(brightness) {
        if (typeof(div) == 'undefined') {
            div = document.createElement('div');
            div.setAttribute('style', 'position:fixed;top:0;left:0;outline:5000px solid;z-index:99999;');
            document.body.appendChild(div);
        } else {
            div.style.display = '';
        }
        div.style.outlineColor = 'rgba(0,0,0,' + brightness + ')';
    }
    //事件监听
    var light = document.getElementById('night');
    light.addEventListener('click', function() {
        if(brightness == 0){
            cover(brightness = 0.3);
        }else{
            cover(brightness = 0);
        }

    }, false);


    $(document).on('click','.create-actions', function () {
        var buttons1 = [
            {
                text: '请选择',
                label: true
            },
            {
                text: '评论',
                bold: true,
                color: 'danger',
                onClick: function() {
                    $.router.load("#pinglun");
                }
            },
            {
                text: '删除',
                onClick: function() {
                    $.alert("你选择了“删除“");
                }
            }
        ];
        var buttons2 = [
            {
                text: '取消',
                bg: 'danger'
            }
        ];
        var groups = [buttons1, buttons2];
        $.actions(groups);
    });

    //用ajax实现的新闻动态页
    function getXhr() {
        if (window.XMLHttpRequest) {
            return new XMLHttpRequest();
        }
        else {
            return new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    document.getElementById("username").onblur = function() {
        var xhr = getXhr();
        var loginname = document.getElementById("username").value;

        xhr.open("post", "server.php", true);

        var data = "username=" + loginname;
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4) {
                var message = "";
                if (xhr.responseText == "1") {
                    message = "可用！";
                }
                else {
                    message = "用户名已被注册！";
                }
                document.getElementById('errorTip').innerHTML = message;
            }
        }
        xhr.send(data);
    }
</script>
</body>
</html>