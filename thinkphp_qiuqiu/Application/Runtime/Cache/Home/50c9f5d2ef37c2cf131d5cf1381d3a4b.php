<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>登录 - 求球 - Thousands Find</title>
	<link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3/Public/front/style/register-login.css">
</head>
<body>
<div id="box"></div>
<div class="cent-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">求球</h1>
		<h2 class="sub-title">寻找你的伙伴 - Friends Find</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
			<div class="index-slide-nav">
				<a href="<?php echo U('Home/login/login');?>" class="active">登录</a>
				<a href="<?php echo U('Home/login/register');?>">注册</a>
				<div class="slide-bar"></div>				
			</div>
		</div>

		<div class="login form">
			<div class="group">
				<div class="group-ipt email">
					<input type="text" name="email" id="email" class="ipt" placeholder="请输您的入用户名" required>
				</div>
				<div class="group-ipt password">
					<input type="password" name="password" id="password" class="ipt" placeholder="输入您的登录密码" required>
				</div>
			</div>
		</div>

		<div class="button">
			<button type="submit" class="login-btn register-btn" id="button">登录</button>
		</div>

		<div class="remember clearfix">
			<label class="remember-me"><span class="icon"><span class="zt"></span></span><input type="checkbox" name="remember-me" id="remember-me" class="remember-mecheck" checked>记住我</label>
			<label class="forgot-password">
				<a href="<?php echo U('Home/login/find');?>">忘记密码？</a>
			</label>
		</div>
	</div>
</div>

<div class="footer">
	<p>求球 - Friends Find</p>
	<p>Designed By Root & <a href="<?php echo U('Home/login/login');?>">Root.xxx</a> 2016</p>
</div>

<script src='/thinkphp_3.2.3/Public/front/js/particles.js' type="text/javascript"></script>
<script src='/thinkphp_3.2.3/Public/front/js/background.js' type="text/javascript"></script>
<script src='/thinkphp_3.2.3/Public/front/js/jquery.min.js' type="text/javascript"></script>
<script src='/thinkphp_3.2.3/Public/front/js/layer/layer.js' type="text/javascript"></script>
<script src='/thinkphp_3.2.3/Public/front/js/index.js' type="text/javascript"></script>
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
	});
	$("#remember-me").click(function(){
		var n = document.getElementById("remember-me").checked;
		if(n){
			$(".zt").show();
		}else{
			$(".zt").hide();
		}
	});
</script>
</body>
</html>