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
                <a href="<?php echo APP?>/goodsCar/index" target="_blank" title="中国图书网购物车购物车">购物车</a>
                <a href="<?php echo APP?>/user/index" target="_blank" title="中国图书网我的账户">我的账户</a>
            </div>
        </div>
    </div>
    <!-- 网站头部 -->
    <div class="logoBar">
        <div class="logoBarInner">
            <div class="logo fl">
                <h1>
                    <a href="\" title="中国图书网"><img src="<?php echo ROOT?>/images/booklogo.png"  width="180" height="62" /></a>
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
<div class="content" id="car" align="center">

    <!--购物车脚部-->
    <font color="red"><h1>下单成功!</font><br>您的订单号为:<span color="#000"><?php echo $orderId?></span></h1><h2>天天书城即刻为您送达!</h2>
    <img src="<?php echo ROOT?>/images/delivery02.jpg" width="500" height="300">
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
            <div class="content_list">
                <div class="p_wrap">
                    <ul class="clearfix">
                        <li><div class="p_img">
                                <a href="/4360695.htm" target="_blank"><img
                                        src="http://image31.bookschina.com/2009/20091216/s4360695.jpg"
                                        title="社会的经济" alt="社会的经济" /></a>
                            </div>
                            <div class="p_name">
                                <a href="/4360695.htm" target="_blank">社会的经济</a>
                            </div>
                            <div class="p_price">
                                <strong><b>￥</b><span>14.4</span></strong>
                                <del>
                                    <b>￥</b><span>45.0</span>
                                </del>
                            </div>
                            <div class="p_button">
                                <a href="/shopcar/shoppingcart_add.aspx?book_id=4360695"
                                   class="J_btnAppend btn_apppend"><b></b>加入购物车</a>
                            </div></li>
                    </ul>
                </div>
                <div class="focus_dot clearfix"></div>
                <a href="javascript:void(0)" class="J_prev_page arrow left"></a> <a
                    href="javascript:void(0)" class="J_next_page arrow right"></a>
            </div>
            <div class="content_list">
                <div class="p_wrap">
                    <ul class="clearfix">
                        <li><div class="p_img">
                                <a href="/1341841.htm" target="_blank"><img
                                        src="http://image31.bookschina.com/2006/060407/s1341841.jpg"
                                        title="知识分子研究" alt="知识分子研究" /></a>
                            </div>
                            <div class="p_name">
                                <a href="/1341841.htm" target="_blank">知识分子研究</a>
                            </div>
                            <div class="p_price">
                                <strong><b>￥</b><span>4.5</span></strong>
                                <del>
                                    <b>￥</b><span>15.0</span>
                                </del>
                            </div>
                            <div class="p_button">
                                <a href="/shopcar/shoppingcart_add.aspx?book_id=1341841"
                                   class="J_btnAppend btn_apppend"><b></b>加入购物车</a>
                            </div></li>
                        <li><div class="p_img">
                                <a href="/7281764.htm" target="_blank"><img
                                        src="http://image31.bookschina.com/2017/zuo/8/s7281764.jpg"
                                        title="芥川龙之介小说精选" alt="芥川龙之介小说精选" /></a>
                            </div>
                            <div class="p_name">
                                <a href="/7281764.htm" target="_blank">芥川龙之介小说精选</a>
                            </div>
                            <div class="p_price">
                                <strong><b>￥</b><span>3.9</span></strong>
                                <del>
                                    <b>￥</b><span>11.0</span>
                                </del>
                            </div>
                            <div class="p_button">
                                <a href="/shopcar/shoppingcart_add.aspx?book_id=7281764"
                                   class="J_btnAppend btn_apppend"><b></b>加入购物车</a>
                            </div></li>
                        <li><div class="p_img">
                                <a href="/4776914.htm" target="_blank"><img
                                        src="http://image31.bookschina.com/2010/20100815/s4776914.jpg"
                                        title="周国平－闲情的分量" alt="周国平－闲情的分量" /></a>
                            </div>
                            <div class="p_name">
                                <a href="/4776914.htm" target="_blank">周国平－闲情的分量</a>
                            </div>
                            <div class="p_price">
                                <strong><b>￥</b><span>9.9</span></strong>
                                <del>
                                    <b>￥</b><span>28.0</span>
                                </del>
                            </div>
                            <div class="p_button">
                                <a href="/shopcar/shoppingcart_add.aspx?book_id=4776914"
                                   class="J_btnAppend btn_apppend"><b></b>加入购物车</a>
                            </div></li>
                        <li><div class="p_img">
                                <a href="/6372270.htm" target="_blank"><img
                                        src="http://image12.bookschina.com/2013/20131101/s6372270.jpg"
                                        title="河合隼雄－有益的父母,有害的父母" alt="河合隼雄－有益的父母,有害的父母" /></a>
                            </div>
                            <div class="p_name">
                                <a href="/6372270.htm" target="_blank">河合隼雄－有益的父母,有害的父母</a>
                            </div>
                            <div class="p_price">
                                <strong><b>￥</b><span>8.3</span></strong>
                                <del>
                                    <b>￥</b><span>26.0</span>
                                </del>
                            </div>
                            <div class="p_button">
                                <a href="/shopcar/shoppingcart_add.aspx?book_id=6372270"
                                   class="J_btnAppend btn_apppend"><b></b>加入购物车</a>
                            </div></li>
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
