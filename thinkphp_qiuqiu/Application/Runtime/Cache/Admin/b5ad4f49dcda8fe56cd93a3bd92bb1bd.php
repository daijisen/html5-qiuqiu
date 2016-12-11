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
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">回复管理</span></div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>内容</th>
                            <th>发布时间</th>
                            <th>回复人ID</th>
                            <th>操作</th>
                        </tr>
                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="59" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                            </td>
                            <td>59</td>
                            <td></td>
                            </td>
                            <td>2016-09-05 21:11:01</td>
                            <td></td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="tc"><input name="id[]" value="59" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="59" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="0" type="text">
                            </td>
                            <td>59</td>
                            <td></td>
                            </td>
                            <td>2016-09-05 21:11:01</td>
                            <td></td>
                            <td>
                                <a class="link-update" href="#">修改</a>
                                <a class="link-del" href="#">删除</a>
                            </td>
                        </tr>
                    </table>
                    <div class="list-page"> 2 条 1/1 页</div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
    <!--/main-->
</div>
</body>
</html>