<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>求球</title>
        <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3/Public/end/css/common.css"/>
        <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3/Public/end/css/main.css"/>
        <script type="text/javascript" src="/thinkphp_3.2.3/Public/end/js/libs/modernizr.min.js"></script>
        </head>
<body>
<style>
    .topbar-wrap{
        background-color: gray;
    }
    .on1{
        background-color: white ;
        color: black;
        font-family: 幼圆;
    }

</style>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on1" href="index.html">首页</a></li>
                <li><a href="#" >网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#">修改密码</a></li>
                <li><a href="#">退出</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="container clearfix">
    <div class="sidebar-wrap">
        <div class="sidebar-title">
            <h1>菜单</h1>
        </div>
        <div class="sidebar-content">
            <ul class="sidebar-list">
                <li>
                    <a href="#"><i class="icon-font">&#xe003;</i>用户管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/user/index');?>"><i class="icon-font">&#xe008;</i>所有用户</a></li>
                        <li><a href="<?php echo U('Admin/user/create');?>"><i class="icon-font">&#xe005;</i>添加用户</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>活动管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/act/index');?>"><i class="icon-font">&#xe017;</i>所有活动</a></li>
                        <li><a href="<?php echo U('Admin/act/create');?>"><i class="icon-font">&#xe037;</i>添加活动</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>评论管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/comment/index');?>"><i class="icon-font">&#xe017;</i>所有评论</a></li>
                        <li><a href="<?php echo U('Admin/comment/create');?>"><i class="icon-font">&#xe037;</i>增加评论</a></li>
                        <li><a href="<?php echo U('Admin/comment/allhuifu');?>"><i class="icon-font">&#xe037;</i>回复管理</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/news/index');?>"><i class="icon-font">&#xe017;</i>所有新闻</a></li>
                        <li><a href="<?php echo U('Admin/news/create');?>"><i class="icon-font">&#xe037;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>团队管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/team/index');?>"><i class="icon-font">&#xe017;</i>所有团队</a></li>
                        <li><a href="<?php echo U('Admin/team/create');?>"><i class="icon-font">&#xe037;</i>新增团队</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span>新增会议</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="*" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th><i class="require-red">*</i>主题：</th>
                                <td>
                                    <input class="common-text required" id="title" name="title" size="50" value="" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td><input name="smallimg" id="" type="file"></td>
                            </tr>
                            <tr>
                                <th>内容：</th>
                                <td><textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea></td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
    <!--/main-->
</div>
</body>
</html>