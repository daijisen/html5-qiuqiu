<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>account management</title>
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
    <style>
    @media all and (max-width: 15em) {
    .my-breakpoint .ui-block-a, 
    .my-breakpoint .ui-block-b { 
      width: 100%; 
      float:none; 
    }
  }
 
  @media all and (min-width: 10em) {
    .my-breakpoint.ui-grid-a .ui-block-a { width: 29.95%; }
    .my-breakpoint.ui-grid-a .ui-block-b { width: 70.05%; }
  }
  </style>
</head>
<body>
<div data-role=“page” id="account management">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo U('Home/person/set');?>" data-role="button" class="ui-btn ui-corner-all ui-icon-carat-l ui-btn-icon-notext"></a>
   <h1>账号管理</h1> 
</div>
<div data-role="content">
<ul data-role="listview">
   <li>
   <div class="ui-grid-a my-breakpoint">
      <div class="ui-block-a"><div class="ui-body ui-body-d">
      <img src="/thinkphp_3.2.3/Public/front/images/1.jpg" width="100%">
      </div></div>
      <div class="ui-block-b"><div class="ui-body ui-body-d">
<h2>阿斯蒂芬</h2>
<p>1234567890@qq.com</p>
</div></div>
    </div>
</li>
<li>
  <a href="<?php echo U('Home/login/login');?>" class="ui-btn ui-icon-plus ui-btn-icon-left">添加账号</a>
</li>
<li >
<a href="<?php echo U('Home/login/login');?>" style="font-family:'华文行楷';color:red"><center>退出登陆</center></a>
</li>
    </ul>
</div>
<div data-dole="footer">
</div>
  </div>
</body>
</html>