<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="/tp1/Public/Js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/tp1/Public/Js/index.js"></script>
<link rel="stylesheet" href="/tp1/Public/Css/public.css" />
<link rel="stylesheet" href="/tp1/Public/Css/index.css" />
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<base target="iframe"/>
<head>
</head>
<body>
<div id="top">
    <div class="menu">
        <a href="#">选择按钮</a>
        <a href="#">选择按钮</a>
        <a href="#">选择按钮</a>
        <a href="#">选择按钮</a>
        <a href="#">选择按钮</a>
    </div>
    <div class="exit">
        <a href="<?php echo U('Admin/Index/logout');?>" target="_self">退出</a>
        <a href="" target="_blank">获得帮助</a>
        <a href="" target="_blank">网站</a>
    </div>
</div>
<div id="left">
    <dl>
        <dt>认证管理</dt>
        <dd><a href="AUTH/addGroup">添加用户组</a></dd>
        <dd><a href="AUTH/manageGroup">管理用户组</a></dd>
        <dd><a href="AUTH/addRule">添加认证规则</a></dd>
        <dd><a href="AUTH/manageRule">管理认证规则</a></dd>
        <dd><a href="User/index">用户管理</a></dd>
        <dd><a href="#">功能标题</a></dd>
    </dl>
    <dl>
        <dt>功能标题</dt>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
    </dl>
    <dl>
        <dt>功能标题</dt>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
        <dd><a href="#">功能标题</a></dd>
    </dl>
</div>
<div id="right">
    <iframe name="iframe" src="<?php echo U('Admin/Index/welcome');?>"></iframe>
</div>
</body>
</html>