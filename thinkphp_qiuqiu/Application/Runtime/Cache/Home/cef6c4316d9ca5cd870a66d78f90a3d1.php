<?php if (!defined('THINK_PATH')) exit();?><html>
<head> 
    <title>Personal Center</title>
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
 <div data-role=“page” id="Personal Center"  data-theme="b" > <!-- 页--> 
 <div data-role="header" data-position="fixed"> 
 
<h1>me</h1> 
<a href="<?php echo U('Home/person/set');?>" data-role="button" class="ui-btn ui-corner-all ui-icon-gear ui-btn-icon-notext ui-btn-right">
</a> 
</div>
   <div data-role=“content”> 
   <div class="ui-grid-a my-breakpoint">
      <div class="ui-block-a"><div class="ui-body ui-body-d">
      <img src="/thinkphp_3.2.3/Public/front/images/1.jpg" width="100%">
      </div></div>
      <div class="ui-block-b"><div class="ui-body ui-body-d">
        <li>
<h2>阿斯蒂芬</h2>
  <form method="post" action="demoform.asp"> 
    <label for="fname" class="ui-hidden-accessible">简介</label>
    <input type="text" name="fname" id="fname" placeholder="简介...">
     </form>
</li> 
</div></div>
    </div>
    <ul data-role="listview">
      <li><a href="<?php echo U('Home/person/Comment');?>" class="ui-btn ui-icon-star ui-btn-icon-left">我的点评</a></li>
      <li><a href="<?php echo U('Home/person/schedule');?>" class="ui-btn ui-icon-video ui-btn-icon-left">我的日程</a></li>
      <li><a href="<?php echo U('Home/person/ShoppingMall');?>" class="ui-btn ui-icon-tag ui-btn-icon-left">周边商城</a></li>
       <li><a href="#" class="ui-btn ui-icon-clock ui-btn-icon-left">夜间模式</a></li>
    </ul>
    </div>

    <div data-role="footer"   data-position="fixed" >
			<div data-role="navbar">
	      	<ul>
                <li><a href="<?php echo U('Home/index/index');?>" data-icon="home">首页</a></li>
                <li><a href="<?php echo U('Home/news/newspage');?>" data-icon="info" rel="external">新闻</a></li>
                <li><a href="<?php echo U('Home/send/fabu');?>" data-icon="plus">发布</a></li>
                <li><a href="<?php echo U('Home/person/PersonalCenter');?>" data-icon="star">个人账户</a></li>
	      	</ul>
	    </div>
		</div>
	</div>
	

</body>

</html>