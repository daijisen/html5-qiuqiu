<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
	<title>首页</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/thinkphp_3.2.3/Public/front/css/jquery.mobile-1.4.5.min.css" />
	<link rel="stylesheet" href="/thinkphp_3.2.3/Public/front/css/index.css" type="text/css" />
	<link rel="stylesheet" href="/thinkphp_3.2.3/Public/front/css/themes/blue.css" />
	<script src="/thinkphp_3.2.3/Public/front/js/jquery-2.2.2.js"></script>
	<script src="/thinkphp_3.2.3/Public/front/js/jquery.min.js"></script>
	<script src="/thinkphp_3.2.3/Public/front/js/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>
<div data-role="page" id="index">
	<div data-role="header" dataposition="fixed" data-fullscreen="true" id="head">
		<a href="#" data-role="button">石家庄</a>
		<h1>河北师范大学</h1>
	</div>
	<div id="asearch">
		<form class="ui-filterable">
			<input id="myFilter" data-type="search">
		</form>
	</div>
	<div data-role="content" id="content">
		<div id="hd">
			<div id="tx">
				<img src="/thinkphp_3.2.3/Public/front/images/tx.jpg">
			</div>
			<div id="tex">
				<span id="t1"><h2>想增肥的请举手</h2></span>
				<span id="t2"><p>两分钟之前</p></span>
				<p>一只吃不胖的瘦子.....</p>
			</div>
		</div>
		<div id="ct">
			<div id="cttext">
				<p id="ctp">#足球今天中午一点河北师范大学西操场</p>
			</div>
			<div id="pic"><img src="/thinkphp_3.2.3/Public/front/images/bj.jpg" class="qw"></div>
		</div>
		<div  id="ft">
			<div id="ftbox" data-role="controlgroup" data-type="horizontal" style="text-align: center">
				<a href="#" data-role="button"  class="ftbtn">团队(2/10)</a>
				<a href="#" data-role="button"  class="ftbtn">加入</a>
				<a href="#" data-role="button"  class="ftbtn">评论</a>
			</div>
		</div>
	</div>
	<div data-role="footer"  style="text-align:center;" data-position="fixed">
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