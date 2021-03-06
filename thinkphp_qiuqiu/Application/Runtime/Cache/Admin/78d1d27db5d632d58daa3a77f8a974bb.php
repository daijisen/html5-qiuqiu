<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>酒店后台管理</title>
    <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3/Public/admin/css/common.css"/>
    <link rel="stylesheet" type="text/css" href="/thinkphp_3.2.3/Public/admin/css/main.css"/>
    <script type="text/javascript" src="/thinkphp_3.2.3/Public/admin/js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="<?php echo U('Admin/index/index');?>" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="<?php echo U('Admin/index/index');?>">首页</a></li>
                <li><a href="<?php echo U('Home/index/index');?>" target="_blank">网站首页</a></li>
            </ul>
        </div>
        <div class="top-info-wrap">
            <ul class="top-info-list clearfix">
                <li><a href="http://www.jscss.me">管理员</a></li>
                <li><a href="http://www.jscss.me">修改密码</a></li>
                <li><a href="http://www.jscss.me">退出</a></li>
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
                    <a href="#"><i class="icon-font">&#xe003;</i>客房管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/room/index');?>"><i class="icon-font">&#xe008;</i>所有客房</a></li>
                        <li><a href="<?php echo U('Admin/room/create');?>"><i class="icon-font">&#xe005;</i>添加客房</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>客房分类管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/category/index');?>"><i class="icon-font">&#xe017;</i>所有分类<li><a href="<?php echo U('Admin/category/create');?>"><i class="icon-font">&#xe037;</i>添加分类</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>新闻管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/news/index');?>"><i class="icon-font">&#xe017;</i>所有新闻<li><a href="<?php echo U('Admin/news/create');?>"><i class="icon-font">&#xe037;</i>添加新闻</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="icon-font">&#xe018;</i>商务会议管理</a>
                    <ul class="sub-menu">
                        <li><a href="<?php echo U('Admin/meet/index');?>"><i class="icon-font">&#xe017;</i>所有会议<li><a href="<?php echo U('Admin/meet/create');?>"><i class="icon-font">&#xe037;</i>添加会议</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    
<div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="index.html">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">客房管理</span></div>
        </div>
        <div class="search-wrap">
            <div class="search-content">
                <form action="/jscss/admin/design/index" method="post">
                    <table class="search-tab">
                        <tr>
                            <th width="120">选择分类:</th>
                            <td>
                           
                                <select name="search-sort" id="">
                                 <?php if(is_array($category)): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="20"><?php echo ($vo["catname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                </select>
                               
                            </td>
                            <th width="70">关键字:</th>
                            <td><input class="common-text" placeholder="关键字" name="keywords" value="" id="" type="text"></td>
                            <td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
        <div class="result-wrap">
            <form name="myform" id="myform" method="post">
                <div class="result-title">
                    <div class="result-list">
                        <a href="<?php echo U('Admin/room/create');?>"><i class="icon-font"></i>新增客房</a>
                        <a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
                        <a id="updateOrd" href="javascript:void(0)"><i class="icon-font"></i>更新排序</a>
                    </div>
                </div>
                <div class="result-content">
                    <table class="result-tab" width="100%">
                        <tr>
                            <th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
                            <th>排序</th>
                            <th>ID</th>
                            <th>房间号</th>
                            <th>类型</th>
                            <th>状态</th>
                            <th>价格</th>
                            <th>备注</th>
                            <th>操作</th>
                        </tr>
                        <?php if(is_array($rooms)): $i = 0; $__LIST__ = $rooms;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                            <td class="tc"><input name="id[]" value="<?php echo ($vo["rid"]); ?>}" type="checkbox"></td>
                            <td>
                                <input name="ids[]" value="<?php echo ($vo["rid"]); ?>" type="hidden">
                                <input class="common-input sort-input" name="ord[]" value="<?php echo ($vo["rid"]); ?>" type="text">
                            </td>
                            <td><?php echo ($vo["id"]); ?></td>
                            <td title="509"><a target="_blank" href="#" title="509"><?php echo ($vo["rid"]); ?></a> 
                            </td>
                            <td><?php echo ($vo["catname"]); ?></td>
                            <td>已入住</td>
                            <td><?php echo ($vo["price"]); ?></td>
                            <td><?php echo ($vo["remark"]); ?></td>
                            <td>
                                <a class="link-update" href="<?php echo U('Admin/room/edit');?>/rid/<?php echo ($vo["rid"]); ?>">修改</a>
                                <a class="link-del" href="<?php echo U('Admin/room/destory');?>/rid/<?php echo ($vo["rid"]); ?>">删除</a>
                            </td>
                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
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