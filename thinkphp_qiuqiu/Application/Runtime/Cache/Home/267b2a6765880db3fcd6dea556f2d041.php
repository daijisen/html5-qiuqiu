<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
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
<div data-role=“page” id="Feedback">
  <div data-role="header" data-position="fixed">
  <a href="<?php echo U('Home/person/set');?>" data-role="button" class="ui-btn ui-corner-all ui-icon-carat-l ui-btn-icon-notext"></a>
   <h1>意见反馈</h1> 
</div>
<div data-role="content" align="center">
<form method="post" action="demoform.asp"> 
<label for="fname" class="ui-hidden-accessible">有不爽的？来吐槽吧！！ </label> 
  <textarea name="addfname" id="fname" placeholder="有不爽的？来吐槽吧！！"></textarea>
<input type="submit" data-inline="true" value="提交"> </form>

</div>
<div data-dole="footer">
</div>
  </div>
</body>
</html>