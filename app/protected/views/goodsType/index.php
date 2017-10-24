<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=1200" />
    <title>淘书团-淘尽天下好书，国内最大的团购、淘书网站，中国图书网淘书团</title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <meta name="keywords" content="淘书团,淘书网,图书网,团购" />
    <meta name="description" content="淘书网最低1折团购好书,少儿,文学,小说,等上百种分类图书,淘书团所有团购图书都经过层层筛选,实时更新团购图书,淘书团天天上新品,好书淘不停,中国图书网淘书团购网站." />
    <link href="<?php echo ROOT?>/css/base.css" rel="stylesheet" />

    <link type="text/css" rel="stylesheet" href="<?php echo ROOT?>/css/groupbuyCommon.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT?>/css/groupIndex.css" />

    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?9c6c2163586a0d4167303f5ee4031692";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>
<div class="pageHeader">
    <div class="topBar">
        <div class="width1200 clearfix">
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
            <div class="topNav">
                <a href="<?php echo APP?>/goodscar/index" rel="nofollow">购物车</a><span>|</span>
                <a href="<?php echo APP?>/user/index" rel="nofollow">我的账户</a><span>|</span>
                <a href="http://www.bookschina.com/question/default1.asp" rel="nofollow">帮助中心</a><span>|</span>

            </div>
        </div>
    </div>
    <div class="headSearchArea">
        <div class="width1200 clearfix">
            <div class="logo">
                <a href="http://tuan.bookschina.com/" title="淘书团" class="logoTst">淘书团</a>
            </div>

            <div class="searchArea">
                <div class="searchForm">
                    <input type="text" id="keyword" class="searchKeyword" placeholder="书名/作者" autocomplete="off" />
                    <button class="button"><i onclick="search()">搜索</i></button>
                    <div class="dropDown">
                        <select id="selectSearchCategory" class="form_Search_Category">
                            <option value="0" selected="">搜索全部</option>
                            <option value="1">书名</option>
                            <option value="3">作者</option>
                            <option value="4">出版社</option>
                        </select>
                    </div>
                    <script>
                        function search() {
                            var keyword=document.getElementById('keyword').value;
                            window.location="<?php echo APP?>/goodsType/search/keyword/"+keyword;
                        }
                    </script>
                </div>
            </div>
        </div>
    </div>
    <div class="pageNav">
        <div class="width1200">
            <ul class="specil_category clearfix">
                <li class="cur"><a href="<?php echo APP?>/index/index" target="_parent">首页</a></li>
                <?php foreach ($navbar as $v){?>
                    <li><a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $v['typeId']?>" target="_blank"><?php echo $v['typeName']?></a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</div>
<div class="pageBanner">

</div>

<div class="pageContent">
    <div class="selector">
        <div class="selectorInner">
            <div class="guide_box clearfix">
                <div class="guide_title"><strong>图书分类</strong></div>
                <div class="guide_content">
                    <ul>
                        <li class="cur"><a href="#" title="全部">全部</a></li>
                        <li class=""><a href="#" title="文学">文学</a></li>
                        <li class=""><a href="#" title="社科">社科</a></li>
                        <li class=""><a href="#" title="童书">童书</a></li>
                        <li class=""><a href="#" title="全部">艺术</a></li>
                        <li class=""><a href="#" title="文教">文教</a></li>
                        <li class=""><a href="#" title="生活">生活</a></li>
                        <li class=""><a href="#" title="其他">其他</a></li>
                    </ul>
                </div>
            </div>

            <div class="guide_box clearfix">
                <div class="guide_title"><strong>价格</strong></div>
                <div class="guide_content">
                    <ul class="clearfix">
                        <li class="cur"><a href="/Home-t0-c0-r0-o11" title="全部">全部</a></li>
                        <li class=""><a href="#" title="30元以下">30元以下</a></li>
                        <li class=""><a href="#" title="30－50元">31－50元</a></li>
                        <li class=""><a href="#" title="50－100元">50－100元</a></li>
                        <li class=""><a href="#" title="100元以上">100元以上</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
    <div class="sortBar">
        <div class="sortInner clearfix">
            <div class="sortLeft clearfix">
                <ul class="clearfix">
                    <li class="sortNew cur"><a href="/Home-t0-c0-r0-o10">新品</a></li>
                    <li class="sortPrice "><a href="/Home-t0-c0-r0-o20">价格</a></li>
                    <li class="sortDiscout "><a href="/Home-t0-c0-r0-o30">折扣</a></li>
                    <li class="dtog sortSale ">
                        <span>总销量排行</span>

                    </li>
                </ul>

            </div>

        </div>
    </div>
    <div class="taoList">
        <div class="taoListInner">
            <ul id="taoList" class="clearfix">
                <?php foreach($rs as $v){?>
                <li>
                    <h2><?php echo $v['authorIntro']?></h2>
                    <div class="infor">
                        <div class="bookCover"><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>"  target="_blank"> <img src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" ></a></div>
                        <p class="bookName"><a href="#"  ><?php echo $v['author']?></a></p>
                        <p class="bookName2"><a href="#"  ><?php echo $v['authorIntro']?></a></p>
                    </div>
                    <div class="price">
                        <span class="salePrice">&yen;<?php echo round($v['goodsPrice']*$v['goodsDiscounted']/100,2)?></span>
                    </div>
                    <div class="otherInfor">
                        <span class="dingjia">定价：&yen;<?php echo $v['goodsPrice']?></span><span class="zhekou">折扣:<?php echo round($v['goodsDiscounted']/10,2)?>折</span>
                    </div>
                    <div class="buyButton">
                        <a target="_blank" href="/Tuan/6201" class="grounpBuy1">去购买</a>
                    </div>
                    <div class="newicong"></div>
                    <div class="icon"><img src="http://www.bookschina.com/Images/tubiao2.png" style="display:none"  ></div>
                </li>
                <?php }?>
            </ul>
        </div>
        <div class="page">
            <div class="page">
                <?php if($currentPage==1){?>
                    <div class="pagelist"> <a href="#">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $typeId?>/page/<?php echo $currentPage+1?>">下一页</a><a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $typeId?>/page/<?php echo $totalPage?>">尾页</a> </div>
                <?php }elseif($currentPage==$totalPage){?>
                    <div class="pagelist"> <a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $typeId?>/page/<?php echo $currentPage-1?>">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="#">下一页</a><a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $typeId?>/page/<?php echo $totalPage?>">尾页</a> </div>

                <?php }else{?>
                    <div class="pagelist"> <a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $typeId?>/page/<?php echo $currentPage-1?>">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $typeId?>/page/<?php echo $currentPage+1?>">下一页</a><a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $typeId?>/page/<?php echo $totalPage?>">尾页</a> </div>
                <?php }?>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="footer_nav w_1000 clearfix">
        <dl class="fl">
            <dt>新手上路</dt>
            <dd>
                <a href="http://www.bookschina.com//buydemo/default.asp" rel="nofollow" target="_blank">购物流程演示</a>
            </dd>
            <dd><a href="http://www.bookschina.com//RegUser/Register.aspx" rel="nofollow" target="_blank">注册用户 更改注册信息</a></dd>
            <dd><a href="http://www.bookschina.com//question/default.asp" rel="nofollow" target="_blank">购物常见问题</a></dd>
            <dd><a href="http://www.bookschina.com//question/default0112.asp" rel="nofollow" target="_blank">关于特价书的常见问题</a></dd>
        </dl>
        <dl class="f2">
            <dt>购买问题</dt>
            <dd><a href="http://www.bookschina.com//vieworder/listorder.aspx" rel="nofollow" target="_blank">订单跟踪</a></dd>
            <dd><a href="http://www.bookschina.com//question/default2.asp" rel="nofollow" target="_blank">付款方式</a></dd>
            <dd><a href="http://www.bookschina.com//ViewOrder/deposit.aspx" rel="nofollow" target="_blank">帐户余额</a><a href="http://www.bookschina.com//vieworder/Refund.aspx" target="_blank">申请提现</a></dd>
            <dd><a href="http://www.bookschina.com/question/default3.asp" rel="nofollow" target="_blank">配送方式及费用、范围</a></dd>
            <dd><a href="http://www.bookschina.com//groupshop/default.asp" rel="nofollow" target="_blank">集团购买</a></dd>
        </dl>
        <dl class="f3">
            <dt>售后服务</dt>
            <dd>
                <a href="http://www.bookschina.com//question/default4.asp" rel="nofollow" target="_blank">退换货流程</a>
            </dd>
            <dd>
                <a href="http://www.bookschina.com//sms/smsSend.aspx" rel="nofollow" target="_blank">投诉与建议</a>
            </dd>
        </dl>
        <dl class="f4">
            <dt>特色服务</dt>
            <dd><a href="http://www.bookschina.com//ViewOrder/default.aspx" rel="nofollow" target="_blank">会员等级与积分</a></dd>
            <dd>
                <a href="http://www.bookschina.com//vieworder/Card.aspx" rel="nofollow" target="_blank">中图书馨卡</a>
            </dd>
            <dd>
                <a href="http://www.bookschina.com//GROUPBUY/Subscribe.aspx" rel="nofollow" target="_blank">邮件订阅</a>
            </dd>
            <dd><a href="http://www.bookschina.com//VIEWORDER/myinvite.aspx" rel="nofollow" target="_blank" style="color: #F00">邀请好友购买返5元</a></dd>
        </dl>
        <dl class="f5">
            <dt>其他信息</dt>
            <dd>
                <a href="http://www.bookschina.com//adservice/about.asp" target="_blank">本站简介</a>
            </dd>
            <dd>
                <a href="http://www.bookschina.com//adservice/about2.asp" target="_blank">联系我们</a>
            </dd>
            <dd><a href="http://www.bookschina.com//adservice/bookshr.asp" target="_blank">招聘英才</a></dd>
            <dd><a href="http://www.bookschina.com//union/default.asp" target="_blank">网站联盟</a></dd>
            <dd><a href="http://www.bookschina.com//adservice/friend.aspx" target="_blank">友情链接</a></dd>
        </dl>
        <dl class="weixin">
            <dt>关注中图网微信号</dt>
            <dd><img src="http://www.bookschina.com/Images/weixin.jpg" alt="中国图书网官方微信"></dd>
        </dl>
    </div>
    <div class="certifica w_1000">
        <div class="credit_certifica">
            <a href="https://search.szfw.org/cert/l/CX20150319007127007283" rel="nofollow" target="_blank" title="中国图书网诚信认证">
                <img src="http://www.bookschina.com/images/chengxin.jpg" alt="诚信认证">
            </a>
            <a href="http://www.ectrustprc.org.cn/seal/splash/1000006.htm" rel="nofollow" target="_blank" title="中国图书网电子商务诚信单位认证">
                <img src="http://www.bookschina.com/images/ectrust.gif" alt="电子商务诚信单位认证">
            </a>
        </div>
        <div class="licence">
            <p>
                <a href="http://www.miibeian.gov.cn/" rel="nofollow" target="_blank">经营许可证编号：京ICP备09013606号-3</a>
                <a href="/include/type2.asp" target="_blank">京信市监发[2002]122号</a><span>海淀公安分局备案编号：1101083394</span>
            </p>
            <p>
                <a href="http://www.bookschina.com/Images/yyzz.jpg" rel="nofollow" target="_blank">营业执照</a>
                <a href="/Content/images/jyxkz.jpg" rel="nofollow" target="_blank">出版物经营许可证</a>
            </p>
        </div>
    </div>
</div>


<div class="bocktop"><a href="javascript:scrollTo(0,0)">返回顶部</a></div>
<script type="text/javascript" src="/Content/js/jquery.min.js"></script>
<script type="text/javascript" src="/Content/js/autocomplete.js"></script>
<script type="text/javascript">


    $("#tstSearchInput").focus(function () {
        $(".sortBar .sortRight .tuangouForm").addClass("act");
    })


    $("#tstSearchInput").blur(function () {
        $(".sortBar .sortRight .tuangouForm").removeClass("act");
    })

    // 返回顶部
    $(window).scroll(function () {
        var h = $(window).scrollTop();
        var backTop = $(".bocktop");
        var rightFloatBar = $(".rightFloatBar");
        if (h > 555) {
            backTop.slideDown();
        } else {
            backTop.slideUp();
        }
        if (h > 174) {
            rightFloatBar.css("top", 0);
        } else {
            rightFloatBar.css("top", (174 - h) + "px");
        }
    });
    //图书网搜索
    $(".searchForm button").click(function () {
        var Keyword = $.trim($(".searchKeyword").val());
        var sCategory = $.trim($(".form_Search_Category").val());
        if (Keyword == "" || Keyword == "请输入书名、作者、出版社或ISBN") {
            alert("请您输入搜索内容。");
            $(".searchKeyword").focus();
            return false;
        }
        window.open("http://www.bookschina.com/book_find2/?stp=" + escape(Keyword) + "&sCate=" + sCategory);

    });
    //  按搜索键
    $(".searchKeyword").keypress(function (e) {
        var key = e.which;
        if (key == 13) {
            var Keyword = $.trim($(".searchKeyword").val());
            if (Keyword == "" || Keyword == "请输入书名、作者、出版社或ISBN") {
                alert("请您输入搜索内容。");
                $(".searchKeyword").focus();
                return false;
            }
            window.open("http://www.bookschina.com/book_find2/?stp=" + escape(Keyword) + "");
        }
    });
    //图书网搜索补全下拉
    $("#keyword").bigAutocomplete({
        url: "/Home/Search", callback: function (data) {
            window.open("http://www.bookschina.com/book_find2/?stp=" + escape(data.label) + "");
        }
    });

    //团购搜索
    $("#tstSearchBtuuon").click(function () {
        var sText = $.trim($("#tstSearchInput").val())
        if (sText != "") {
            window.open("/Find?wd=" + escape(sText));
        }
    });
    $("#tstSearchInput").keypress(function (e) {
        var key = e.which;
        if (key == 13) {
            var sText = $.trim($("#tstSearchInput").val())
            if (sText != "") {
                window.open("/Find?wd=" + escape(sText));
            }
        }
    });
</script>

<script src="/Content/js/jsHelper.js"></script>
<script type="text/javascript">
    $(function () {
        var isScroll = true;
        var oLoading = $(".loading");
        var winH = $(window).height();
        $(window).scroll(function () {
            var pageH = $(document.body).height();
            var scrollT = $(window).scrollTop();
            var _this = (pageH - winH - scrollT) / winH;
            if (_this < 1) {
                if (isScroll) {
                    isScroll = false;
                    if (oLoading.attr("data-url") == null || oLoading.attr("data-url") == "") {
                        //加载完了

                        oLoading.show();
                        oLoading.html("没有更多了");

                        return false;
                    }
                    bookinit();
                }
            }
        });

        function bookinit() {
            var oPars = strPar();
            $.ajax({
                type: 'get',
                url: "/Home/GroupList",
                data: { Type: oPars[0], Category: oPars[1], Price: oPars[2], Order: oPars[3], Page: oPars[4], Tyjson: true },
                dataType: 'json',
                beforeSend: function (x) {
                    //加载中...
                    oLoading.show();
                    oLoading.html("加载中");

                },
                success: function (data) {
                    if (data.State == 200) {
                        if (data.Data.length > 0) {
                            var Html = "";
                            for (var i = 0; i < data.Data.length; i++) {
                                var item = data.Data[i];
                                Html += '<li><h2>' + item.id + '</h2><div class="infor"><div class="bookCover"><a href="/Tuan/' + item.id + '" title="' + item.book_name + '" target="_blank"> <img src="' + item.group_image + '" alt="' + item.book_name + '"></a></div><p class="bookName"><a href="/Tuan/' + item.id + '" title="' + item.group_title + '" target="_blank">' + item.group_title + '</a></p></div><div class="price"><span class="salePrice">&yen;' + item.group_price + '</span><span class="salequantity"><b>' + item.salequantity + '</b>人已购买</span></div><div class="otherInfor"><span class="dingjia">定价：&yen;' + item.book_price + '</span><span class="zhekou">折扣:' + parseFloat(item.group_discount).toFixed(1) + '折</span></div><div class="buyButton">';
                                if (item.salestate == 0) {
                                    if (item.yugao && new Date(item.startdate) > new Date()) {
                                        Html += '<a target="_blank" href="/Tuan/' + item.id + '" class="grounpBuy2">新品预告</a>';
                                    } else {
                                        if (item.max_quantity - item.salequantity > 0) {
                                            Html += '<a target="_blank" href="/Tuan/' + item.id + '" class="grounpBuy1">去购买</a>';
                                        } else {
                                            if (item.buhuo) {
                                                if (item.group_price=="1") {
                                                    Html += '<a target="_blank" href="/Tuan/' + item.id + '" class="grounpBuy3">已抢完</a>';
                                                } else {
                                                    Html += '<a target="_blank" href="/Tuan/' + item.id + '" class="grounpBuy4">补货中</a>';
                                                }
                                            } else {
                                                Html += '<a target="_blank" href="/Tuan/' + item.id + '" class="grounpBuy1">去购买</a>';
                                            }
                                        }
                                    }
                                } else {
                                    Html += '<a target="_blank" href="/Tuan/' + item.id + '" class="grounpBuy3">已结束</a>';
                                }
                                var day = Day(item.startdate, new Date());
                                var activity61 =  "style='display:none'";
                                if (day > 0 && day <= 1) {
                                    Html += '</div><div class="newicong"></div><div class="icon"><img src="http://www.bookschina.com/Images/tubiao2.png" ' + activity61 + ' alt="六一儿童节"></div></li>';
                                } else {
                                    Html += '</div><div class="icon"><img src="http://www.bookschina.com/Images/tubiao2.png"  ' + activity61 + ' alt="六一儿童节"></div></li>';
                                }
                            }
                            if (Html == "") {
                                oLoading.attr("data-url", "");
                                oLoading.hide();
                            } else {
                                oLoading.attr("data-url", (oPars[0] + "-" + oPars[1] + "-" + oPars[2] + "-" + oPars[3] + "-" + (parseInt(oPars[4]) + 1)));
                                $("#taoList").append(Html);
                                isScroll = true;
                                $(".page").html(data.Msg);
                            }
                        } else {
                            oLoading.attr("data-url", "");
                            oLoading.show();
                            oLoading.html("没有更多了");
                            $(".page").hide();
                        }
                    } else {
                        $("#taoList").children().last().remove();
                        $("#taoList").after('<div id="nextPage"><a href="/Home-t' + oPars[0] + '-c' + oPars[1] + '-r' + oPars[2] + '-o' + oPars[3] + '-' + oPars[4] + '" title="下一页"><img src="/Content/images/next_page.jpg" alt="下一页"></a></div>');
                    }
                },
                error: function () { alert("网络开小差 请检查您的网络 稍后重试"); }
            });
        }

        //{ Type: oPars[0], Category: oPars[1], Price: oPars[2], Order: oPars[3], Page: oPars[4] }
        function strPar() {
            var oPar = $(".loading").attr("data-url");
            var oPars = new Array(); //定义一数组
            oPars = oPar.split("-"); //字符分割
            if (oPars.length < 5) {
                //alert("参数错误！");
                return false;
            }
            return oPars;
        }
    })
</script>

<div class="cusSer">
    <div class="cusSerIn">
        <a class="slide_min" onclick="NTKF.im_openInPageChat('kf_9067_1501484109259')">在线客服</a>
    </div>
</div>
<script language="javascript" type="text/javascript">
    NTKF_PARAM = {
        siteid: "kf_9067",		             //企业ID，为固定值，必填
        settingid: "kf_9067_1501484109259",	 //接待组ID，为固定值，必填
        uid: "",		                 //用户ID，未登录可以为空，但不能给null，uid赋予的值在显示到小能客户端上
        uname: "",		     //用户名，未登录可以为空，但不能给null，uname赋予的值显示到小能客户端上
        isvip: "0",                           //是否为vip用户，0代表非会员，1代表会员，取值显示到小能客户端上
        userlevel: "1",		                 //网站自定义会员级别，0-N，可根据选择判断，取值显示到小能客户端上
        erpparam: "abc",                      //erpparam为erp功能的扩展字段，可选，购买erp功能后用于erp功能集成
        ntalkerparam: {
            category: "淘书团",    //分类名称，多分类可以用分号(;)分隔， 长路径父子间用冒号(:)分割
            brand: ""             //品牌名称，多品牌可以用分号(;)分隔
        }
    }
</script>
<script type="text/javascript" src="http://dl.ntalker.com/js/xn6/ntkfstat.js?siteid=kf_9067" charset="utf-8"></script>
</body>
</html>

