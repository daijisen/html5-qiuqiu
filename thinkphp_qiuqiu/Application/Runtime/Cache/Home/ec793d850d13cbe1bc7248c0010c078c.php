<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Comment</title>
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
<div data-role=“page” id="Comment">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo U('Home/person/PersonalCenter');?>" data-role="button" class="ui-btn ui-corner-all ui-icon-carat-l ui-btn-icon-notext"></a>
   <h1>我的点评</h1> 
   <a href="<?php echo U('Home/person/Comment');?>" data-role="button" class="ui-btn ui-corner-all ui-icon-recycle ui-btn-icon-notext"></a>
</div>
<div data-role="content" align="center">
<img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/2.png" >
<p>暂无点评</p>
</div>
<div data-dole="footer">
</div>
  </div>
</body>
</html>