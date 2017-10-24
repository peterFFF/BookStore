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
	<script type="text/javascript" src="<?php echo ROOT?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo ROOT?>/js/jquery.fly.min.js"></script>
</head>
<body>
	<div class="head">
		<!-- 网站顶部  -->
		<div class="topBar">
			<div class="topBarInner">
				<div class="topLeft fl">
					<?php if(empty($_SESSION['user']['userName'])){?>
						<div class="loginArea">
							<b>欢迎来到书的世界&nbsp;请</b><a href="<?php echo APP?>/login/index" target="_blank"	class="login">登录</a> <span>|</span>
							<a	href="/RegUser/Register.aspx" target="_blank" class="regist">注册</a>
						</div>
					<?php }else{?>
						<div class="loginArea">
							<b>欢迎来到书的世界&nbsp;&nbsp;</b><a href="<?php echo APP?>/login/index" target="_blank" class="login"><?php echo $_SESSION['user']['userName']?></a> <span>|</span>
							<a	href="<?php echo APP?>/index/quit"  class="regist">退出</a>
						</div>
					<?php }?>
				</div>
				<div class="topRight fr">
					<a href="<?php echo APP?>/user/index" target="_blank">我的账户</a>
				</div>
			</div>
		</div>
		<!-- 网站头部 -->
		<div class="logoBar">
			<div class="logoBarInner">
				<div class="logo fl">
					<h1>
						<a href="<?php echo APP?>/index/index" title="中国图书网"><img src="<?php echo ROOT?>/images/booklogo.png"  width="180" height="62"/></a>
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
		<?php if(empty($rs)){?>
			<center>
					<h1>购物车空空的哦~，去看看心仪的商品吧~</h1><a href="<?php echo APP?>/index/index"><h2>去购物</h2></a>
			</center>
		<?php }else{?>
		<div class="contentInner full_car">
			<div class="shoppingProcedure">
				<span class="current">我的购物车 </span> <span>填写核对订单信息</span> <span>成功提交订单</span>
			</div>
			<div class="tabShoppCar clearfix">
				<div class="carTab">
					<ul>
						<li class="cur"><a href="javsscript:void(0)" class="">购物车(<span>2</span>)
						</a></li>
						
					</ul>
				</div>
			</div>
			<div class="shoppingCar">
				<!--购物车头部-->
					<table border="1" cellspacing="0" width=100%  >
							<tr style="background:#e4e4e4" height=60 align="center">
								<td><input type="checkbox" name="" id="checkAll"  onclick="checkAll()"/>全选</td>
								<td>封面</td>
								<td>图书名称</td>
								<td>定价（元）</td>
								<td>折扣价(元)</td>
								<td>数量操作</td>
								<td>小计（元）</td>
								<td>操作</td>
							</tr>
						<?php foreach($rs as $v){?>
							<tr style="background:FAFAFA" height=140 align="center">
								<td><input type="checkbox" name="checkOne" id="checkOne<?php echo $v['carId']?>" />选择</td>
								<td><img src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" width=100 height=100/></td>
								<td><?php echo $v['authorIntro']?></td>
								<td><?php echo $v['goodsPrice']?></td>
								<td><?php echo round($v['goodsPrice']*$v['goodsDiscounted']/100,2)?></td>
								<td><input type="text" id="bookCount"  value="<?php echo $v['bookCount']?>" style="width:25px;text-align:center" onblur="change(<?php echo $v['carId']?>,this.value)"/></td>
								<td id="id<?php echo $v['carId']?>"><?php echo round($v['goodsPrice']*$v['goodsDiscounted']*$v['bookCount']/100,2)?></td>
								<td><a href="javascript:delGoods(<?php echo $v['carId']?>)">删除</a></td>
							</tr>
						<?php }?>
						</table>
				<script type="text/javascript" src="<?php echo ROOT?>/js/jquery.min.js"></script>
				<script>
					function checkAll(){
						var obj=document.getElementsByName('checkOne');
						if($('#checkAll').prop('checked')){
							for (i=0; i < obj.length; i++) {
								obj[i].checked = true;
							}
						}else {
							for (i=0; i < obj.length; i++) {
								obj[i].checked = false;
							}
						}
					}
					function delGoods(carId) {
						if(confirm("确定要删除吗?")){
							$.ajax({
								type:'get',
								data:'carId='+carId,
								url:'<?php echo APP?>/goodsCar/del',
								success:function(rs){
									if(rs=='1'){
										window.location.reload();
									}
								}
							});
						}
					}
					function change(carId,bookCount) {
						$.ajax({
							type:'post',
							data:'carId='+carId+'&bookCount='+bookCount,
							url:'<?php echo APP?>/act/change',
							dataType:'json',
							success:function(rs){
								var totalPrice=rs.totalPrice;
								var price=rs.price;
								var disPrice=rs.disPrice;
								$(".money").html(totalPrice);
								$("#id"+carId).html(price);
								$("#J_SumCount").html(bookCount);
								$(".discoutResult").html(disPrice);
							}
						})
					}
					function delchecked(){
						if(confirm("确定要删除吗?")){
							var obj=document.getElementsByName('checkOne');
							for (i=0; i < obj.length; i++) {
								if(obj[i].checked){
									var carId=obj[i].id.substring('8');
									$.ajax({
										type:'get',
										data:'carId='+carId,
										url:'<?php echo APP?>/goodsCar/del',
										success:function(rs){
											if(rs=='1'){
												window.location.reload();
											}
										}
									});
								}
							}
						}
					}
				</script>
		</div>
		<!--购物车脚部-->
		<div class="shoppingfootWrap full_car" id="shoppingfootWrap">
			<div class="shoppingfootinner">
				<div class="shoppingFoot clearfix">
					<div class="shoppingFootLeft fl clearfix">
						<div class="removeGood fl">
							<a href="javascript:delchecked()" class="J_deleteALL">删除选中的商品</a>
						</div>						
					</div>
					<div class="shoppingFootRight fr">
						<div class="fl shoppingResult">
							<div class="result">
								已选择<span id="J_SumCount"><?php echo $totalCount?></span>件商品，商品总金额<span class="money">￥<?php echo round($totalPrice,2)?></span>
							</div>
							<div class="discoutResult">
								已优惠：￥<?php echo round($totalPriceAll-$totalPrice,2)?>
							</div>
						</div>
						<div class="submitBtn fl" id="J_submitBtn">
							<a href="<?php echo APP?>/order/index">立即结算</a>
						</div>
					</div>
				</div>
			</div>
		</div>
			<?php }?>
		<!--购物车脚部结束-->
	</div>
	<div class="recommended_panel">
		<div class="w_1000">
			<h3>你可能感兴趣的宝贝</h3>
			<div class="tablist">
				<ul class="clearfix">
					<li class="cur"><span>中图推荐的</span></li>
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
