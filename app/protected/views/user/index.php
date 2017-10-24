<?php
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="renderer" content="webkit" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>购物车_中国图书网（中图网）</title>
<link type="text/css" rel="stylesheet"
	href="<?php echo ROOT?>/css/common.css" />
<link type="text/css" rel="stylesheet"
	href="<?php echo ROOT?>/css/simplepop.css" />
<link type="text/css" rel="stylesheet"
	href="<?php echo ROOT?>/css/headfoot.css" />
<link type="text/css" rel="stylesheet"
	href="<?php echo ROOT?>/css/shoppingCar.css" />
	<style>
		#a1{
			width:100%;
			position:absolute;
			height:100%;
			background:#000;
			opacity:0.5;
			z-index:9900;
			left:0;
			top:0;
		}
		#a2{
			width:240px;
			position:fixed;
			height:310px;
			background:#fff;
			z-index:9999;
			top:50px;
			margin-left:800px;
			margin-top:300px;
		}
		.pop_con input[type=text]{
			border:none;
			font:14px 'Segoe UI','Arial',sans-serif;
			color:#888;
			outline:none;
			height: 35px;
			margin: 0 auto 22px;
			padding: 0 10px 0 50px;
			width: 200px;
		}

	</style>
</head>
<body>
	<div class="head">
		<!-- 网站顶部  -->
		<div class="topBar">
			<div class="topBarInner">
				<div class="topLeft fl">
					<?php if(empty($_SESSION['user']['userName'])){?>
						<div class="loginArea">
							<b>欢迎光临三体图书网&nbsp;请</b><a href="<?php echo APP?>/login/index" target="_blank"	class="login">登录</a> <span>|</span>
							<a	href="/RegUser/Register.aspx" target="_blank" class="regist">注册</a>
						</div>
					<?php }else{?>
						<div class="loginArea">
							<b>欢迎光临三体图书网&nbsp;&nbsp;</b><a href="<?php echo APP?>/login/index" target="_blank" class="login"><?php echo $_SESSION['user']['userName']?></a> <span>|</span>
							<a	href="<?php echo APP?>/index/quit"  class="regist">退出</a>
						</div>
					<?php }?>
				</div>
				<div class="topRight fr">
					<a href="/shopcar/shoppingcart.aspx" target="_blank" title="中国图书网购物车购物车">购物车</a>
					<a href="/vieworder/default.aspx" target="_blank" title="中国图书网我的账户">我的账户</a>
				</div>
			</div>
		</div>
		<!-- 网站头部 -->
		<div class="logoBar">
			<div class="logoBarInner">
				<div class="logo fl">
					<h1>
						<a href="<?php echo APP?>/index/index" ><img src="<?php echo ROOT?>/images/booklogo.png"  width="180" height="62" /></a>
					</h1>
				</div>
				<div class="ad fr">
					<span class="zhengbang">正版好图书</span><span class="liujiu">全场满69包邮</span><span
						class="yizhe">特价书一折起</span>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="content" id="car">
		<div class="contentInner full_car">
			<div class="tabShoppCar clearfix">
				<div class="carTab">
					<ul>
						<li class="cur"><a href="javsscript:void(0)" class="">用户信息</a></li>
					</ul>
				</div>
			</div>
			<div class="pop_con" width="400" align="center">
				<table border="1" width="450" height="370" style="font-size:17px;background-color:#FBE3E4;box-shadow: 8px 8px 2px #eee " >
					<tr>
						<td width="100"  ><font style="font-size: larger">用户名</font></td><td><?php echo $rs['userName']?></td>
					</tr>
					<tr>
						<td width="100" ><font style="font-size: larger">登录名</font></td><td><?php echo $rs['userName']?></td>
					</tr>
					<tr>
						<td width="100" ><font style="font-size: larger">邮&nbsp;&nbsp;&nbsp;&nbsp;箱</font></td><td><?php echo $rs['email']?></td>
					</tr>
					<tr>
						<td width="100" ><font style="font-size: larger">等&nbsp;&nbsp;&nbsp;&nbsp;级</font></td><td><?php echo $rs['levelName']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" id="payment">
								<?php if($rs['levelName']=='普通'){?>
								<img src="<?php echo ROOT?>/images/vip.jpg" width="40" height="30">
								<?php }?>
							</a></td>
					</tr>
					<tr>
						<div class="submitBtn fl" id="J_submitBtn">

						</div>
					</tr>
				</table>
			</div>

				<!--购物车头部-->
		</div>
		<!--购物车脚部-->
		<div class="shoppingfootWrap full_car" id="shoppingfootWrap">
			<div class="shoppingfootinner">
				<div class="shoppingFoot clearfix">
					<div class="shoppingFootRight fr">
						<div class="fl shoppingResult">

						</div>

						<script src="<?php echo ROOT?>/js/jquery.min.js"></script>
						<script>
							$(function(){
								$('#payment').click(function(){
									$('<div></div>').appendTo($(document.body)).attr('id','a1');
									$('<div align="center">' +
										'<p>请选择支付方式</p>' +
										'<select name="" id="">' +
											'<option value="">支付宝</option>' +
											'<option value="">微信支付</option>' +
											'<option value="">网银支付</option>' +
										'</select>' +
										'<br><br><img src="<?php echo ROOT?>/images/code.gif" width="230" height="230"><br/><a href="<?php echo APP?>/user/up">确认</a></div>').appendTo($(document.body)).attr('id','a2');
								});
							});
						</script>
					</div>
				</div>
			</div>
		</div>

		<!--购物车脚部结束-->
	</div>


	<div class="recommended_panel">
		<div class="w_1000">
			<h3>你可能感兴趣的宝贝</h3>
			<div class="tablist">
				<ul class="clearfix">
					<li class="cur"><span>中图推荐的</span></li>
					<li><span>最近浏览的</span></li>
					<li><span>猜你喜欢的</span></li>
				</ul>
				<div class="wrap_line">
					<div class="line"></div>
				</div>
			</div>
			<div class="content_panel">
				<div class="content_list">
					<div class="p_wrap">
						<ul class="clearfix">
							<?php foreach($res as $v){?>
								<li><div class="p_img"><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><img src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" width="130" height="150"/></a>
									</div>
									<div class="p_name">
										<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a>
									</div>
									<div class="p_price">
										<strong><b>￥</b><span><?php echo round($v['goodsPrice']*$v['goodsDiscounted']/100,2)?></span></strong>
										<del>
											<b>￥</b><span><?php echo $v['goodsPrice']?></span>
										</del>
									</div>
								</li>
							<?php }?>
						</ul>
					</div>
					<div class="focus_dot clearfix"></div>
					<a href="javascript:void(0)" class="J_prev_page arrow left"></a> <a
						href="javascript:void(0)" class="J_next_page arrow right"></a>
				</div>
			</div>
		</div>
	</div>
	<footer>
		<div class="footer">
			<div class="footer_nav w_1000 clearfix">
				<dl class="fl">
					<dt>新手上路</dt>
					<dd>
						<a href="/buydemo/default.asp" target="_blank">购物流程演示</a>
					</dd>
					<dd>
						<a href="/RegUser/Register.aspx" target="_blank">注册用户 更改注册信息</a>
					</dd>
					<dd>
						<a href="/question/default.asp" target="_blank">购物常见问题</a>
					</dd>
					<dd>
						<a href="/question/default0112.asp" target="_blank">关于特价书的常见问题</a>
					</dd>
				</dl>
				<dl class="f2">
					<dt>购买问题</dt>
					<dd>
						<a href="/vieworder/listorder.aspx" target="_blank">订单跟踪</a>
					</dd>
					<dd>
						<a href="/question/default2.asp" target="_blank">付款方式</a>
					</dd>
					<dd>
						<a href="/ViewOrder/deposit.aspx" target="_blank">帐户余额</a><a
							href="/vieworder/Refund.aspx" target="_blank">申请提现</a>
					</dd>
					<dd>
						<a href="/question/default3.asp" target="_blank">配送方式及费用、范围</a>
					</dd>
					<dd>
						<a href="/groupshop/default.asp" target="_blank">集团购买</a>
					</dd>
				</dl>
				<dl class="f3">
					<dt>售后服务</dt>
					<dd>
						<a href="/question/default4.asp" target="_blank">退换货流程</a>
					</dd>
					<dd>
						<a href="/sms/smsSend.aspx" target="_blank">投诉与建议</a>
					</dd>
				</dl>
				<dl class="f4">
					<dt>特色服务</dt>
					<dd>
						<a href="/ViewOrder/default.aspx" target="_blank">会员等级与积分</a>
					</dd>
					<dd>
						<a href="/vieworder/Card.aspx" target="_blank">中图书馨卡</a>
					</dd>
					<dd>
						<a href="/GROUPBUY/Subscribe.aspx" target="_blank">邮件订阅</a>
					</dd>
					<dd>
						<a href="/VIEWORDER/myinvite.aspx" target="_blank"
							style="color: #F00">邀请好友购买返5元</a>
					</dd>
				</dl>
				<dl class="f5">
					<dt>其他信息</dt>
					<dd>
						<a href="/adservice/about.asp" target="_blank">本站简介</a>
					</dd>
					<dd>
						<a href="/adservice/about2.asp" target="_blank">联系我们</a>
					</dd>
					<dd>
						<a href="/adservice/bookshr.asp" target="_blank">招聘英才</a>
					</dd>
					<dd>
						<a href="/union/default.asp" target="_blank">网站联盟</a>
					</dd>
					<dd>
						<a href="/adservice/friend.aspx" target="_blank">友情链接</a>
					</dd>
				</dl>
				<dl class="weixin">
					<dt>关注中图网微信号</dt>
					<dd>
						<img src="/Images/weixin.jpg" alt="中国图书网官方微信" />
					</dd>
				</dl>
			</div>
			<div class="certifica w_1000">
				<div class="credit_certifica">
					<a href='https://search.szfw.org/cert/l/CX20150319007127007283'
						target='_blank' title="中国图书网诚信认证"><img
						src='http://www.bookschina.com/images/chengxin.jpg' alt="诚信认证"></a><a
						href="http://www.ectrustprc.org.cn/seal/splash/1000006.htm"
						target="_blank" title="中国图书网电子商务诚信单位认证"><img
						src="http://www.bookschina.com/images/ectrust.gif"
						alt="电子商务诚信单位认证"></a>
				</div>
				<div class="licence">
					<p>
						<a href="http://www.miibeian.gov.cn/" target="_blank">经营许可证编号：京ICP备09013606号-3</a><a
							href="/include/type2.asp" target="_blank">京信市监发[2002]122号</a><span>海淀公安分局备案编号：1101083394</span>
					</p>
					<p>
						<a href="http://www.bookschina.com/Images/yyzz.jpg"
							target="_blank">营业执照</a><a href="/Images/jyxkz.jpg"
							target="_blank">出版物经营许可证</a>
					</p>
				</div>
			</div>
		</div>
	</footer>
	
	<div class="cusSer">
		<div class="cusSerIn">
			<a class="slide_min"
				onclick="NTKF.im_openInPageChat('kf_9067_1501484109259')">在线客服</a>
		</div>
	</div>
	
	</div>

	<script type="text/javascript" src="<?php echo ROOT?>/js/jquery.min.js?id=1"></script>
	<script type="text/javascript" src="<?php echo ROOT?>/js/simplepop.js?id=1"></script>
	<script type="text/javascript" src="<?php echo ROOT?>/js/jsHelper.js?id=1"></script>
	<script type="text/javascript" src="<?php echo ROOT?>/js/shoppingcar.js?ttm=20170819123"></script>
	<script type="text/javascript" src="<?php echo ROOT?>/logintop.js"></script>
	<script type="text/javascript">javascript: logincommon();</script>
</body>
</html>
