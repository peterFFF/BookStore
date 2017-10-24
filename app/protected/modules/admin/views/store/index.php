<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/16
 * Time: 10:17
 */
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title></title>
    <link rel="stylesheet" href="<?php echo ROOT?>/css/pintuer.css" type="text/css">
    <link rel="stylesheet" href="<?php echo ROOT?>/css/admin.css" type="text/css">
    <script src="<?php echo ROOT?>/js/jquery.js"></script>
    <script src="<?php echo ROOT?>/js/pintuer.js"></script>
    <script>
        function addstore(goodsId,sale) {
            if(confirm("你需要添加商品库存吗?")){
                location="<?php echo APP?>/admin/store/index/goodsId/"+goodsId+"/sale/"+sale;
            }
        }
    </script>
</head>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">

        <table class="table table-hover text-center">
            <tr>
                <th width="100" style="text-align:left; padding-left:20px;">ID</th>
                <th width="10%">排序</th>
                <th>封面</th>
                <th>书名</th>
                <th>单价</th>
                <th>已售(本)</th>
                <th>余量(本)</th>
                <th width="10%">更新时间</th>
                <th width="310">操作</th>
            </tr>
                <?php $i=1;foreach($listinfo as $v){?>
                <tr>
                    <td style="text-align:left; padding-left:20px;"><?php echo $v['goodsId']?></td>
                    <td><input type="text" name="sort[1]" value="<?php echo $i?>" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>
                    <td width="10%"><img src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" alt="" width="70" height="50" /></td>
                    <td><?php echo $v['authorIntro']?></td>
                    <td><font color="#00CC99"><?php echo $v['goodsPrice']?></font></td>
                    <td><font color="#ff4500"><?php echo $v['sale']?></font></td>
                    <td><?php echo $v['count']-$v['sale']?></td>
                    <td><?php echo $v['dateandtime']?></td>
                    <td><div class="button-group"> <a class="button border-main theme-login" href="javascript:addstore(<?php echo $v['goodsId']?>,<?php echo $v['sale']?>)"><span class="icon-edit  "></span> 增加库存</a>  </div></td>
                </tr>
                <?php $i++;}?>
                <tr>
                    <?php if($currentPage==1){?>
                        <td colspan="8"><div class="pagelist"> <a href="#">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="<?php echo APP?>/admin/store/index/page/<?php echo $currentPage+1?>">下一页</a><a href="<?php echo APP?>/admin/store/index/page/<?php echo $totalPage?>">尾页</a> </div></td>
                    <?php }elseif($currentPage==$totalPage){?>
                        <td colspan="8"><div class="pagelist"> <a href="<?php echo APP?>/admin/store/index/page/<?php echo $currentPage-1?>">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="#">下一页</a><a href="<?php echo APP?>/admin/store/index/page/<?php echo $totalPage?>">尾页</a> </div></td>

                    <?php }else{?>
                        <td colspan="8"><div class="pagelist"> <a href="<?php echo APP?>/admin/store/index/page/<?php echo $currentPage-1?>">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="<?php echo APP?>/admin/store/index/page/<?php echo $currentPage+1?>">下一页</a><a href="<?php echo APP?>/admin/store/index/page/<?php echo $totalPage?>">尾页</a> </div></td>
                    <?php }?>
                </tr>
        </table>
    </div>
</form>


</body>
</html>
