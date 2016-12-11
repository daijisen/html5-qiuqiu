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
        background-image: url('/thinkphp_3.2.3/Public/end/images/headbg.jpg');
        height:100px;
    }
    .topbar-inner{
        padding-top:2% ;
    }
    body{
        color: black;
        background-image: url("/thinkphp_3.2.3/Public/end/images/contentbg.jpg");
        background-repeat:no-repeat;
        background-attachment:fixed;
        background-position:bottom right;
    }

    .sidebar-wrap{

    }
    .on1{
        color: black;
        font-family: 华文行楷;
        font-size:50px;
    }

</style>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on1" href="<?php echo U('Admin/index/index');?>">求球</a></li>
                <li><a href="<?php echo U('Home/index/index');?>" >网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="#" style="color: #5DD300">管理员</a></li>
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
    <div class="main-content">
    <!--/sidebar-->
    

    <div class="main-wrap">
        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎进入求球管理后台</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>快捷操作</h1>
            </div>
            <div class="result-content">
                <div class="short-wrap">
                    <a href="<?php echo U('Admin/room/index');?>"><i class="icon-font">&#xe001;</i>所有用户</a>
                    <a href="<?php echo U('Admin/category/index');?>"><i class="icon-font">&#xe043;</i>所有活动</a>
                    <a href="allNewses.html"><i class="icon-font">&#xe002;</i>所有评论</a>
                    <a href="<?php echo U('Admin/meet/index');?>"><i class="icon-font">&#xe048;</i>所有新闻</a>
                    <a href="<?php echo U('Admin/meet/index');?>"><i class="icon-font">&#xe040;</i>所有团队</a>
                </div>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>客房状况</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">客房总数</label><span class="res-info">3089</span>
                    </li>
                    <li>
                        <label class="res-lab">当前入住</label><span class="res-info">2388</span>
                    </li>
                    <li>
                        <label class="res-lab">客房余量</label><span class="res-info">701</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="result-wrap">
            <div class="result-title">
                <h1>系统基本信息</h1>
            </div>
            <div class="result-content">
                <ul class="sys-info-list">
                    <li>
                        <label class="res-lab">操作系统</label><span class="res-info"><?php echo PHP_OS;?></span>
                    </li>
                    <li>
                        <label class="res-lab">运行环境</label><span class="res-info"><?php echo $_SERVER['SERVER_SIGNATURE'];?></span>
                    </li>
                    <li>
                        <label class="res-lab">上传附件限制</label><span class="res-info"><?php echo get_cfg_var ("upload_max_filesize");?></span>
                    </li>
                    <li>
                        <label class="res-lab">北京时间</label><span class="res-info"><?php echo get_cfg_var ("upload_max_filesize");?></span>
                    </li>
                    <li>
                        <label class="res-lab">服务器域名/IP</label><span class="res-info"><?php echo $_SERVER['SERVER_NAME'];?> <?php echo $_SERVER['SERVER_ADDR'];?></span>
                    </li>
                    <li>
                        <label class="res-lab">Host</label><span class="res-info"><?php echo $_SERVER['SERVER_ADDR'];?></span>
                    </li>
                </ul>
            </div>
        </div>
        
    </div>
    <!--/main-->

    <!--/main-->
    </div>
</div>
</body>
</html>