<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
   <title>set</title>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/thinkphp_3.2.3/Public/front/css/jquery.mobile-1.4.5.min.css" />
    <link rel='stylesheet' id='camera-css'  href='/thinkphp_3.2.3/Public/front/css/camera.css' type='text/css' media='all'/>
    <script src="/thinkphp_3.2.3/Public/front/js/jquery-2.2.2.js"></script>
    <script src="/thinkphp_3.2.3/Public/front/js/jquery.mobile-1.4.5.min.js"></script>
    <script type='text/javascript' src='/thinkphp_3.2.3/Public/front/scripts/jquery.min.js'></script>
    <script type='text/javascript' src='/thinkphp_3.2.3/Public/front/scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='/thinkphp_3.2.3/Public/front/scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='/thinkphp_3.2.3/Public/front/scripts/camera.min.js'></script>


</head>
<body>
<div data-role=“page” id="set">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo U('Home/person/Personal Center');?>" data-role="button" class="ui-btn ui-corner-all ui-icon-carat-l ui-btn-icon-notext"></a>
   <h1>设置</h1> 

</div>
<div data-role="content">
<h2></h2>
<ul data-role="listview">
  <li><a href="<?php echo U('Home/person/account management');?>">账号管理</a> </li>
  <li><a href="<?php echo U('Home/person/Account security');?>">账号安全</a> </li>
  </ul>
 <h2></h2>
  <ul data-role="listview">
  <li>    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">清除缓存</a>

    <div data-role="popup" id="myPopup" class="ui-content">
    <h3>是否清除缓存</h3>
      <p>
      <a href="set.html" class="ui-btn ui-btn-inline">是</a>
    <a href="set.html" class="ui-btn ui-btn-inline">否</a>
    </p>
    </div></li>
  <li><a href="#myPopu" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all">检查更新</a>

    <div data-role="popup" id="myPopu" class="ui-content">
    <h3>当前已是最新版本</h3>
    </div> </li>
  </ul>
  <h2></h2>
  <ul data-role="listview">
  <li><a href="<?php echo U('Home/person/About us');?>">关于我们</a> </li>
  <li><a href="<?php echo U('Home/person/Feedback');?>">意见反馈</a> </li>

   </ul>
   
</div>
<div data-dole="footer">
</div>
  </div>
</body>
</html>