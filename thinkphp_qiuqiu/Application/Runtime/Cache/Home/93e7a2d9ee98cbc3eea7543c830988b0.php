<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>信息发布</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0;" name="viewport" />
    <link rel="stylesheet" href="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css" />
    <script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/jquery.mobile-1.4.5/jquery-2.2.2.js"></script>
    <script src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <!--<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>-->
    <!--<link rel="stylesheet" href="lib/css/jquery.mCustomScrollbar.min.css"/>-->
    <!--<link rel="stylesheet" href="dist/css/jquery.emoji.css"/>-->
    <!--<link rel="stylesheet" href="lib/css/railscasts.css"/>-->
</head>
<body>
<style>
    .biaoti{
        font-family: 幼圆;
        font-size: large;
    }
    .biaoti a{
        font-family: 幼圆;
        font-size: large;
    }
    .shuru{
        border: 0;
        border-top: 0;
        background-color: white;
    }
    body{
        background-color: white;
    }
    div .test {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -5.8em 0 0 -4.4em;
        width: 11.6em;
        height: 8.8em;

    }
    .ui-icon-cry:after {
        background-image: url("../images/cry.png");



    }
    .ui-icon-photo:after {
        background-image: url("../images/photo.png");  /**你的图片，路径是相对于当前使用文件可以访问到的*/



    }
    .ui-icon-xiangji:after {
        background-image: url("../images/相机.png");  /**你的图片，路径是相对于当前使用文件可以访问到的*/
        border-radius: 0;


    }

    .tubiao{
        padding-left: 25px;
    }
    .xuanze{
        font-family: 幼圆;
    }
    .fabu{
        font-family: 黑体;
    }
</style>
<div data-role="page" id="w1"> <!-- 页-->
    <div data-role="header" class="biaoti"> <!-- 标题-->
        <a href="<?php echo U('Home/index/index');?>" data-role="button" data-corners="true">返回</a>
        <h1>我要组团</h1>
        <a href="#w2" data-role="button" data-corners="true">发布</a>
    </div>
    <div data-role="content">
        <form method="post" action="demoform.asp" class="xuanze">
            <fieldset data-role="fieldcontain">
                <label for="day">选择类别</label>
                <select name="day" id="day">
                    <option value="bas">篮球</option>
                    <option value="foo">足球</option>
                    <option value="pin">兵乓球</option>
                    <option value="bad">羽毛球</option>
                    <option value="run">跑步</option>
                    <option value="lun">轮滑</option>
                    <option value="dan">街舞</option>
                </select>
            </fieldset>
        </form>
        <div data-role="fieldcontain" id="editor">
            <label for="textarea" class="fabu">发布信息</label>
            <textarea cols="40" rows="8" name="textarea" id="textarea" class="shuru"data-position="incline" type="number"></textarea>
        </div>
    </div>
    <div data-role="footer"data-position="inline" >
         <div class="tubiao">
           <a href="#" data-role="button" data-icon="cry" data-iconpos="notext" class="ui-nodisc-icon" ></a>
           <a href="#" data-role="button" data-icon="photo" data-iconpos="notext"class="ui-nodisc-icon"></a>
           <a href="#" data-role="button" data-icon="xiangji" data-iconpos="notext"class="ui-nodisc-icon"></a>
        </div>
    </div>
</div>
<div data-role="page" id="w2">
    <div data-role="header">
        <a href="#w1" data-role="button" data-corners="true">返回</a>
        <h1>发布成功</h1>
    </div>
    <div data-role="content" class="test">
        <img src="/html5-qiuqiu/thinkphp_qiuqiu/Public/front/images/yes.png">
    </div>

</div>
<div data-role="page" id="w3"> <!-- 页-->
    <div data-role="header">
        <a href="#w1" data-role="button" data-corners="true">返回</a>
        <h1>选择类别</h1>
        <a href="#w1" data-role="button" data-corners="true">确定</a>
    </div>
    <div data-role="content">

    </div>
</div>

</body>
</html>