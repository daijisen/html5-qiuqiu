<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>求球</title>
        <link rel="stylesheet" type="text/css" href="/html5-qiuqiu/thinkphp_qiuqiu/Public/end/css/common.css"/>
        <link rel="stylesheet" type="text/css" href="/html5-qiuqiu/thinkphp_qiuqiu/Public/end/css/main.css"/>
        <script type="text/javascript" src="/html5-qiuqiu/thinkphp_qiuqiu/Public/end/js/libs/modernizr.min.js"></script>
        </head>
<body>
<style>
    .topbar-wrap{
        background-image: url('/html5-qiuqiu/thinkphp_qiuqiu/Public/end/images/headbg.jpg');
        height:100px;
    }
    .topbar-inner{
        padding-top:2% ;
    }
    body{
        color: black;
        background-image: url("/html5-qiuqiu/thinkphp_qiuqiu/Public/end/images/contentbg.jpg");
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
                <li><a href="#" style="color: #5DD300">超级管理员</a></li>
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
                    <a href="#"><i class="icon-font">&#xe003;</i>管理员列表</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/administrators/index');?>"><i class="icon-font">&#xe008;</i>所有管理员</a></li>
                        <li><a href="<?php echo U('Admin/administrators/create');?>"><i class="icon-font">&#xe005;</i>添加管理员</a></li>
                    </ul>
                </li>
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
                        <li><a href="<?php echo U('Admin/comment/index');?>"><i class="icon-font">&#xe017;</i>评论管理</a></li>
                        <li><a href="<?php echo U('Admin/reply/index');?>"><i class="icon-font">&#xe037;</i>回复管理</a></li>
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
                    </ul>
                </li>

            </ul>
        </div>
    </div>
    <div class="main-content">
    <!--/sidebar-->
    
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="allCategorys.html">所有活动</a><span class="crumb-step">&gt;</span><span>添加活动</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="<?php echo U('Admin/act/store');?>" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                            <tr>
                                <th width="120">用户ID:</th>
                                <td>

                                    <select name="pid" id="userid">
                                        <?php if(is_array($acts)): $i = 0; $__LIST__ = $acts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["pid"]); ?>"><?php echo ($vo["pid"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>

                                </td>
                            </tr>

                            <tr>
                                <th width="120">类型:</th>
                                <td>

                                    <select name="class" id="select">
                                        <option value="排球">排球</option>
                                        <option value="足球">足球</option>
                                        <option value="篮球">篮球</option>
                                        <option value="羽毛球">羽毛球</option>
                                        <option value="台球">台球</option>
                                        <option value="网球">网球</option>
                                        <option value="棒球">棒球</option>
                                        <option value="乒乓球">乒乓球</option>
                                    </select>

                                </td>
                            </tr>
                        <tr>
                            <th><i class="require-red">*</i>时间段</th>
                            <td>
                                <input class="common-text required" id="title" name="timeslot" size="50" value="timeslot" type="text">
                            </td>
                        </tr>
                        <tr>
                            <th><i class="require-red">*</i>配图</th>
                            <td>
                            <input type="file" name="uploadpic" />
                            </td>
                        </tr>
                        <tr>
                            <th>内容</th>
                            <td><textarea name="ncontent" class="common-textarea" id="content" cols="10" style="width: 98%;" rows="10"></textarea></td>
                        </tr>
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
</div>
</body>
</html>