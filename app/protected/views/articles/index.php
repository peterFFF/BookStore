<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=1200" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="<?php echo ROOT?>/css/reset.css?id=1" rel="stylesheet" type="text/css" />
    <link href="<?php echo ROOT?>/css/common1.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="<?php echo ROOT?>/css/simplepop.css" />
    <link href="<?php echo ROOT?>/css/bookdetail.css" rel="stylesheet" type="text/css" />
    <script src="<?php echo ROOT?>/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo ROOT?>/js/jquery.scrollLoading.js"></script>
    <script type="text/javascript" src="<?php echo ROOT?>/js/autocomplete.js"></script>
    <script type="text/javascript" src="<?php echo ROOT?>/js/jquery.SuperSlide.2.1.2.js"></script>
    <script type="text/javascript" src="<?php echo ROOT?>/js/simplepop.js?id=1"></script>
    <script type="text/javascript" src="<?php echo ROOT?>/js/nav.js"></script>
    <script type="text/javascript" src="<?php echo ROOT?>/js/jquery.zoombie.js"></script>
    <script type="text/javascript" src="<?php echo ROOT?>/js/logintop.js"></script>
    <script type="text/javascript" src="<?php echo ROOT?>/js/jquery.min.js"></script>

    <style>
        .m-sidebar{position: fixed;top: 0;right: 0;background: #000;z-index: 2000;width: 35px;height: 100%;font-size: 12px;color: #fff;}
        .cart{color: #fff;text-align:center;line-height: 20px;padding: 200px 0 0 0px;}
        .cart span{display:block;width:20px;margin:0 auto;}
        .cart i{width:35px;height:35px;display:block; }
        #msg{position:fixed; top:28px; right:610px; z-index:10000; width:1px; height:22px; line-height:22px; font-size:8px; text-align:center; color:#fff; background:#360; display:none}
        .u-flyer{display: block;width: 50px;height: 50px;border-radius: 50px;position: fixed;z-index: 9999;}
    </style>
</head>
<body>
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
        }, function () {
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
<div class="content">
    <!--面包屑-->
    <div class="w1200 clearfix">
        <div class="crumbsBar">
            <div class="crumbsNav clearfix">
                <div class="crumsItem">
                    <a href="/">中国图书网</a>
                </div>
                <i class="">&gt;</i>
                <div class="crumsItem"><a href="<?php echo APP?>/goodsType/index/typeId/<?php echo $rs['typeId']?>"><?php echo $rs['typeName']?></a><div>
            </div>
        </div>
    </div>
    <!--图书详情-->
    <div class="w1200">
        <!--缺货提示-->
    </div>
    <div class="w1200">
        <div class="bookInfoWrap clearfix">
            <div class="bookDetaiWrap">
                <div class="bookCover">
                    <div class="coverImg" id="popbigpic">
                        <img src="http://image31.bookschina.com/2009/20091216/B4360695.jpg" class="bookCoverImg"  />
                        <input type="hidden" value="http://image31.bookschina.com/2009/20091216/4360695.jpg" id="bigImgSrc" />
                        <div class="activeIcon">
                            <img src="<?php echo ROOT?>/photoView/<?php echo $rs['goodsImage']?>" id="goodsImg"/>
                        </div>
                        <span class="bigIconTip"></span>
                    </div>

                </div>
                <div class="bookInfo">
                    <div class="padLeft10">
                        <h1><?php echo $rs['authorIntro']?></h1>
                        <div class="author"><span>作者：</span><a href="/Books/allbook/allauthor.asp?stype=author&sbook=卢曼" target="_blank"><?php echo $rs['author']?></a></div>
                        <div class="publisher"><span>出版社：</span><a href="/publish/01/" target="_blank"><?php echo $rs['press']?></a><span>出版时间：</span><i><?php echo $rs['publishingtime']?></i></div>
                        <div class="series"><span>所属丛书：</span>暂无</div>
                        <div class="startWrap"><span>读者评分：</span><em>5分</em></div>

                    </div>
                    <div class="priceWrap">
                        <span class="sellPriceTit">天 天 价:</span><span class="sellPrice"><i>&yen;</i><?php echo round($rs['goodsPrice']*$rs['goodsDiscounted']/100,2)?></span>
                        <span class="discount">(<?php echo $rs['goodsDiscounted']/10?>折)</span><span class="priceTit">定价:</span><del class="price">&yen;<?php echo $rs['goodsPrice']?> </del>
                    </div>
                    <div class="priceWrap">
                        <span class="sellPriceTit">数 量:</span><input type="text" id="goodsCountdel" value="-" style="width:10px;text-align:center" ><input type="text" id="goodsCount" value="1" style="width:30px;text-align:center"><input type="text" id="goodsCountadd" value="+"style="width:10px;text-align:center">
                    </div>
                    <script src="<?php echo ROOT?>/js/jquery.min.js"></script>
                    <script>
                        $(function(){
                            $('#goodsCountdel').click(function(){
                                var count=$('#goodsCount').val();
                                if(count>1){
                                    $('#goodsCount').val(count-1);
                                }
                            })
                            $('#goodsCountadd').click(function(){
                                var count=$('#goodsCount').val();
                                $('#goodsCount').val(parseInt(count)+1);
                            })
                        })

                    </script>
                    <div class="oparateButton">
                        <a href="javascript:addCar(<?php echo $rs['goodsId']?>)"  class="buyButton">加入购物车</a>
                        <div class="m-sidebar">
                            <div class="cart">
                                <i id="end"></i>
                                <span>购物车</span>
                            </div>
                        </div>
                        <div id="msg">已成功加入购物车！</div>
                        <script src="<?php echo ROOT?>/js/jquery.min.js"></script>
                        <script type="text/javascript" src="<?php echo ROOT?>/js/jquery.fly.min.js"></script>
                        <script>
                            function addCar(goodsId){
                                var goodsCount=document.getElementById('goodsCount').value;
                                $(function(){
                                    $.ajax({
                                        type:'post',
                                        data:'goodsId='+goodsId+'&goodsCount='+goodsCount,
                                        url:'<?php echo APP?>/act/index',
                                        success:function(rs){
                                            if(rs==1){
                                                var offset = $("#end").offset();
                                                $(".buyButton").click(function(event){
                                                    var addcar = $(this);
                                                    var img = $('#goodsImg').attr('src');
                                                    var flyer = $('<img class="u-flyer" src="'+img+'">');
                                                    flyer.fly({
                                                        start: {
                                                            left: event.pageX, //开始位置（必填）#fly元素会被设置成position: fixed
                                                            top: event.pageY //开始位置（必填）
                                                        },
                                                        end: {
                                                            left: offset.left-130, //结束位置（必填）
                                                            top: offset.top-1000, //结束位置（必填）
                                                            width: 0, //结束时宽度
                                                            height: 0 //结束时高度
                                                        },
                                                        onEnd: function(){ //结束回调
                                                            $("#msg").show().animate({width: '120px'}, 200).fadeOut(1000); //提示信息
                                                            addcar.css("cursor","default");
                                                            this.destory(); //移除dom
                                                        }
                                                    });
                                                });
                                            }else if(rs==3){
                                                alert('您还未登陆,请登陆!');
                                                location="<?php echo APP?>/articles/index/goodsId/"+$goodsId;
                                            }
                                        }
                                    })
                                })
                            }
                        </script>
                        <a href="javascript:frAdd('4360695');" class="collectBtn">收藏</a>
                    </div>
                </div>
            </div>
            <!--本类五星书-->
            <!--图书详情主体-->
            <div class="w1200">
                <div class="bookMainCon clearfix">
                    <div class="bookRight">
                        <!--买过本商品的人还买了-->
                        <!--商品详情 商品评论-->
                        <div class="tabBox" id="bookTab">
                            <div class="tabTitPanel">
                                <div class="tabTitPanelInner">
                                    <div class="shadow clearfix">
                                        <ul>
                                            <li class="current"><a href="#tabBookDetail"><span>商品详情</span></a></li>
                                            <li><a href="#tabookReco"><span>商品评论(1条)</span></a></li>
                                        </ul>
                                        <div class="oparaBookBut">


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabConPanel">
                                <!--商品详情-->
                                <div class="tabCon tabBookDetail clearfix" id="tabBookDetail">
                                    <div class="tabConRight">

                                    </div>
                                    <div class="tabConLeft">
                                        <!--版权信息-->
                                        <div class="brief">
                                            <h2 class="tit"><span>本书特色</span></h2>
                                            <p><?php echo strip_tags($rs['goodsfeatures'])?></p>
                                        </div>
                                        <div class="brief" id="brief">
                                            <h2 class="tit"><span>内容简介</span></h2>
                                            <p><?php echo strip_tags($rs['goodsInfo'])?></p>
                                        </div>
                                        <!--目录-->
                                        <div class="brief" id="catalog">
                                            <h2 class="tit"><span>目录</span></h2>
                                             <p> <?php echo $rs['directory']?></p>
                                        </div>
                                        <!--节选-->
                                        <div class="brief">
                                            <h2 class="tit"><span>节选</span></h2>
                                            <p><?php echo $rs['excerpts']?></p>
                                        </div>
                                    </div>
                                </div>
                                <!--商品评论-->
                                <div class="tabCon tabookReco" id="tabookReco">
                                    <div class="tabookRecoTit">
                                        <div class="tit"><span>商品评论(0条)</span></div>

                                    </div>

                                    <div class="tabookRecoCon">
                                        <div class="recoList"><ul><li><div class="listLeft"><div class="tit"><div class="startWrap"><i class="one"></i><i class="one"></i><i class="one"></i><i class="one"></i><i class="one"></i></div><div class="theme"></div></div><div class="con"><p></p></div><div class="oparaButWrap"><span class="time"></span><div class="oparaBut" data-id="612840" data-bookid="4360695"><a href="javascript:void(0)" class="support"><span class="icon"></span>0</a><a href="javascript:void(0)"class="disagree"><span class="icon"></span>0</a></div></div></div><div class="listRight"><div class="userIcon"><a href="javascript:void(0)"class="start2"></a></div><div class="userName"><a href="/Favorites/Book_review.aspx?account=1BA2EB1C816F9429295F3D91CF11A81BF0D99298F0A2BCE8" target="_blank"></a></div></div></li></ul></div>
                                    </div>
                                    <div class="ajaxPage" data-bookid="4360695" data-page="2" data-count="1">加载更多 &gt;&gt;</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bookLeft">
                        <div class="bookLeftInner">
                            <!--书友推荐-->
                            <!--本类畅销-->
                            <div class="hotBook">
                                <h2>本类畅销</h2>
                                <ul id="goodsInfo">
                                    <?php foreach($rsale as $v){?>
                                    <li>
                                        <div class="cover">
                                            <a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" ><img src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"  data-original ="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" class="lazyImg"/></a>
                                        </div>
                                        <div class="infor">
                                            <h3 class="name"><a href="/6786927.htm" target="_blank" ><?php echo $v['authorIntro']?></a></h3>
                                            <div class="author"><span><?php echo $v['author']?></span></div>
                                            <div class="priceWrap"><span class="sellPrice">&yen;<?php echo round($v['goodsPrice']*$v['goodsDiscounted']/100,2)?></span><del class="price">&yen;<?php echo $v['goodsPrice']?></del></div>
                                        </div>
                                    </li>
                                    <?php }?>
                                </ul>
                            </div>
                            <script>
                                $(function(){
                                    var item=$('#goodsInfo>li').size();
                                    for(var n=0;n<(4-item);n++){
                                        $('#goodsInfo').append("<li><div class='cover'><a href='#'><img src='<?php echo ROOT?>/photoView/nullImage.jpg' class='lazyImg'/></a></div><div class='infor'><h3 class='name'><a href='' target='' >暂无</a></h3></li>");
                                    }
                                })
                            </script>
                            <div class="cusSer">
                                <div class="cusSerIn">
                                    <a class="slide_min" onclick="NTKF.im_openInPageChat('kf_9067_1501484109259')">在线客服</a>
                                </div>
                            </div>
                            <script language="javascript" type="text/javascript">

                                //点赞
                                $(document).on("click", ".oparaBut a", function () {
                                    var $this = $(this);
                                    var id = $this.parent().attr("data-id");
                                    var bookid = $this.parent().attr("data-bookid");
                                    var va = $this.attr("class") == "support" ? "1" : "0";
                                    $.get("/ashx/imgagecode.aspx", { rid: id, uname: 'bookschina', bid: bookid, va: va }, function (data) {
                                        if (data == "-9") {
                                            var url = window.location.href;
                                            window.location.href = '/RegUser/login.aspx?url=' + url;
                                        } else if (data != "-1") {
                                            $this.html('<span class="icon"></span>' + (parseInt($this.text()) + 1))
                                        } else {
                                            alert("您已选择了对该评论的观点!");
                                        }
                                    })
                                });

                                var iCount = $(".ajaxPage").attr("data-count");
                                if (iCount > 1) {
                                    $(".ajaxPage").show();
                                }
                                //加载书评
                                $(".ajaxPage").click(function () {
                                    var $this = $(this);
                                    var iBookID = $this.attr("data-bookid");
                                    var iPage = $this.attr("data-page");
                                    $.post("/ashx/GetMsg.ashx", { _page: iPage, _bookid: iBookID }, function (data) {
                                        if (data == "") {
                                            $this.text("没有了")
                                            $this.unbind();
                                        } else {
                                            $(".recoList ul").append(data);
                                            $this.attr("data-page", (parseInt(iPage) + 1))
                                            if ((parseInt(iPage) + 1) > iCount) {
                                                $this.hide();
                                            }
                                        }
                                    });
                                })
                                $("#popbigpic").click(function () {
                                    var bigImgSrc = $("#bigImgSrc").val();
                                    var winheight = parseInt($(window).height());
                                    var popHeight;
                                    function getImageWidth(url, callback) {
                                        var img = new Image();
                                        img.src = url;
                                        if (img.complete) {
                                            callback(img.width, img.height);
                                        } else {
                                            img.onload = function () {
                                                callback(img.width, img.height);
                                            }
                                        }
                                    }
                                    getImageWidth(bigImgSrc, function (w, h) {
                                        if (h >= 500 && Math.round(winheight * 0.7) - 120 > 500) {

                                            popHeight = 500;

                                        } else if (h >= 500 && Math.round(winheight * 0.7) - 120 < 500) {


                                            popHeight = (Math.round(winheight * 0.7) - 120)

                                        } else {

                                            popHeight = h;
                                        }
                                        SimplePop.alert("", {
                                            showTitle: false,
                                            id: "popbig",
                                            content: '<div class="popBigWrap"><div class="popBigInner" id="magnifier"><img src="' + bigImgSrc + '" class="smallPic"  style="max-width:100%" height="' + popHeight + '"></div><span class="close" id="popbigclose">×</span></div>'
                                        })

                                    })
                                })
                                $("body").delegate("#magnifier", "mouseenter ", function () {
                                    if (!$("#magnifier").hasClass("has")) {
                                        $("#magnifier").zoombie({ on: 'click' });
                                        $("#magnifier").addClass("has");
                                    }
                                })
                                $("body").delegate("#popbigclose", "click", function () {
                                    SimplePop.closeSimplePop();
                                })
                                // 五星图书
                                $(".fiveStartWrap").slide({ mainCell: ".fiveStartCon", effect: "leftLoop", endFun: function () { $("body").trigger('scroll'); } })
                                $(".fiveStart ul li").hover(function () {
                                    var $this = $(this);
                                    $this.addClass("cur").siblings().removeClass("cur");
                                    $("body").trigger('scroll');
                                })
                                // 买过本商品的人还买了
                                $(".otherBuyWrap").slide({ mainCell: ".conanimate ul", autoPage: true, effect: "left", scroll: 5, vis: 5, endFun: function () { $("body").trigger('scroll'); } })
                                // 书友推荐
                                $(".bookLeft .userRec ul li").hover(function () {
                                    var $this = $(this);
                                    $this.addClass("cur").siblings().removeClass("cur");
                                    $("body").trigger('scroll');
                                })
                                // 商品详情左侧浮动导航
                                $(".tabconNav ul").onePageNav({
                                    scrollThreshold: 0.1,
                                    space: 60
                                })
                                // 中间浮动导航
                                $(".tabTitPanel ul").onePageNav({
                                    scrollThreshold: 0.1,
                                    space: 60
                                })
                                //  屏幕滚动的时 商品详情分类切换
                                $(window).scroll(function () {
                                    var h = $(window).scrollTop();
                                    var bookTab = $("#bookTab");
                                    var backTop1 = $("#bocktop");
                                    var tabconNav = $("#tabconNav");
                                    var bookTabVa = $("#bookTab").offset().top;
                                    var backTop = $(".side_tool .inner .backTop");
                                    // 浮动导航
                                    if (h > bookTabVa) {
                                        bookTab.addClass("fixed");
                                    } else {
                                        bookTab.removeClass("fixed");
                                    }
                                    // 返回顶部
                                    if (h > 500) {
                                        backTop1.slideDown();
                                    } else {
                                        backTop1.slideUp();
                                    }
                                    // 侧导航活动区域
                                    if (h > bookTabVa + 55) {
                                        if ((h - (bookTabVa + 30)) > ($("#tabBookDetail").height() - tabconNav.height())) {
                                            tabconNav.css("top", ($("#tabBookDetail").height() - tabconNav.height()) + "px");
                                        } else {
                                            tabconNav.css("top", h - (bookTabVa + 30) + "px");
                                        }
                                    } else {
                                        tabconNav.css("top", "0px")
                                    }
                                })
                                // 商品详情目录展开 合并
                                $("#openCatalog").click(function () {
                                    var $this = $(this);
                                    if ($this.hasClass("open")) {
                                        $this.removeClass("open");
                                        $this.parents("#catalog").find(".con").removeClass("open");
                                        $this.html('展开全部<i class="icon"></i>');
                                    } else {
                                        $this.addClass("open");
                                        $this.parents("#catalog").find(".con").addClass("open");
                                        $this.html('点击收起<i class="icon"></i>');
                                    }
                                })
                                // 判断商品详情是否张开
                                if (parseInt($("#catalogSwitch").height()) <= 240) {
                                    $(".catalog .switch").remove();
                                }

                            </script>
</body>
</html>
