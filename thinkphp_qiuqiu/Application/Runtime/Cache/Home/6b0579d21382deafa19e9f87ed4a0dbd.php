<?php if (!defined('THINK_PATH')) exit();?><html>
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
    <link rel="stylesheet" href="/thinkphp_3.2.3/Public/front/css/themes/blue.css" />
    <link rel="stylesheet" href="/thinkphp_3.2.3/Public/front/css/themes/jquery.mobile.icons.min.css" />
    <script>
        jQuery(function(){

            jQuery('#camera_wrap_1').camera({
                height:'36%',
                pagination: true,
                thumbnails: true,
            });
        });
    </script>
</head>
<body>
<div data-role="header">
    <h1>新闻</h1>
</div>


    <div data-role="controlgroup" data-type="horizontal" id="gbtn">
        <a href="#" class="ui-btn ui-btn-inline ui-corner-all ui-mini">NBA</a>
        <a href="#" class="ui-btn  ui-btn-inline ui-corner-all  ui-mini ">CBA</a>
        <a href="#" class="ui-btn  ui-btn-inline ui-corner-all ui-mini " data-icon="comment">英超</a>
        <a href="#" class="ui-btn  ui-btn-inline ui-corner-all ui-mini " data-icon="comment">NFL</a>
        <a href="#" class="ui-btn  ui-btn-inline ui-corner-all ui-mini " data-icon="comment">西甲</a>
        <a href="#" class="ui-btn  ui-btn-inline ui-corner-all ui-mini " data-icon="comment">斯诺克</a>
    </div>

</div>
<div data-role="content">
    <div class="fluid_container">
    <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
        <div data-thumb="/thinkphp_3.2.3/Public/front/images/26.png" data-src="/thinkphp_3.2.3/Public/front/images/117.png">
            <div class="camera_caption fadeFromBottom">
                低调的群熊，请不要忽视他们
            </div>
        </div>
        <div data-thumb="/thinkphp_3.2.3/Public/front/images/27.png" data-src="/thinkphp_3.2.3/Public/front/images/115.png">
            <div class="camera_caption fadeFromBottom">
                伊戈达拉生涯集锦
            </div>
        </div>
        <div data-thumb="/thinkphp_3.2.3/Public/front/images/28.png" data-src="/thinkphp_3.2.3/Public/front/images/116.png">
            <div class="camera_caption fadeFromBottom">
                我和克拉克森击个掌
            </div>
        </div>
    </div>
    </div>

        <div data-role="content" id="pageone">

                <ul data-role="listview" >
                    <li>
                        <a href="<?php echo U('Home/news/newsneirong');?>"  rel="external">
                            <img src="/thinkphp_3.2.3/Public/front/images/111.png">
                            <h2>沃顿：我们想让拉塞尔打出攻击性</h2>
                            <p>虽然拉塞尔昨日付出，但是可以看出来他在场上大的非常谨慎</p>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/news/newsneirong');?>">
                            <img src="/thinkphp_3.2.3/Public/front/images/112.png">
                            <h2>卡莱尔称赞马刺</h2>
                            <p>邓肯进入联盟后，从未缺席过季后赛</p>
                        </a>
                    </li>
                    <li>
                    <a href="<?php echo U('Home/news/newsneirong');?>">
                        <img src="/thinkphp_3.2.3/Public/front/images/113.png">
                        <h2>比尔砍下职业新高</h2>
                        <p>此外，也是生涯背靠背砍下30分</p>
                    </a>
                    </li>
                    <li>
                        <a href="<?php echo U('Home/news/newsneirong');?>">
                            <img src="/thinkphp_3.2.3/Public/front/images/118.png">
                            <h2>巴特勒戴维斯获周最佳</h2>
                            <p>公牛鹈鹕均三胜一负</p>
                        </a>
                    </li>
                </ul>

            </div>

<div data-role="footer" style="text-align: center;" data-position="fixed" >
    <div data-role="navbar">
        <ul >
            <li><a href="<?php echo U('Home/index/index');?>" data-icon="home">首页</a></li>
            <li><a href="<?php echo U('Home/news/newspage');?>" data-icon="info" rel="external">新闻</a></li>
            <li><a href="<?php echo U('Home/send/fabu');?>" data-icon="plus">发布</a></li>
            <li><a href="<?php echo U('Home/person/PersonalCenter');?>" data-icon="star">个人账户</a></li>
        </ul>
    </div>
</div>
</body>
</html>