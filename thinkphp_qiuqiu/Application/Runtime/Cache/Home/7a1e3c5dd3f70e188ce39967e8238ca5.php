<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <link rel='stylesheet' id='camera-css'  href='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/css/camera.css' type='text/css' media='all'/>
    <script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    <script type='text/javascript' src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/scripts/jquery.min.js'></script>
    <script type='text/javascript' src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/scripts/camera.min.js'></script>

</head>
<body>
<div data-role=“page” id="Shopping Mall">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo U('Home/person/PersonalCenter');?>" data-role="button" class="ui-btn ui-corner-all ui-icon-carat-l ui-btn-icon-notext"></a>
   <h1>周边商城</h1> 
   <a href="<?php echo U('Home/person/Shopping Mall');?>" data-role="button" class="ui-btn ui-corner-all ui-icon-recycle ui-btn-icon-notext"></a>
</div>

        <div data-role="content" align="center">
          <div class="ui-grid-b">
               <div class="ui-block-a">
                  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/羽毛球.png">
                 <p> <a href="https://s.taobao.com/search?ie=utf8&initiative_id=staobaoz_20161124&stats_click=search_radio_all%3A1&js=1&imgfile=&q=%E7%BE%BD%E6%AF%9B%E7%90%83%E6%8B%8D&suggest=0_1&_input_charset=utf-8&wq=yumaoqiu&suggest_query=yumaoqiu&source=suggest">羽毛球</a></p>
               </div>
               <div class="ui-block-b">	
                  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/台球.png">
                 <p> <a href="https://s.taobao.com/search?ie=utf8&initiative_id=staobaoz_20161124&stats_click=search_radio_all%3A1&js=1&imgfile=&q=%E5%8F%B0%E7%90%83%E6%9D%86&suggest=0_1&_input_charset=utf-8&wq=taiqiu&suggest_query=taiqiu&source=suggest">台球</a></p>
               </div>
               <div class="ui-block-c">
                  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/网球.png">
                  <p><a href="https://s.taobao.com/search?ie=utf8&initiative_id=staobaoz_20161124&stats_click=search_radio_all%3A1&js=1&imgfile=&q=%E7%BD%91%E7%90%83%E6%8B%8D&suggest=0_1&_input_charset=utf-8&wq=wangqiu&suggest_query=wangqiu&source=suggest">网球</a></p>
               </div>
            </div>
            <div class="ui-grid-b">
               <div class="ui-block-a">
                  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/足球.png">
                  <p><a href="https://s.taobao.com/search?q=zuqiu&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8">足球</a></p>
               </div>
               <div class="ui-block-b">
                  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/篮球.png">
                  <p><a href="https://s.taobao.com/search?q=lanqiu&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8">篮球</a></p>
               </div>
               <div class="ui-block-c">
                  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/棒球.png">
                  <p><a href="https://s.taobao.com/search?q=bangqiu+&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8">棒球</a></p>
               </div>
            </div>
            <div class="ui-grid-b">
               <div class="ui-block-a">
                  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/排球.png">
                  <p><a href="https://s.taobao.com/search?q=%E6%8E%92%E7%90%83&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8">排球</a></p>
               </div>
               <div class="ui-block-b">
                  <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/乒乓球.png">
                  <p><a href="https://s.taobao.com/search?q=%E4%B9%92%E4%B9%93%E7%90%83%E6%8B%8D&imgfile=&js=1&stats_click=search_radio_all%3A1&initiative_id=staobaoz_20161124&ie=utf8">乒乓球</a></p>
               </div>
               <div class="ui-block-c">
                <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/加号.png">
               <p><a href="https://www.taobao.com/?spm=a230r.1.0.0.xrWULK" >其他</a></p>
               </div>
            </div>
        </div>
<div data-dole="footer">
</div>
  </div>
</body>
</html>>