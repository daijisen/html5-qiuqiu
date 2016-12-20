<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>登录 - 求球 - Thousands Find</title>
	<link rel="stylesheet" type="text/css" href="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/css/register-login.css">

</head>
<body>
<div id="box"></div>
<div class="cent-box">
	<div class="cent-box-header">
		<h1 class="main-title hide">求球</h1>
		<h2 class="sub-title" style="font-family: 华文行楷">后台管理系统 - By Root</h2>
	</div>

	<div class="cont-main clearfix">
		<div class="index-tab">
		</div>

		<form action="<?php echo U('Admin/index/index');?>" method="post">
		<div class="login form">
			<div class="group">
				<div class="group-ipt email">
					<input type="text" name="username" id="email" class="ipt" placeholder="请输您的入用户名" required>
				</div>
				<div class="group-ipt password">
					<input type="password" name="password" id="password" class="ipt" placeholder="输入您的登录密码" required>
				</div>
			</div>
		</div>
		<div class="button">
			<button type="submit" class="login-btn register-btn" id="button" name="login">登录</button>
		</div>
		</form>



		<div class="remember clearfix">
			<label class="forgot-password">
				<a href="find.html">忘记密码？</a>
			</label>
		</div>
	</div>
</div>


<div class="footer">
	<p>求球 - Friends Find</p>
	<p>Designed By Root & <a href="index.html">Root.xxx</a> 2016</p>
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
<script>
	$(document).ready(function(){
		$(".button").click(function(){ 
			if($(":text").val().length==0){ 
				alert("请输入账号");
			}
			else if($(":password").val().length==0){ 
				alert("请输入密码");
			}
			else{ 
				alert("登陆成功");
			}
		});
	}); 
</script>
</body>
</html>