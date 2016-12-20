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
    
<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post" action="<?php echo U('Admin/user/destoryBatch');?>">
                <div class="result-title">
                    <div class="result-list">
                        <button id="batchDel"  type="submit"><i class="icon-font"></i>批量删除</button>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>密码</th>
                            <th>签名</th>
                            <th>头像</th>
                            <th>学校</th>
                            <th>注册时间</th>
                            <th>性别</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($vo["pid"]); ?>" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="<?php echo ($vo["pid"]); ?>" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="<?php echo ($vo["pid"]); ?>" type="text">
                            </td>
                            <td><?php echo ($vo["username"]); ?></td>
                            <td> <?php echo ($vo["password"]); ?></td>
                            <td><?php echo ($vo["signature"]); ?></td>
                            <td width="80px"><img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/uploads<?php echo ($vo["head"]); ?>" height="80px" width="80px"></td>
                            <td><?php echo ($vo["university"]); ?></td>
                            <td><?php echo ($vo["time"]); ?></td>
                            <td><?php echo ($vo["gender"]); ?></td>
                            <td>
                                <a class="link-update" href="<?php echo U('Admin/user/edit');?>/pid/<?php echo ($vo["pid"]); ?>">修改</a>
                                <a class="link-del" href="<?php echo U('Admin/user/destory');?>/pid/<?php echo ($vo["pid"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                    </table>
                    <div class="list-page"> <?php echo ($page); ?></div>
                </div>
            </form>
        </div>
    </div>
    <!--/main-->
    <!--/main-->
    </div>
</div>
</body>
</html>