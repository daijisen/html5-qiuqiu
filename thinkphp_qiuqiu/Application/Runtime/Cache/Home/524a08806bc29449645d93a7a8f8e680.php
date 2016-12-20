<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>注册 - 求球 - Thousands Find</title>
	<link rel="stylesheet" type="text/css" href="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/css/register-login.css">
</head>
<body>
<div id="box"></div>
<div class="cent-box register-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">求球</h1>
		<h2 class="sub-title">寻找你的伙伴 - Friends Find</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="login.html">登录</a>
				<a href="register.html" class="active">注册</a>
				<div class="slide-bar slide-bar1"></div>				
			</div>
		</div>

		<form action="<?php echo U('Home/login/register');?>" method="post">
		<div class="login form">
			<div class="group">
				<div class="group-ipt email">
					<input type="email" name="email" id="email" class="ipt" placeholder="邮箱地址" required>
				</div>
				<div class="group-ipt user">
					<input type="text" name="username" id="user" class="ipt" placeholder="选择一个用户名" required>
				</div>
				<div class="group-ipt password">
					<input type="password" name="password" id="password" class="ipt" placeholder="设置登录密码" required>
				</div>
				<div class="group-ipt password1">
					<input type="password" name="password1" id="password1" class="ipt" placeholder="重复密码" required>
				</div>
				<div class="group-ipt user">
					<input type="text" name="gender" id="user" class="ipt" placeholder="输入您的性别" required>
				</div>
                                <div class="group-ipt user">
					<input type="text" name="university" id="user1" class="ipt" placeholder="输入大学名称" required>
				</div>

			</div>
		</div>
			<div class="button">
				<a href="login.html"><button type="submit" class="login-btn register-btn" id="button">注册</button></a>
			</div>
		</form>


	</div>
</div>

<div class="footer">
	<p>求球 - Friends Find</p>
	<p>Designed By Root & <a href="register.html">Root.xxx</a> 2016</p>
</div>

<script src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/particles.js' type="text/javascript"></script>
<script src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/background.js' type="text/javascript"></script>
<script src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/jquery.min.js' type="text/javascript"></script>
<script src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/layer/layer.js' type="text/javascript"></script>
<script src='/html5-qiuqiu/thinkphp_qiuqiu/Public/front/js/index1.js' type="text/javascript"></script>
<script>
	$('.imgcode').hover(function(){
		layer.tips("a", '.verify', {
        		time: 6000,
        		tips: [2, "#3c3c3c"]
    		})
	},function(){
		layer.closeAll('tips');
	}).click(function(){
		$(this).attr('src','http://zrong.me/home/index/imgcode?id=' + Math.random());
	})

	$(".login-btn").click(function(){
		var email = $("#email").val();
		var password = $("#password").val();
		var verify = $("#verify").val();
		// $.ajax({
		// url: 'http://www.zrong.me/home/index/userLogin',
		// type: 'post',
		// jsonp: 'jsonpcallback',
  //       jsonpCallback: "flightHandler",
		// async: false,
		// data: {
		// 	'email':email,
		// 	'password':password,
		// 	'verify':verify
		// },
		// success: function(data){
		// 	info = data.status;
		// 	layer.msg(info);
		// }
		// })

	})
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	})
</script>


</body>
</html>