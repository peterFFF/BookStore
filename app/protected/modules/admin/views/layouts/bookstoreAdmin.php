<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="<?php echo ROOT?>/css/pintuer.css" type="text/css">
    <link rel="stylesheet" href="<?php echo ROOT?>/css/admin.css" type="text/css">
    <script src="<?php echo ROOT?>/js/jquery.js"></script>
    <script>
        function quit() {
            if(confirm("确定要退出吗?")){
                location="<?php echo APP?>/admin/login/quit";
            }
        }
    </script>
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="<?php echo  APP?>" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="javascript:quit()"><span class="icon-power-off"></span > 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-user"></span>基本设置</h2>
  <ul style="display:block">
    <li><a href="<?php echo APP?>/admin/info/index" target="right"><span class="icon-caret-right"></span>网站设置</a></li>
    <li><a href="<?php echo APP?>/admin/pass/index" target="right"><span class="icon-caret-right"></span>修改密码</a></li>
    <li><a href="<?php echo APP?>/admin/user/index" target="right"><span class="icon-caret-right"></span>会员管理</a></li>
    <li><a href="<?php echo APP?>/admin/store/index" target="right"><span class="icon-caret-right"></span>商品库存</a></li>
    <li><a href="adv.html" target="right"><span class="icon-caret-right"></span>广告设置</a></li>
    <li><a href="column.html" target="right"><span class="icon-caret-right"></span>配送设置</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>商品管理</h2>
  <ul>
    <li><a href="<?php echo APP?>/admin/list/index" target="right"><span class="icon-caret-right"></span>商品列表</a></li>
    <li><a href="<?php echo APP?>/admin/add/index" target="right"><span class="icon-caret-right"></span>添加商品</a></li>
    <li><a href="<?php echo APP?>/admin/cate/index" target="right"><span class="icon-caret-right"></span>分类管理</a></li>
  </ul>
    <h2><span class="icon-pencil-square-o"></span>订单管理</h2>
    <ul>
        <li><a href="<?php echo APP?>/admin/order/index" target="right"><span class="icon-caret-right"></span>订单管理</a></li>
        <li><a href="<?php echo APP?>/admin/orderinfo/index" target="right"><span class="icon-caret-right"></span>订单信息</a></li>
    </ul>
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="{:U('Index/info')}" target="right" class="icon-home"> 首页</a></li>
  <li><a href="##" id="a_leader_txt">网站信息</a></li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo APP?>/admin/info/index" name="right" width="100%" height="100%"></iframe>
</div>
</body>
</html>
