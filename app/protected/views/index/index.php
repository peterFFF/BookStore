<script type="text/javascript" src="<?php echo ROOT?>/js/logintop.js"></script>
<script type="text/javascript"> $(document).ready(function () { javascript: isLoging(); }) </script>
<!--网页主体-->
<div class="content">
	<!--网站通栏 banner-->
	<div class="bannerWrap">
		<div class="w1200">
			<div class="banner" id="J_pageBaner">
				<div class="bannerList">
					<ul>
                           <?php foreach ($banner as $k=>$v){?>
                              <li class="on" data-bg=",url()"><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" title="<?php echo $v['authorIntro']?>"
								target="_blank"> <img src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" alt="<?php echo $v['authorIntro']?>" width="990" height="360"
								class="bannerImg" /></a></li>
                            <?php }?>
                        </ul>
				</div>
				<div class="bannerdot float6">
                    <?php foreach ($banner as $k=>$v){?>
                    <a href="javascript: void(0)" class=""><span><?php echo $v['authorIntro']?></span></a>
                    <?php }?>
                    
                    </div>
				<span class="arrow leftArrow"></span><span class="arrow rightArrow"></span>
			</div>
		</div>
	</div>
	<script type="text/javascript">
            (function ($) {
                var indNum = 0, len = $("#J_pageBaner .bannerList li").length - 1, timer;
                $("#J_pageBaner").hover(function () {
                    clearInterval(timer);
                    $(".bannerdot").stop().animate({ bottom: "0" }, 300);
                }, function () {
                    $(".bannerdot").stop().animate({ bottom: "-36px" }, 300);
                    timer = setInterval(function () {
                        indNum++;
                        if (indNum > len) { indNum = 0 };
                        $("#J_pageBaner .bannerList li").eq(indNum).fadeIn().siblings().fadeOut();
                        $(".bannerdot a").eq(indNum).addClass("on").siblings().removeClass("on");
                    }, 5000)
                }).trigger("mouseleave");

                $(".bannerdot a").hover(function () {
                    var $this = $(this);
                    indNum = $(this).index();
                    $this.addClass("on").siblings().removeClass("on");
                    $("#J_pageBaner .bannerList li").eq(indNum).fadeIn().siblings().fadeOut();
                })
                $("#J_pageBaner .leftArrow").click(function () {
                    indNum--;
                    if (indNum < 0) { indNum = len };
                    $("#J_pageBaner .bannerList li").eq(indNum).fadeIn().siblings().fadeOut();
                    $(".bannerdot a").eq(indNum).addClass("on").siblings().removeClass("on");
                })
                $("#J_pageBaner .rightArrow").click(function () {
                    indNum++;
                    if (indNum > len) { indNum = 0 };
                    $("#J_pageBaner .bannerList li").eq(indNum).fadeIn().siblings().fadeOut();
                    $(".bannerdot a").eq(indNum).addClass("on").siblings().removeClass("on");
                })
            })(jQuery);
        </script>
	<!--主编推荐 本周精选  新书速递  读者热评  畅销榜-->
	<div class="hotBookWrap" id="recommend">
		<div class="w1200">
			<div class="hotbookinner clearfix">
				<div class="hotBook">
					<div class="tabTit">
						<a href="javascript: void(0)" class="cur">主编推荐</a><a
							href="javascript: void(0)" class="">本周精选</a><a
							href="javascript: void(0)" class="">新书速递</a><a
							href="javascript: void(0)" class="">读者热评</a>
					</div>
					<div class="tabCon">
						<div class="tabConList cur">
							<div class="tabPanel">
								<div class="tabItem cur">
									<div class="mainEditor">
										<div class="mainEditorInner">
											<div class="mainCover">
											    
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isStories[0]['goodsId']?>" target="_blank"
													title="<?php echo $isStories[0]['authorIntro']?>"><img width="158" height="158"
													src="<?php echo ROOT?>/photoView/<?php echo $isStories[0]['goodsImage']?>"
													alt="<?php echo  $isStories[0]['authorIntro']?>" /></a>
											</div>
											<div class="mainText">
												<h2>
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isStories[0]['goodsId']?>" title="<?php echo $isStories[0]['authorIntro']?>"
														target="_blank"><?php echo $isStories[0]['authorIntro']?></a>
												</h2>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($isStories[0]['goodsPrice']*($isStories[0]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $isStories[0]['goodsPrice']?></span>
												</div>
												<div class="mainFont">
													<p>
													   <?php echo $isStories[0]['goodsInfo'] ?>
													</p>
													<p>&nbsp;</p>
												</div>
											</div>
										</div>
									</div>
									<div class="tabbook">
										<ul class="clearfix">
											<?php for ($i=1;$i<count($isStories);$i++){?>
											<li>
											    <div class="Img">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isStories[$i]['goodsId']?>" target="_blank"><img width="118" height="158"
														src="<?php echo ROOT?>/photoView/<?php echo $isStories[$i]['goodsImage']?>"
														alt="<?php echo $isStories[$i]['goodsInfo']?>"></a>
												</div>
												<div class="name">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isStories[$i]['goodsId']?>" title="<?php echo $isStories[$i]['goodsInfo']?>"
														target="_blank"><?php echo $isStories[$i]['authorIntro']?></a>
												</div>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($isStories[$i]['goodsPrice']*($isStories[$i]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $isStories[$i]['goodsPrice']?></span>
												</div>
											</li>
											<?php }?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="tabConList ">
							<div class="tabPanel">
								<div class="tabItem cur">
									<div class="mainEditor">
										<div class="mainEditorInner">
											<div class="mainCover">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isNature[0]['goodsId']?>" target="_blank" title="<?php echo $isNature[0]['authorIntro']?>"><img
												width="126" height="160" src="<?php echo ROOT?>/photoView/<?php echo $isNature[0]['goodsImage']?>"
													alt="<?php echo $isNature[0]['authorIntro']?>" /></a>
												
											</div>
											<div class="mainText">
												<h2>
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isNature[0]['goodsId']?>" title="<?php echo $isNature[0]['authorIntro']?>" target="_blank"><?php echo $isNature[0]['authorIntro']?></a>
												</h2>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($isNature[0]['goodsPrice']*($isNature[0]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $isNature[0]['goodsPrice']?></span>
												</div>
												<div class="mainFont">
													<p>
													<?php echo $isNature[0]['goodsInfo']?>
													<p>&nbsp;</p>
												</div>
											</div>
										</div>
									</div>
									<div class="tabbook">
										<ul class="clearfix">
										<?php for ($i=1;$i<count($isNature);$i++){?>
											<li>
											    <div class="Img">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isNature[$i]['goodsId']?>" target="_blank"><img
													width="158" height="158" src="<?php echo ROOT?>/photoView/<?php echo $isNature[$i]['goodsImage']?>"
														alt="<?php echo $isNature[$i]['authorIntro']?>"></a>
												</div>
												<div class="name">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isNature[$i]['goodsId']?>" title="<?php echo $isNature[$i]['authorIntro']?>"
														target="_blank"><?php echo $isNature[$i]['authorIntro']?></a>
												</div>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($isNature[$i]['goodsPrice']*($isNature[$i]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $isNature[$i]['goodsPrice']?></span>
												</div>
											</li>
										<?php }?>	
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="tabConList ">
							<div class="tabPanel">
								<div class="tabItem cur">
									<div class="mainEditor">
										<div class="mainEditorInner">
											<div class="mainCover">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isspeed[0]['goodsId']?>" target="_blank" title="<?php echo $isspeed[0]['authorIntro']?>"><img
												 width="160" height="160"	src="<?php echo ROOT?>/photoView/<?php echo $isspeed[0]['goodsImage']?>"
													alt="<?php echo $isspeed[0]['authorIntro']?>" /></a>
											</div>
											<div class="mainText">
												<h2>
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isspeed[0]['goodsId']?>" title="<?php echo $isspeed[0]['authorIntro']?>"
														target="_blank"><?php echo $isspeed[0]['authorIntro']?></a>
												</h2>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($isspeed[0]['goodsPrice']*($isspeed[0]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $isspeed[0]['goodsPrice']?></span>
												</div>
												<div class="mainFont">
													<p>
													   <?php echo $isspeed[0]['goodsInfo']?>
													</p>
												</div>
											</div>
										</div>
									</div>
									<div class="tabbook">
										<ul class="clearfix">
										  <?php for ($i=1;$i<count($isspeed);$i++){?>
											<li><div class="Img">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isspeed[$i]['goodsId']?>" target="_blank"><img
													width="158" height="158"	src="<?php echo ROOT?>/photoView/<?php echo $isspeed[$i]['goodsImage']?>"
														alt="<?php echo $isspeed[$i]['authorIntro']?>"></a>
												</div>
												<div class="name">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $isspeed[$i]['goodsId']?>" title="<?php echo $isspeed[$i]['authorIntro']?>"
														target="_blank"><?php echo $isspeed[$i]['authorIntro']?></a>
												</div>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($isspeed[$i]['goodsPrice']*($isspeed[$i]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $isspeed[$i]['goodsPrice']?></span>
												</div></li>
											<?php }?>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="tabConList " id="hotComment">
							<div class="tabPanel">
								<div class="tabItem cur">
									<div class="mainEditor">
										<div class="mainEditorInner">
											<div class="mainCover">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $hotComment[0]['goodsId']?>" target="_blank" title="<?php echo $hotComment[0]['authorIntro']?>"><img
													src="<?php echo ROOT?>/photoView/<?php echo $hotComment[0]['goodsImage']?>"
													alt="<?php echo $hotComment[0]['authorIntro']?>" /></a>
											</div>
											<div class="mainText">
												<h2>
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $hotComment[0]['goodsId']?>" title="<?php echo $hotComment[0]['authorIntro']?>" target="_blank"><?php echo $hotComment[0]['authorIntro']?></a>
												</h2>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($hotComment[0]['goodsPrice']*($hotComment[0]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $hotComment[0]['goodsPrice']?></span>
													<div class="startWrap">
														<i class="one"></i><i class="one"></i><i class="one"></i><i
															class="one"></i><i class="half"></i><b>25条评论</b>
													</div>
												</div>
												<div class="mainFont">
													<p>	 <?php echo $hotComment[0]['goodsInfo']?>	</p>								
													<p>&nbsp;</p>
												</div>
											</div>
										</div>
									</div>
									<div class="tabbook">
										<ul class="clearfix">
										  <?php for ($i=1;$i<count($hotComment);$i++){?>
											<li>
											<div class="Img">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $hotComment[$i]['goodsId']?>" target="_blank"><img
														src="<?php echo ROOT?>/photoView/<?php echo $hotComment[$i]['goodsImage']?>"
														alt="<?php echo $hotComment[$i]['authorIntro']?>"></a>
												</div>
												<div class="name">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $hotComment[$i]['goodsId']?>" title="<?php echo $hotComment[$i]['authorIntro']?>" target="_blank"><?php echo $hotComment[$i]['authorIntro']?></a>
												</div>
												<div class="startWrap">
													<i class="one"></i><i class="one"></i><i class="one"></i><i
														class="one"></i><i class="half"></i><b>3条评论</b>
												</div>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($hotComment[$i]['goodsPrice']*($hotComment[$i]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $hotComment[$i]['goodsPrice']?></span>
												</div>
											</li>
											<?php }?>
										</ul>
									</div>
								</div>
								<div class="tabItem ">
									<div class="mainEditor">
										<div class="mainEditorInner">
											<div class="mainCover">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $hotComment1[0]['goodsId']?>" target="_blank"
													title="<?php echo $hotComment1[0]['authorIntro']?>"><img
													src="<?php echo ROOT?>/photoView/<?php echo $hotComment1[0]['goodsImage']?>"
													alt="<?php echo $hotComment1[0]['authorIntro']?>" /></a>
											</div>
											<div class="mainText">
												<h2>
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $hotComment1[0]['goodsId']?>" title="<?php echo $hotComment1[0]['authorIntro']?>"
														target="_blank"><?php echo $hotComment1[0]['authorIntro']?></a>
												</h2>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($hotComment1[0]['goodsPrice']*($hotComment1[0]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $hotComment1[0]['goodsPrice']?></span>
													<div class="startWrap">
														<i class="one"></i><i class="one"></i><i class="one"></i><i
															class="one"></i><i class="half"></i><b>14条评论</b>
													</div>
												</div>
												<div class="mainFont">
													<p><?php echo $hotComment1[0]['goodsInfo']?></p>						
													
													
													<p>&nbsp;</p>
												</div>
											</div>
										</div>
									</div>
									<div class="tabbook">
										<ul class="clearfix">
										  <?php for ($i=1;$i<count($hotComment1);$i++){?>
											<li><div class="Img">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $hotComment1[$i]['goodsId']?>" target="_blank"><img
														src="<?php echo ROOT?>/photoView/<?php echo $hotComment1[$i]['goodsImage']?>"
														alt="<?php echo $hotComment1[$i]['authorIntro']?>"></a>
												</div>
												<div class="name">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $hotComment1[$i]['goodsId']?>" title="<?php echo $hotComment1[$i]['authorIntro']?>" target="_blank"><?php echo $hotComment1[$i]['authorIntro']?></a>
												</div>
												<div class="startWrap">
													<i class="one"></i><i class="one"></i><i class="one"></i><i
														class="one"></i><i class="half"></i><b>14条评论</b>
												</div>
												<div class="priceWrap">
													<span class="sellPrice">&yen;<?php echo round($hotComment1[$i]['goodsPrice']*($hotComment1[$i]['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $hotComment1[$i]['goodsPrice']?></span>
												</div>
											</li>
											<?php }?>
										</ul>
									</div>
								</div>


								<span class="arrow leftArrow"></span><span
									class="arrow rightArrow"></span>
							</div>
						</div>

					</div>
				</div>

				<!--畅销榜-->
				<div class="hot_sale">
					<div class="hot_saleInner">
						<div class="hotTitle">
							<h2>图书畅销榜</h2>
							<a href="/24hour/ChangXiao.aspx" target="_blank">更多&gt;&gt;</a>
						</div>
						<div class="hotNav">
							<div class="navDot">
								<ul>
									<li class="cur"><a href="/24hour/ChangXiao.aspx?fh="
										target="_blank">总榜</a></li>
									<li class=""><a href="/24hour/ChangXiao.aspx?fh=wenxue"
										target="_blank">文学</a></li>
									<li class=""><a href="/24hour/ChangXiao.aspx?fh=sheke"
										target="_blank">社科</a></li>
									<li class=""><a href="/24hour/ChangXiao.aspx?fh=shaoer"
										target="_blank">少儿</a></li>
									<li class=""><a href="/24hour/ChangXiao.aspx?fh=yishu"
										target="_blank">艺术</a></li>
									<li class=""><a href="/24hour/ChangXiao.aspx?fh=wenjiao"
										target="_blank">文教</a></li>
									<li class=""><a href="/24hour/ChangXiao.aspx?fh=shenghuo"
										target="_blank">生活</a></li>
								</ul>
							</div>
							<span class="arrow leftArrow"></span> <span
								class="arrow rightArrow"></span>
						</div>
						<div class="hotCon">
							<ul class="on">
								<?php $i=1;foreach($total as $v){?>
									<li class="red"><i><?php echo $i?></i><em>&gt;</em>
										<p><?php echo $v['authorIntro']?></p>
										<div class="bookCur">
											<div class="bpic">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><img	src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"></a>
											</div>
											<div class="bDetai">
												<div class="bName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" ><?php echo $v['authorIntro']?></a>
												</div>
												<div class="bPrice">
													<span class="sellPrice">&yen;12.5 </span><span class="price">&yen;<?php echo $v['goodsPrice']?>
												</span>
												</div>
											</div>
										</div></li>
									<?php $i++;}?>
							</ul>
							<ul class="">
								<?php $i=1;foreach($wenxue as $v){?>
								<li class="red"><i><?php echo $i?></i><em>&gt;</em>
									<p><?php echo $v['authorIntro']?></p>
									<div class="bookCur">
										<div class="bpic">
											<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><img	src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"></a>
										</div>
										<div class="bDetai">
											<div class="bName">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" ><?php echo $v['authorIntro']?></a>
											</div>
											<div class="bPrice">
												<span class="sellPrice">&yen;12.5 </span><span class="price">&yen;<?php echo $v['goodsPrice']?>
												</span>
											</div>
										</div>
									</div></li>
								<?php $i++;}?>
							</ul>
							<ul class="">
								<li class="red cur"><i>01</i><em>&gt;</em>
								<p>王权的覆灭:1640-1649英国革命史</p>
									<div class="bookCur">
										<div class="bpic">
											<a href="/6469295.htm" target="_blank"
												title="王权的覆灭:1640-1649英国革命史"><img
												src="http://image12.bookschina.com/2014/20140602/s6469295.jpg"
												alt="王权的覆灭:1640-1649英国革命史"></a>
										</div>
										<div class="bDetai">
											<div class="bName">
												<a href="/6469295.htm" target="_blank"
													title="王权的覆灭:1640-1649英国革命史">王权的覆灭:1640-1649英国革命史</a>
											</div>
											<div class="bPrice">
												<span class="sellPrice">&yen;15.1 </span><span class="price">&yen;39.8
												</span>
											</div>
										</div>
									</div></li>

							</ul>
							<ul class="">
								<li class="red cur"><i>01</i><em>&gt;</em>
								<p>动物志</p>
									<div class="bookCur">
										<div class="bpic">
											<a href="/5727146.htm" target="_blank" title="动物志"><img
												src="http://image12.bookschina.com/2013/20130311/s5727146.jpg"
												alt="动物志"></a>
										</div>
										<div class="bDetai">
											<div class="bName">
												<a href="/5727146.htm" target="_blank" title="动物志">动物志</a>
											</div>
											<div class="bPrice">
												<span class="sellPrice">&yen;9.9 </span><span class="price">&yen;36.0
												</span>
											</div>
										</div>
									</div></li>


							</ul>
							<ul class="">
								<li class="red cur"><i>01</i><em>&gt;</em>
								<p>1998-2014-行动中的绘画-刘小东笔记</p>
									<div class="bookCur">
										<div class="bpic">
											<a href="/6695296.htm" target="_blank"
												title="1998-2014-行动中的绘画-刘小东笔记"><img
												src="http://image12.bookschina.com/2015/20150207/s6695296.jpg"
												alt="1998-2014-行动中的绘画-刘小东笔记"></a>
										</div>
										<div class="bDetai">
											<div class="bName">
												<a href="/6695296.htm" target="_blank"
													title="1998-2014-行动中的绘画-刘小东笔记">1998-2014-行动中的绘画-刘小东笔记</a>
											</div>
											<div class="bPrice">
												<span class="sellPrice">&yen;22.1 </span><span class="price">&yen;69.0
												</span>
											</div>
										</div>
									</div></li>



							</ul>
							<ul class="">
								<li class="red cur"><i>01</i><em>&gt;</em>
								<p>乌合之众-青少年励志经典文库-49</p>
									<div class="bookCur">
										<div class="bpic">
											<a href="/6284308.htm" target="_blank"
												title="乌合之众-青少年励志经典文库-49"><img
												src="http://image12.bookschina.com/2013/20131107/s6284308.jpg"
												alt="乌合之众-青少年励志经典文库-49"></a>
										</div>
										<div class="bDetai">
											<div class="bName">
												<a href="/6284308.htm" target="_blank"
													title="乌合之众-青少年励志经典文库-49">乌合之众-青少年励志经典文库-49</a>
											</div>
											<div class="bPrice">
												<span class="sellPrice">&yen;6.4 </span><span class="price">&yen;20.0
												</span>
											</div>
										</div>
									</div></li>

							</ul>
							<ul class="">
								<li class="red cur"><i>01</i><em>&gt;</em>
								<p>蒙福人生的欢喜</p>
									<div class="bookCur">
										<div class="bpic">
											<a href="/5685739.htm" target="_blank" title="蒙福人生的欢喜"><img
												src="http://image12.bookschina.com/2013/20130314/s5685739.jpg"
												alt="蒙福人生的欢喜"></a>
										</div>
										<div class="bDetai">
											<div class="bName">
												<a href="/5685739.htm" target="_blank" title="蒙福人生的欢喜">蒙福人生的欢喜</a>
											</div>
											<div class="bPrice">
												<span class="sellPrice">&yen;14.4 </span><span class="price">&yen;48.0
												</span>
											</div>
										</div>
									</div></li>

							</ul>
						</div>
						<div class="moreHotSale">
							<a href="/24hour/ChangXiao.aspx?state=1" target="_blank">查看完整榜单&gt;&gt;</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript">
                (function ($) {
                    $(".hotBook .tabTit a").hover(function () {
                        var $this = $(this);
                        var thisIndex = $this.index();
                        $this.addClass("cur").siblings().removeClass("cur");
                        $(".tabCon .tabConList").eq(thisIndex).addClass("cur").siblings().removeClass("cur")
                    })

                    $(".tabConList .leftArrow").click(function () {
                        var $this = $(this);
                        var obj = $this.parents(".tabConList");
                        var tabPanel = obj.find(".tabPanel");
                        tabPanel.find(".tabItem").removeClass("cur");
                        var lastLi = tabPanel.find(".tabItem:last");
                        lastLi.addClass("cur");
                        lastLi.prependTo(tabPanel);
                    })

                    $(".tabConList .rightArrow").click(function () {
                        var $this = $(this);
                        var obj = $this.parents(".tabConList");
                        var tabPanel = obj.find(".tabPanel");
                        tabPanel.find(".tabItem").removeClass("cur");
                        var firstLi = tabPanel.find(".tabItem:first");
                        firstLi.appendTo(tabPanel);
                        tabPanel.find(".tabItem:first").addClass("cur");
                    })


                    var len = $(".navDot ul li").length;

                    $(".navDot ul li").hover(function () {
                        var $this = $(this);
                        var thisIndex = $this.index();
                        $this.addClass("cur").siblings().removeClass("cur");
                        $(".hotCon ul").eq(thisIndex).addClass("on").siblings().removeClass("on");

                    })


                    /*畅销榜*/
                    $(".hotNav .rightArrow").click(function () {
                        $(".hotNav .leftArrow").show();
                        $(".hotNav .rightArrow").hide();
                        $(".navDot ul").css("left", -55 * (len - 4) + 10 + "px");
                    })
                    $(".hotNav .leftArrow").click(function () {

                        $(".navDot ul").css("left", 0);
                        $(".hotNav .leftArrow").hide();
                        $(".hotNav .rightArrow").show();
                    })

                    $(".hotCon ul li").hover(function () {
                        var $this = $(this);
                        $this.addClass("cur").siblings().removeClass("cur");


                    })

                })(jQuery);
            </script>
	</div>
	<!--专题插入广告-->
	<div class="hotSubject">
		<div class="w1210 clearfix">
			<a href="/subject/170525duanwu.aspx" target="_blank" title="美食图书"><img src="http://image31.bookschina.com/pro-images/sbanner/foodbook.jpg"alt="美食图书" /></a> <a href="/Subject/170725renwen.aspx"	target="_blank" title="人民文学">
				<img src="http://image31.bookschina.com/pro-images/sbanner/sbanner_202.jpg?id=1"alt="人民文学" /></a> <a href="/subject/170616amer.aspx" target="_blank"	title="美国文学">
				<img src="http://image31.bookschina.com/pro-images/sbanner/americanlecture.jpg"	alt="美国文学" />
			</a>
		</div>
	</div>
	<!--新到书特选-->
	<div class="newbooksWrap" id="newBook">
		<div class="w1200">
			<div class="newbooks">
				<div class="newTit clearfix">
					<h2>
						<a href="/books/kind/newInput.aspx" target="_blank">新到特价书精选 &gt;</a>
					</h2>

				</div>
				<div class="newCon">
					<div class="newWrap">
						<ul>
						    <?php foreach ($specialOffer as $k=>$v){?>
							<li><div class="bookText">
									<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"
										title="<?php echo $v['authorIntro']?>"><?php echo $v['authorIntro']?></a>
									<p class="bookAuthor"><?php echo $v['author']?></p>
									<div class="priceWrap">
										<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span>
										<del class="price">&yen;<?php echo $v['goodsPrice']?></del>
									</div>
								</div>
								<div class="bookImg">
									<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"
										title="<?php echo $v['authorIntro']?>"><img
										src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"
										alt="<?php echo $v['authorIntro']?>" /></a>
								</div>
							</li>
							<?php }?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
            //***新到特价书 Start ***//
            $(".newTit b").click(function () {
                var $this = $(this);
                var Type = escape("首页");
                var oPage = $this.attr("data-page");

                $.ajax({
                    type: 'get',
                    url: "/ashx/GetXinpin.ashx",
                    data: { Type: Type, Page: oPage },
                    dataType: 'json',
                    beforeSend: function (x) {
                        //$("#login").addClass('disabled').html('加载中...');
                    },
                    success: function (data) {
                        if (data.State == 200) {
                            GetHtml(data.Data);
                            if (data.Data.length < 5) {
                                $this.attr("data-page", "1");
                            } else {
                                $this.attr("data-page", (parseInt(oPage) + 1));
                            }
                        } else if (data.State == 101) {
                            $this.attr("data-page", "1");
                            //$this.trigger("click");
                        } else {
                            alert(data.Msg);
                        }
                    },
                    error: function () { $(".error").text("网路请求错误请联系管理员"); }
                });
            });

            function GetHtml(List) {
                var sHtml = "";
                if (List.length > 0) {
                    for (var i = 0; i < List.length; i++) {
                        sHtml += '<li><div class="bookText"><a href="' + List[i].Lianjie + '" target="_blank" title="' + List[i].Name + '">' + List[i].Name + '</a><p class="bookAuthor">' + List[i].Author_Name + '</p><div class="priceWrap"><span class="salePrice">&yen;' + List[i].SellPrice + '</span><del class="price">&yen;' + List[i].BookPrice + '</del></div></div><div class="bookImg"><a href="' + List[i].Lianjie + '" target="_blank" title="' + List[i].Name + '"><img src="' + List[i].Tupian + '" alt="' + List[i].Name + '" /></a></div></li>';
                    }
                }
                if (sHtml != "") {
                    var oUl = $(".newCon ul");
                    if (List.length < 5) {
                        for (var i = 0; i < (5 - List.length) ; i++) {
                            sHtml = "<li>" + oUl.children().eq(i).html() + "</li>" + sHtml;
                        }
                    } else {
                        oUl.html(sHtml);
                    }
                }
            }
            //***新到特价书 End ***//
        </script>
	<!--淘书团热销-->
	<div class="tstWrap" id="groupBuy">
		<div class="w1200">
			<div class="tst">
				<div class="tstTit clearfix">
					<h2>
						<a href="http://tuan.bookschina.com/Home-t0-c0-r0-o50"
							target="_blank">淘书团热销 &gt;</a>
					</h2>
				</div>
				<div class="tstCon">
					<div class="tstConInner clearfix">
						<div class="tstList">
							<ul>
							 <?php foreach ($hotTeam as $k=>$v){?>
								<li>
								    <div class="bookCover">
										<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>"
											title="<?php echo $v['authorIntro']?>"
											target="_blank"> <img width="285px" height="190px"
											src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"
											alt="<?php echo $v['goodsInfo']?>"></a>
									</div>
									<p class="bookName">
										<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>"
											title="<?php echo $v['authorIntro']?>"
											target="_blank"><?php echo $v['goodsInfo']?></a>
									</p>
									<div class="priceWrap">
										<span class="salePrice"><b>团购价:</b><i>&yen;</i><?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span>
										<del class="price">&yen;<?php echo $v['goodsPrice']?></del>
										<span class="discount"><?php echo $v['goodsDiscounted']/10?>折</span>
									</div>
								<?php }?></li>
							
							</ul>
							<span class="arrow leftArrow"></span> <span
								class="arrow rightArrow"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
            (function (a) {
                var len = $(".tstList ul li").length;
                var maxIndex = Math.ceil(len / 4);
                var index = 0;
                $(".tstList .leftArrow.tstList .leftArrow").click(function () {
                    index--;
                    if (index < 0) {
                        index = maxIndex - 1;
                    }
                    var startNum = index * 4;
                    var endNum = (index + 1) * 4;
                    $(".tstList ul li").hide();
                    $(".tstList ul li").slice(startNum, endNum).show();
                })

                $(".tstList .rightArrow").click(function () {
                    index++;
                    if (index > maxIndex - 1) {
                        index = 0;
                    }
                    var startNum = index * 4;
                    var endNum = (index + 1) * 4;
                    $(".tstList ul li").hide();
                    $(".tstList ul li").slice(startNum, endNum).show();
                })
            })(jQuery);
        </script>

	<!--今日超低价 9.9包邮-->
	<div class="lowBaoYouFloor" id="lowPrice"></div>
	<script type="text/javascript">
            $.get("/Include/Index.aspx", { t: 123 }, function (_html) {
                if (_html != undefined && _html != "") {
                    $(".lowBaoYouFloor").html(_html);
                    $(".countDown .time").each(function () {
                        var $this = $(this);
                        var start = new Date($this.attr("data-start")).getTime();
                        var endtime = new Date($this.attr("data-endtime")).getTime();
                        var noetime = new Date($this.attr("data-newdate")).getTime();

                        if (start > noetime) {
                            daojishi($this.attr("data-newdate"), $this.attr("data-start"), $this)

                        } else {
                            daojishi($this.attr("data-newdate"), $this.attr("data-endtime"), $this)
                        }
                    })


                    var len = $(".baoCon ul li").length;
                    var maxIndex = Math.ceil(len / 4);
                    var index = 0;
                    $("body").delegate(".baoCon .leftArrow", "click", function () {
                        index--;
                        if (index < 0) {
                            index = maxIndex - 1;
                        }
                        var startNum = index * 4;
                        var endNum = (index + 1) * 4;
                        $(".baoCon ul li").hide();
                        $(".baoCon ul li").slice(startNum, endNum).show();
                    });
                    $("body").delegate(".baoCon .rightArrow", "click", function () {

                        index++;
                        if (index > maxIndex - 1) {
                            index = 0;
                        }
                        var startNum = index * 4;
                        var endNum = (index + 1) * 4;
                        $(".baoCon ul li").hide();
                        $(".baoCon ul li").slice(startNum, endNum).show();
                    })

                } else {
                   
                    $("#lowPrice").remove();

                }
            });
            function timeTab(a) {
                var $this = $(a);
                var thisIndex = $this.index();
                $this.addClass("cur").siblings().removeClass("cur");
                $(".lowPriceCon .lowPriceItem").eq(thisIndex).addClass("cur").siblings().removeClass("cur");
            }
            function daojishi(a, b, c) {
                var the_s = [];
                var startDate = new Date(a)
                var endDate = new Date(b);
                the_s[1] = (endDate.getTime() - startDate.getTime()) / 1000;
                var Time201606121 = setInterval(function () {
                    view_time(1, c)
                }, 1000);
                function view_time(the_s_index, objid) {
                    if (the_s[the_s_index] >= 0) {
                        var the_D = Math.floor((the_s[the_s_index] / 3600) / 24)
                        var the_H = Math.floor((the_s[the_s_index] - the_D * 24 * 3600) / 3600);
                        var the_M = Math.floor((the_s[the_s_index] - the_D * 24 * 3600 - the_H * 3600) / 60);
                        var the_S = Math.floor((the_s[the_s_index] - the_H * 3600) % 60);
                        var the_h1 = the_D * 24 + the_H;
                        html = "";
                        if (the_h1 >= 10) { html += '<span>' + String(the_h1).split('')[0] + '</span><span>' + String(the_h1).split('')[1] + "</span><i>:</i>"; } else { html += '<span>0</span><span>' + the_h1 + "</span><i>:</i>"; }
                        if (the_M >= 10) { html += '<span>' + String(the_M).split('')[0] + '</span><span>' + String(the_M).split('')[1] + "</span><i>:</i>"; } else { html += '<span>0</span><span>' + the_M + "</span><i>:</i>"; };
                        if (the_S >= 10) { html += '<span>' + String(the_S).split('')[0] + '</span><span>' + String(the_S).split('')[1] + "</span>"; } else { html += '<span>0</span><span>' + the_S + "</span>"; };

                        objid.html(html);
                        the_s[the_s_index]--;
                    }
                    else {
                        clearInterval(Time201606121);
                    }
                }

            }

            (function ($) {

                var len = $(".baoCon ul li").length;
                var maxIndex = Math.ceil(len / 4);
                var index = 0;
                $("body").delegate(".baoCon .leftArrow", "click", function () {
                    index--;
                    if (index < 0) {
                        index = maxIndex - 1;
                    }
                    var startNum = index * 4;
                    var endNum = (index + 1) * 4;
                    $(".baoCon ul li").hide();
                    $(".baoCon ul li").slice(startNum, endNum).show();
                });
                $("body").delegate(".baoCon .rightArrow", "click", function () {

                    index++;
                    if (index > maxIndex - 1) {
                        index = 0;
                    }
                    var startNum = index * 4;
                    var endNum = (index + 1) * 4;
                    $(".baoCon ul li").hide();
                    $(".baoCon ul li").slice(startNum, endNum).show();
                })
            })(jQuery);
        </script>




	<!--专题横条广告
        <div class="pageGuangao">
            <div class="w1200">
                <a href="#" target="_blank" title="中国图书网"><img src="http://img62.ddimg.cn/upload_img/00087/hw/1200x65_dl_20170509.jpg" alt="中国图书图书网" /></a>
            </div>
        </div>-->
	<!-- 楼层 -->
	<div class="kindFloor" id="floor1">
		<div class="w1200">
			<div class="floorTit clearfix">
				<h2>
					<a href="/books/literature/index.html" target="_blank">文学图书 &gt;</a>
				</h2>
				<ul>
					<li class="cur"><a href="/kinder/54000000/" target="_blank">小说</a></li>
					<li class=""><a href="/kinder/53000000_0_0_11_0_1_1_0_0/"
						target="_blank">诗歌散文</a></li>
					<li class=""><a href="/kinder/54290000_0_0_11_0_1_1_0_0/"
						target="_blank">悬疑推理</a></li>
					<li class=""><a href="/kinder/46000000_0_0_11_0_0_1_0_0/"
						target="_blank">青春文学</a></li>
				</ul>
			</div>
			<div class="floorCon clearfix">
				<div class="floorLeft">
					<div class="floorLeftInner">
						<div class="floorTabItem clearfix cur">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5890202.htm" title="裸体午餐" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5890202.jpg"
													alt="裸体午餐" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">小说排行榜</h3>
									<ul>
										<?php foreach ($store as $v){?>
										<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
									   <?php foreach ($store as $v){?>
										<li><div class="booKimg">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"
													title="<?php echo $v['authorIntro']?>"><img
													src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"
													alt="<?php echo $v['authorIntro']?>" /></a>
											</div>
											<h3 class="bookName">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"
													title="<?php echo $v['authorIntro']?>"><?php echo $v['authorIntro']?></a>
											</h3>
											<p class="bookAuthor"><?php echo $v['author']?></p>
											<div class="pirceWrap">
												<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
											</div>
										</li>
										<?php }?>
									</ul>
								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5890202.htm" title="裸体午餐" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5890202.jpg"
													alt="裸体午餐" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">文学排行榜</h3>
									<ul>
										<?php foreach ($foreignProse as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
									  <?php foreach ($foreignProse as $v){?>
										<li><div class="booKimg">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="<?php echo $v['authorIntro']?>"><img
													src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"
													alt="<?php echo $v['authorIntro']?>" /></a>
											</div>
											<h3 class="bookName">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="<?php echo $v['authorIntro']?>"><?php echo $v['authorIntro']?></a>
											</h3>
											<p class="bookAuthor"><?php echo $v['author']?></p>
											<div class="pirceWrap">
												<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
											</div></li>
											
										<?php }?>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5890202.htm" title="裸体午餐" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5890202.jpg"
													alt="裸体午餐" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">悬疑推理排行榜</h3>
									<ul>
										<?php foreach ($suspense as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($suspense as $v){?>
											<li><div class="booKimg">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="<?php echo $v['authorIntro']?>"><img
															src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"
															alt="<?php echo $v['authorIntro']?>" /></a>
												</div>
												<h3 class="bookName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="<?php echo $v['authorIntro']?>"><?php echo $v['authorIntro']?></a>
												</h3>
												<p class="bookAuthor"><?php echo $v['author']?></p>
												<div class="pirceWrap">
													<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
												</div></li>

										<?php }?>
										
									</ul>

								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5890202.htm"  target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5890202.jpg"
													 /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">青春文学排行榜</h3>
									<ul>
										<?php foreach ($qingnian as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($qingnian as $v){?>
											<li><div class="booKimg">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="<?php echo $v['authorIntro']?>"><img
															src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>"
															alt="<?php echo $v['authorIntro']?>" /></a>
												</div>
												<h3 class="bookName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="<?php echo $v['authorIntro']?>"><?php echo $v['authorIntro']?></a>
												</h3>
												<p class="bookAuthor"><?php echo $v['author']?></p>
												<div class="pirceWrap">
													<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
												</div></li>

										<?php }?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="kindFloor" id="floor2">
		<div class="w1200">
			<div class="floorTit clearfix">
				<h2>
					<a href="/books/socialscience/index.html" target="_blank">社科图书 &gt;</a>
				</h2>
				<ul>
					<li class="cur"><a href="/kinder/37000000/" target="_blank">历史</a></li>
					<li class=""><a href="/kinder/14000000/" target="_blank">传记</a></li>
					<li class=""><a href="/kinder/61000000/" target="_blank">古籍</a></li>
					<li class=""><a href="/kinder/62000000/" target="_blank">成功励志</a></li>
				</ul>
			</div>
			<div class="floorCon clearfix">
				<div class="floorLeft">
					<div class="floorLeftInner">
						<div class="floorTabItem clearfix cur">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5143152.htm" title="辽金军制" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5143152.jpg"
													alt="辽金军制" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">历史畅销榜</h3>
									<ul>
										<?php foreach ($histroy as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($histroy as $v){?>
										<li><div class="booKimg">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><img
													src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" /></a>
											</div>
											<h3 class="bookName">
												<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><?php echo $v['authorIntro']?></a>
											</h3>
											<p class="bookAuthor"><?php echo $v['author']?> 著</p>
											<div class="pirceWrap">
												<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
											</div></li>
										<?php }?>
									</ul>
								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5143152.htm" title="辽金军制" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5143152.jpg"
													alt="辽金军制" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">传记排行榜</h3>
									<ul>
										<?php foreach ($biography as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($biography as $v){?>
											<li><div class="booKimg">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><img
															src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" /></a>
												</div>
												<h3 class="bookName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><?php echo $v['authorIntro']?></a>
												</h3>
												<p class="bookAuthor"><?php echo $v['author']?> 著</p>
												<div class="pirceWrap">
													<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
												</div></li>
										<?php }?>
									</ul>

								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5143152.htm" title="辽金军制" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5143152.jpg"
													alt="辽金军制" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">古籍畅销榜</h3>
									<ul>
										<?php foreach ($ancientBook as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($ancientBook as $v){?>
											<li><div class="booKimg">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><img
															src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" /></a>
												</div>
												<h3 class="bookName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><?php echo $v['authorIntro']?></a>
												</h3>
												<p class="bookAuthor"><?php echo $v['author']?> 著</p>
												<div class="pirceWrap">
													<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
												</div></li>
										<?php }?>
									</ul>
								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5143152.htm" title="辽金军制" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5143152.jpg"
													alt="辽金军制" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">成功励志畅销榜</h3>
									<ul>
										<?php foreach ($success as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($success as $v){?>
											<li><div class="booKimg">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><img
															src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" /></a>
												</div>
												<h3 class="bookName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><?php echo $v['authorIntro']?></a>
												</h3>
												<p class="bookAuthor"><?php echo $v['author']?> 著</p>
												<div class="pirceWrap">
													<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
												</div></li>
										<?php }?>
									</ul>

								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/5143152.htm" title="辽金军制" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/5143152.jpg"
													alt="辽金军制" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<div class="kindFloor" id="floor3">
		<div class="w1200">
			<div class="floorTit clearfix">
				<h2>
					<a href="/books/children/index.html" target="_blank">少儿图书 &gt;</a>
				</h2>
				<ul>
					<li class="cur"><a href="/kinder/47350000/" target="_blank">中国儿童文学</a></li>
					<li class=""><a href="/kinder/47330000/" target="_blank">外国儿童文学</a></li>
					<li class=""><a href="/kinder/47220000/" target="_blank">绘本</a></li>
				</ul>
			</div>
			<div class="floorCon clearfix">
				<div class="floorLeft">
					<div class="floorLeftInner">
						<div class="floorTabItem clearfix cur">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/6465536.htm" title="绿山是一个谜 新蕾原创桥梁书"
												target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/6465536.jpg?id=1"
													alt="绿山是一个谜 新蕾原创桥梁书" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">中国儿童文学畅销榜</h3>
									<ul>
										<?php foreach ($cChild as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($cChild as $v){?>
											<li><div class="booKimg">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><img
															src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" /></a>
												</div>
												<h3 class="bookName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><?php echo $v['authorIntro']?></a>
												</h3>
												<p class="bookAuthor"><?php echo $v['author']?> 著</p>
												<div class="pirceWrap">
													<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
												</div></li>
										<?php }?>
									</ul>
									<div class="kindmore">
										<a href="/kinder/47350000/" target="_blank">查看更多</a>
									</div>
								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/6465536.htm" title="绿山" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/6465536.jpg?id=1"
													alt="绿山" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">外国儿童文学畅销榜</h3>
									<ul>
										<?php foreach ($mChild as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($mChild as $v){?>
											<li><div class="booKimg">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><img
															src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" /></a>
												</div>
												<h3 class="bookName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><?php echo $v['authorIntro']?></a>
												</h3>
												<p class="bookAuthor"><?php echo $v['author']?> 著</p>
												<div class="pirceWrap">
													<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
												</div></li>
										<?php }?>
									</ul>
								</div>
							</div>
						</div>
						<div class="floorTabItem clearfix ">
							<div class="floorTabLeft">
								<div class="tabBanner">
									<div class="bannerWrap">
										<ul>
											<li><a href="/6465536.htm" title="绿山是一个谜" target="_blank"><img
													src="http://image31.bookschina.com/pro-images/sbanner/6465536.jpg?id=1"
													alt="绿山是一个谜" /></a></li>
										</ul>
									</div>
									<div class="focusDot">
										<span class="cur"></span>
									</div>
								</div>
								<div class="kindText">
									<h3 class="kindTextTit">绘本畅销榜</h3>
									<ul>
										<?php foreach ($drawing as $v){?>
											<li><a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank"><?php echo $v['authorIntro']?></a><span>&gt;</span></li>
										<?php }?>
									</ul>
								</div>
							</div>
							<div class="floorTabRight">
								<div class="floorTabRightInner">
									<ul>
										<?php foreach ($drawing as $v){?>
											<li><div class="booKimg">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><img
															src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" /></a>
												</div>
												<h3 class="bookName">
													<a href="<?php echo APP?>/articles/index/goodsId/<?php echo $v['goodsId']?>" target="_blank" title="明清史丛说"><?php echo $v['authorIntro']?></a>
												</h3>
												<p class="bookAuthor"><?php echo $v['author']?> 著</p>
												<div class="pirceWrap">
													<span class="salePrice">&yen;<?php echo round($v['goodsPrice']*($v['goodsDiscounted']/100),2)?></span><span class="price">&yen;<?php echo $v['goodsPrice']?></span>
												</div></li>
										<?php }?>
									</ul>

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript">
         
     
            (function ($) { $(".tabBanner .focusDot").each(function () {
                    var $this = $(this);
                    if ($this.find("span").length < 2) {
                        $this.remove();
                    }
                })
                $(".tabBanner").slide({ mainCell: ".bannerWrap ul", titCell: ".focusDot span", effect: "left", interTime: 5000, autoPlay: true })
            })(jQuery);
     </script>

				</div>
			</div>
		</div>
	</div>
</div>
<!--右侧侧导航 -->
<div class="sidebar">
	<ul id="siderbarNav">
		<li class="link1"><a href="#recommend">本站力荐</a></li>
		<li class="link2"><a href="#newBook">新到精选</a></li>
		<li class="link3"><a href="#groupBuy">淘书团</a></li>
		<li class="link4"><a href="#lowPrice">限时低价</a></li>
		<li class="link5"><a href="#floor1">文学</a></li>
		<li class="link6"><a href="#floor2">社科</a></li>
		<li class="link7"><a href="#floor3">少儿</a></li>
	</ul>
	<div class="backTop">
		<a href="javascript:scrollTo(0,0)">返回顶部</a>
	</div>
</div>

<script type="text/javascript">

        $("#siderbarNav").onePageNav({
            scrollThreshold: 0.1
        });


        $(window).scroll(function () {
            var h = $(window).scrollTop();
            var sidebar = $(".sidebar");
            if (h > 555) {
                sidebar.show()
            } else {
                sidebar.hide()
            }
        })
    </script>