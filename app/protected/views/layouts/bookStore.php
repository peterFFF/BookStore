<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<meta name="viewport" content="width=1200" />
<title>天天书城网</title>
<meta name="keywords"	content="天天书城网">
<meta name="description"	content="天天书城网">
<link href="<?php echo ROOT?>/css/reset.css" rel="stylesheet"	type="text/css" />
<link href="<?php echo ROOT?>/css/common1.css" rel="stylesheet"	type="text/css" />
<link href="<?php echo ROOT?>/css/homeIndex.css?id=1" rel="stylesheet"	type="text/css" />
<script src="<?php echo ROOT?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo ROOT?>/js/jquery.lazyload.min.js"	type="text/javascript"></script>
<script src="<?php echo ROOT?>/js/jquery.SuperSlide.2.1.2.js"	type="text/javascript"></script>
<script type="text/javascript"	src="<?php echo ROOT?>/js/autocomplete.js"></script>
<script type="text/javascript" src="<?php echo ROOT?>/js/nav.js"></script>
<style>
		#searcBut{float:left; height:36px; background:#e60000; color:#fff; line-height:36px; width:98px; text-align:center; font-size:14px; font-family:'Microsoft YaHei'; text-decoration:none; letter-spacing:3px;}

</style>
<link rel="stylesheet" href="<?php echo ROOT?>/css/lanrenzhijia.css" media="all">
<script src="<?php echo ROOT?>/js/jquery.min.js"></script>
<script>
	jQuery(document).ready(function($) {
		$('.theme-login').click(function(){
				$('.theme-popover-mask').fadeIn(100);
				$('.theme-popover').slideDown(200);
			})
			$('.theme-poptit .close').click(function(){
				$('.theme-popover-mask').fadeOut(100);
				$('.theme-popover').slideUp(200);
			})
		});
</script>
</head>
<body>
	<!--顶部工具栏-->
	<div class="topBar">
		<div class="w1200 clearfix">
			<!--登入 注册-->
			<?php if(empty($_SESSION['user']['userName'])){?>
			<div class="loginArea">
				<b>欢迎来到<span style="font-size: larger;color:red">天天书城</span>&nbsp;请</b><a href="javascript:void(0)" class="login theme-login">登录</a> <span>|</span>
				<a	href="<?php echo APP?>/register/index" target="_blank" class="regist">注册</a>
			</div>
			<?php }else{?>
			<div class="loginArea">
				<b>欢迎来到<span style="font-size: larger;color:red">天天书城</span></b><a href="<?php echo APP?>/login/index" target="_blank" class="login"><?php echo $_SESSION['user']['userName']?></a> <span>|</span>
				<a	href="<?php echo APP?>/index/quit"  class="regist">退出</a>
			</div>
			<?php }?>
			<!--右侧工具栏-->
			<div class="webTool">
				<ul class="clearfix">
					<li>
						<div class="dt">
							<a href="<?php echo APP?>/goodsCar/index" target="_blank">购物车</a>
						</div>

					</li>

					<li class="drop">
						<div class="dt">
							<a href="<?php echo APP?>/user/index" target="_blank">个人中心</a> <b
								class="icon"></b>
						</div>

					</li>
					<li>
						<div class="dt">
							<a href="/question/default1.asp" target="_blank">帮助中心</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="theme-popover">
		<div class="theme-poptit">
			<a href="javascript:;" title="关闭" class="close">×</a>
			<h3>登录 是一种态度</h3>
		</div>
		<div class="theme-popbod dform">
			<form class="theme-signin" name="loginform" action="<?php echo APP?>/login/login" method="post">
				<ol>
					<li><h3>请您先登录！</h3></li>
					<li><strong>用户名：</strong><input class="ipt-userName" type="text" name="userName"  size="20" /><span class="info"></span></li>
					<li><strong>密&nbsp;&nbsp;&nbsp;&nbsp;码：</strong><input class="ipt-password" type="password" name="password"  size="20" /><span class="info2"></span></li>
					<li><input class="btn" type="submit" name="submit" value=" 登 录 " /></li>
					<script src="<?php echo ROOT?>/js/jquery.min.js"></script>
					<script>
						function checkUser(){
							var userVal=$(".ipt-userName").val();
							if(userVal==""){
								$(".ipt-userName").focus();
								$(".info").html('error');
							}
							if(userVal.length>14||userVal.length<2){
								$(".ipt-userName").focus();
								$(".info").html('error');
							}
						}
						function checkPassword(){
							var pwdVal=$(".ipt-password").val();
							if(pwdVal==""){
								$(".ipt-password").focus();
								//$(".ipt-password").attr("type","text").val("密码不能为空");
								$(".info2").html('error');
							}
							if(pwdVal.length>14||pwdVal.length<3){
								$(".ipt-password").focus();
								//$(".ipt-password").attr("type","text").val("密码长度为3~14位字符");
								$(".info2").html('error');
							}
						}
						$(function() {
							$(".ipt-userName").blur(function () {
								return checkUser();
							})
							$(".ipt-userName").click(function () {
								$(".ipt-userName").val("");
							})
							$(".ipt-password").blur(function () {
								return checkPassword();
							})
							$(".ipt-password").click(function () {
								$(".ipt-password").val("").attr("type", "password");
							})
						});
					</script>
				</ol>
			</form>
		</div>
	</div>
	<div class="theme-popover-mask"></div>
	<!--搜索区域-->
	<div class="searchBar">
		<div class="w1200 clearfix">
			<!--logo-->
			<div class="logo">
				<a href="<?php echo APP?>/index/index" title="中国图书网"> <img	src="<?php echo ROOT?>/images/booklogo.png"  width="180" height="70"/>
				</a>
			</div>
			<!--搜索区域-->
			<div class="searchArea">
				<div class="clearfix">
					<div class="searchFrom clearfix">
						<span class="inputWrap"> <input type="text" id="keyword" name="keyword" value="说服力" /></span>
						 <a href="javascript:search()" id="searchBut">搜索</a>
						<div class="dropSearch">
							<dl>
								<dt>
									<span>搜索全部<b class="icon"></b></span>
								</dt>
								<dd>
									<ul id="search_cates">
										<li id="cate_0" class="on">搜索全部</li>
										<li id="cate_1">书名</li>
										<li id="cate_3">作者</li>
										<li id="cate_4">出版社</li>
									</ul>
								</dd>
							</dl>
						</div>
						<script>
							function search() {
								var keyword=document.getElementById('keyword').value;
								window.location="<?php echo APP?>/goodsType/search/keyword/"+keyword;
							}
						</script>
					</div>
					<script src="<?php echo ROOT?>/js/jsHelper.js"></script>
					<script type="text/javascript">
                    var keyword = getParam("stp");
                    var cate = getParam("sCate");
                    if (keyword != undefined && keyword.length > 0)
                        $("#keyword").val(unescape(keyword));
                    if (cate != undefined && cate.length > 0) {
                        $('#search_cates').find('.on').removeClass('on');
                        $('#cate_' + cate).addClass('on');
                        $(".dropSearch dt").html('<span>' + $('#cate_' + cate).html() + '<b class="icon"></b></span>');
                        $(".dropSearch dd").hide();
                    }
                </script>
				</div>
				<div class="hotWord">
					<a
						href="/book_find2/?stp=%u56FD%u9645%u5927%u5956%u5C0F%u8BF4&sCate=0"
						target="_blank">国际大奖小说</a><a href="/5820917.htm" target="_blank">白日美人</a><a
						href="/5373895.htm" target="_blank">我的邻居是妖怪</a><a
						href="/book_find2/?stp=%u4F59%u534E&sCate=0" target="_blank">余华</a><a
						href="/5891302.htm" target="_blank">旧制度与大革命</a>
				</div>
			</div>
			<script type="text/javascript">
            /*点击搜索按钮*/
            $(".searchBut").click(function(){
                var Keyword = $.trim($("#keyword").val());
                var sCategory = $("#search_cates .on").attr('id').replace("cate_", "");
                if (Keyword == "") {
                    Keyword = $.trim($("#keyword").attr('placeholder'));
                }
                window.open("/book_find2/?stp=" + escape(Keyword) + "&sCate=" + sCategory);
                $("#bigAutocompleteContent").hide();
            })
            /*按回车键 搜索*/
            $("#keyword").keypress(function (event) {
                var e = event ? event : (window.event ? window.event : null);
                e.returnValue = false;
                var key = e.which;
                if (key == 13) {
                    var Keyword = $.trim($("#keyword").val())
                    var sCategory = $("#search_cates .on").attr('id').replace("cate_", "");
                    if (Keyword != "") {
                        window.open("/book_find2/?stp=" + escape(Keyword) + "&sCate=" + sCategory);
                        $("#bigAutocompleteContent").hide();
                    }
                }
            })
            // 分类搜索
            $(".dropSearch dl dt").hover(function () {
                $(".dropSearch dd").show();
            })
            $(".dropSearch").mouseleave(function () {
                $(".dropSearch dd").hide();
            })
            $(".dropSearch dd ul li").click(function () {
                var $this = $(this);
                $this.addClass("on").siblings().removeClass("on");
                $(".dropSearch dt").html('<span>' + $this.html() + '<b class="icon"></b></span>');
                $(".dropSearch dd").hide();
            })
            /*下拉框*/
            $("#keyword").bigAutocomplete({
                width: 428, url: "/book_find2/ajax/", callback: function (data) {
                    window.open("/book_find2/?stp=" + escape(data.label) + "");
                }
            })
        </script>
			<!--头部图片轮播-->
			<script type="text/javascript">
            //  图书轮播
            $(".headBookFocus").slide({ mainCell: ".headBookFocusPanel ul", effect: "leftLoop", interTime: 5000, pageStateCel: ".pageState", autoPlay: true })
            // 图片
            $(".headPicFocus").slide({ mainCell: ".headPicFocusPanel ul", titCell: ".buttonWrap span", interTime: 5000, autoPlay: true })
            // 公告
            $(".notice").slide({ mainCell: ".noticePanel ul", interTime: 3000, effect: "topLoop", autoPlay: true })
        </script>
			<script type="text/javascript">
            //图书网搜索补全下拉
            $("#keyword").bigAutocomplete({
                url: "/book_find2/ajax/", callback: function (data) {
                    window.open("/book_find2/?stp=" + escape(data.label) + "");
                }
            });
            $(".searchArea .searchFrom .dropSearch").hover(function () {
                var $this = $(this);
                $this.find("dd").show();
            }, function () {
                var $this = $(this);
                $this.find("dd").hide();
            });
        </script>
		</div>
	</div>
	<!--导航-->
	<div id="nav">
		<div class="w1200 clearfix">
			<div class="category-content">
				<div class="nav_category clearfix">
					<div class="all-goods">
						<h2>
							图书分类<span class="icon"></span>
						</h2>
						<div class="category" id="webCategory">
							<div class="categoryInner">
								<ul class="category-list">
                                <?php foreach ($this->typesRows as $k=>$v){?>
                                <li class="js_toggle">
										<div class="category-info list-nz">
											<h3 class="category-name">
												<a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $v['typeId']?>" class="ml-22"target="_blank"><?php  echo $v['typeName']?></a>
											</h3>
											<p class="c-category-list">
                                          <?php  foreach ($v['son'] as $key=>$val){ ?>
                                           <a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $val['typeId']?>"target="_blank"><?php  echo $val['typeName']?></a>
                                          <?php }?>
                                         </p>
											<em>&gt;</em>
										</div>
									<div class="menu-item menu-in">
										<div class="area-bg">
											<!--分类列表-->
											<ul class="sublist clearfix">
												<li>
													<?php  foreach ($v['son'] as $key=>$val){
													if(!empty($val['son'])){?>
														<h3 class="mcate-item-hd">
															<a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $val['typeId']?>" target="_blank"><?php echo $val['typeName']?></a>
														</h3>

													<p class="mcate-item-bd">
														<?php
														foreach ($val['son'] as $a => $b) {?>
															<a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $val['typeId']?>" target="_blank"><?php echo $b['typeName']?></a><span>|</span>
														<?php }}}?>
													</p>
												</li>
											</ul>
										</div>
									</div>
                               <?php }?>
								</ul>
								<div class="all_category">
									<a href="/books/kind/sort.aspx" target="_blank">全部商品分类&gt;&gt;</a>
								</div>
							</div>
							<div class="guanggao">
								<a href="/Subject/BookOrderReport.aspx" target="_blank"title="中国图书网">
                                <img src="http://image31.bookschina.com/pro-images/sbanner/sbanner_203.jpg" alt="中国图书网"></a>
							</div>
						</div>
					</div>
					<ul class="specil_category clearfix">
						<li class="cur"><a href="<?php echo APP?>/index/index" target="_parent">首页</a></li>
						<?php foreach ($this->navbar as $k=>$v){?>
						<li><a href="<?php echo APP?>/GoodsType/index/typeId/<?php echo $v['typeId']?>" target="_blank"><?php echo $v['typeName']?></a></li>
						<?php }?>
                     </ul>
				</div>
                
			</div>
		</div>

	</div>
	<script type="text/javascript">
    (function (a) {

        a.fn.Jdropdown = function (d, e) {
            if (!this.length) {
                return
            }
            if (typeof d == "function") {
                e = d;
                d = {}
            }
            var c = a.extend({
                event: "mouseover",
                current: "hover",
                delay: 0,
                fun: "default"
            }, d || {});
            var b = (c.event == "mouseover") ? "mouseout" : "mouseleave";
            a.each(this, function () {
                var h = null,
                    g = null,
                    f = false;
                a(this).bind(c.event, function () {
                    if (f) {
                        clearTimeout(g)
                    } else {
                        var j = a(this);
                        h = setTimeout(function () {
                            if (c.fun == "default") {
                                var _flag_temp = 0;
                                j.addClass(c.current).children(".menu-in").show();
                                var _c = j.children(".menu-in");
                                var _c_height = _c.height();
                                var _t_height = j.height();

                                var _c_to_top = j.offset().top - $(window).scrollTop() + _c_height;
                                var _j_to_top = j.offset().top - $(window).scrollTop() + _t_height;
                                var _c_to_bottom = $(window).height() - _c_to_top;
                                var tg_top = _c_to_bottom - 30;
                                if (_c_to_bottom < 30 && tg_top != (-1) && tg_top != 1) {

                                    if (($(window).height() - 30) < _j_to_top) {
                                        var border_height = ($.support.msie && $.support.version == '7.0') ? (-2) : 2;
                                        _c.css('top', '-' + (_c_height - _t_height + border_height) + 'px')
                                    } else {
                                        _c.css('top', tg_top + 'px');
                                    }

                                } else {
                                    _c.css('top', '-2px');
                                }
                                if ((_flag_temp == 1) && $.browser.msie && $.browser.version < 7.0) {
                                    j.addClass(c.current).children(".menu-in").hide().show();
                                }
                            }

                            f = true;
                            if (e) {
                                e(j)
                            }
                        }, c.delay)
                    }
                }).bind(b, function () {
                    if (f) {
                        var j = a(this);
                        g = setTimeout(function () {
                            if (c.fun == "default") {
                                j.removeClass(c.current).children(".menu-in").hide();
                            }
                            f = false
                        }, c.delay)
                    } else {
                        clearTimeout(h)
                    }
                })
            })
        }
    })(jQuery);

    if ($(".category-content .category").is(":hidden")) {
        $("#nav .category-content .all-goods").hover(function () {
            $(".category-content .category").show();
        },
         function () {
            $(".category-content .category").hide();
        })
    }
    $("#webCategory .js_toggle").Jdropdown({
        delay: 100
    });
    $(".specil_category li").each(function (index, obj) {
        if (window.location.pathname == '/')
            return;

        $(obj).removeClass('cur');
        if ($(obj).find('a').attr('href').toLocaleLowerCase().indexOf(window.location.pathname.toLocaleLowerCase()) != -1)
            $(obj).addClass('cur');
    });
</script>
<?php echo $content?>
<!--footer-->
    <div class="footWrap">
    <div class="footer_nav clearfix">
        <div class="w1200">
            <div class="footerNavInner clearfix">
                <dl class="fl">
                    <dt><?php echo Yii::app()->params['road']?></dt>  
                    <dd><a href="/buydemo/default.asp" target="_blank"><?php echo Yii::app()->params['roads']['shoping']?></a></dd>
                    <dd><a href="/RegUser/Register.aspx" target="_blank"><?php echo Yii::app()->params['roads']['login']?></a>
                    <dd>                                                  
                    <dd><a href="/question/default.asp" target="_blank"><?php echo Yii::app()->params['roads']['problem']?></a></dd>
                    <dd><a href="/question/default0112.asp" target="_blank"><?php echo Yii::app()->params['roads']['SpecialOffer']?></a></dd>
                </dl>
                <dl class="f2">
                    <dt>购买问题</dt>
                    <dd><a href="/vieworder/listorder.aspx" target="_blank">订单跟踪</a></dd>
                    <dd><a href="/question/default2.asp" target="_blank">付款方式</a></dd>
                    <dd><a href="/ViewOrder/deposit.aspx" target="_blank">帐户余额</a>&nbsp;&nbsp;<a href="/vieworder/Refund.aspx" target="_blank">申请提现</a></dd>
                    <dd><a href="/question/default3.asp" target="_blank">配送方式及费用、范围</a></dd>
                    <dd><a href="/groupshop/default.asp" target="_blank">集团购买</a></dd>
                </dl>
                <dl class="f3">
                    <dt>售后服务</dt>
                    <dd><a href="/question/default4.asp" target="_blank">退换货流程</a></dd>
                    <dd><a href="/sms/smsSend.aspx" target="_blank">投诉与建议</a></dd>
                </dl>
                <dl class="f4">
                    <dt>特色服务</dt>
                    <dd><a href="/ViewOrder/default.aspx" target="_blank">会员等级与积分</a></dd>
                    <dd><a href="/vieworder/Card.aspx" target="_blank">中图书馨卡</a></dd>
                    <dd><a href="/GROUPBUY/Subscribe.aspx" target="_blank">邮件订阅</a></dd>
                    <dd><a href="/VIEWORDER/myinvite.aspx" target="_blank" style="color:#e60000">邀请好友购买返5元</a></dd>
                </dl>
                <dl class="f5" style="width:134px; border-right:1px solid #dadada">
                    <dt>其他信息</dt>
                    <dd><a href="/adservice/about.asp" target="_blank">本站简介</a></dd>
                    <dd><a href="/adservice/about2.asp" target="_blank">联系我们</a></dd>
                    <dd><a href="/adservice/bookshr.asp" target="_blank">招聘英才</a></dd>
                    <dd><a href="/union/default.asp" target="_blank">网站联盟</a></dd>
                    <dd><a href="/adservice/friend.aspx" target="_blank">友情链接</a></dd>
                </dl>
            </div>
        </div>
    </div>
    <!--友情链接-->
    <div class="friend_link" id="friend_link">
    <div class="w1200">
        <div class="friend_link_inner">
            <dl class="clearfix">
                <dt>友情链接：</dt>
                <dd>
                    <ul>
                    <li><a href="http://www.rongbaozhai.cn/" target="_blank">荣宝斋</a></li>
                    <li><a href="http://www.offcn.com/" target="_blank">国家公务员考试网</a></li> 
                    <li><a href="http://yp.jd.com/" target="_blank">京东优评</a></li>
                    <li><a href="http://www.kongfz.com/ " target="_blank">孔夫子图书网</a></li>
                    <li><a href="http://tupian.baike.com/" target="_blank">互动百科</a></li>
                    <li><a href="http://www.hdb.com" target="_blank">互动吧</a></li>
                    <li><a href="http://www.365book.net/" target="_blank">全本小说网</a></li>
                    <li><a href="http://www.youlu.net/" target="_blank">有路网</a></li>
                    <li><a href="http://www.langlang.cc/" target="_blank">琅琅比价网</a></li>
                    <li><a href="http://www.e1988.com/" target="_blank">邮票</a></li>
                    <li><a href="http://www.cnkjz.com/" target="_blank">中国课件网</a></li>
                    <li><a href="http://www.hydcd.com/" target="_blank">汉语大辞典</a></li>
                    <li><a href="http://china.findlaw.cn/beijing" target="_blank">北京律师</a></li>
                    <li><a href="http://www.zgsydw.com/" target="_blank">事业单位招聘考试网</a></li>
                    <li><a href="http://kaoyan.koolearn.com/" target="_blank">考研网</a></li>
                    </ul>
                </dd>
            </dl>

        </div>
    </div>
</div>

    <div class="certifica">
        <div class="width820 clearfix">
            <div class="credit_certifica">
                <a href="javascript:void(0)" onclick="javascript:window.location.href='https://search.szfw.org/cert/l/CX20150319007127007283'" target="_blank" title="中国图书网诚信认证">
                    <img src="http://www.bookschina.com/images/chengxin.jpg" alt="诚信认证">
                </a>
                <a href="javascript:void(0)" onclick="javascript:window.location.href='http://www.ectrustprc.org.cn/seal/splash/1000006.htm'" target="_blank" title="中国图书网电子商务诚信单位认证"><img src="http://www.bookschina.com/images/ectrust.gif" alt="电子商务诚信单位认证"></a>
            </div>

            <div class="licence">
                <p><a href="http://www.miibeian.gov.cn/" target="_blank">经营许可证编号：京ICP备09013606号-3</a><a href="/include/type2.asp" target="_blank">京信市监发[2002]122号</a><span>海淀公安分局备案编号：1101083394</span></p>
                <p><a href="http://www.bookschina.com/Images/yyzz.jpg" target="_blank">营业执照</a><a href="/Images/jyxkz.jpg" target="_blank">出版物经营许可证</a></p>
            </div>

        </div>
    </div>
</div>



<script type="text/javascript">
        $(function () {

            var qqArr = [2298327825, 3518760996, 3126581837, 3327530832, 3141914713];
            var numArr = [];
            function my_ran2(n, min, max) {
                var arr = [];
                for (i = 0; i < n; i++) {
                    numArr[i] = parseInt(Math.random() * (max - min + 1) + min);
                    for (j = 0; j < i; j++) {
                        if (numArr[i] == numArr[j]) {
                            i = i - 1;
                            break;
                        }
                    }
                }
                return numArr;
            }
            var thisBox = $('.cusSer');
            var defaultTop = thisBox.offset().top;
            var slide_min = $('.cusSer .slide_min');
            var slide_box = $('.cusSer .slide_box');
            var closed = $('.cusSer .slide_box h2 img');
            slide_min.on('click', function () { slide_box.toggle(); });
            // 页面滚动的同时，悬浮框也跟着滚动
            $(window).on('scroll', function () { scro(); });
            $(window).onload = scro();
            function scro() {
                var offsetTop = defaultTop + $(window).scrollTop() + 'px';
                thisBox.animate({ top: offsetTop },
                {
                    duration: 600,	//滑动速度
                    queue: false    //此动画将不进入动画队列
                });
            }
        });
</script>
    <script type="text/javascript">
        $(".seriesBook ul li").hover(function () {
            var $this = $(this)
            $this.addClass("cur").siblings().removeClass("cur");
        })

        $(".kindFloor .floorTit ul li").hover(function () {
            var $this = $(this);
            var thisIndex = $this.index();
            var obj = $this.parents(".kindFloor").find(".floorTabItem ");

            $this.addClass("cur").siblings().removeClass("cur");
            obj.eq(thisIndex).addClass("cur").siblings().removeClass("cur");
        })

        $(".otherFloor .otherTit ul li").hover(function () {
            var $this = $(this);
            $this.addClass("cur").siblings().removeClass("cur");
            var thisIndex = $this.index();
            $(".otherFloor .otherBook ul").eq(thisIndex).addClass("cur").siblings().removeClass("cur");
        })

        $(".pubCon .pubNav ul li").hover(function () {
            var $this = $(this);
            var thisIndex = $(this).index();
            $this.addClass("cur").siblings().removeClass("cur");
            $(".pubCon .pubItem").eq(thisIndex).addClass("cur").siblings().removeClass("cur");
        })
    </script>
    <script src="/Include/dataval/logintop.js"></script>
    <script type="text/javascript">javascript: isLoging();</script>
</body>
</html>