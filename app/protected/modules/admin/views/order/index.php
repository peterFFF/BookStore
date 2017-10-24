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
        function delorder(orderId) {
            if(confirm("确定要删除吗?")){
                location="<?php echo APP?>/admin/order/index/orderId/"+orderId;
            }
        }
    </script>
</head>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">

        <table class="table table-hover text-center">
            <tr>
                <th width="10%">排序</th>
                <th width="18%" style="text-align:left; padding-left:20px;">订单ID</th>
                <th width="50%">订单详情</th>
                <th width="150">操作</th>
            </tr>
                <?php $i=1;foreach($arr as $k=>$v){?>
                <tr>
                    <td><input type="text" name="sort[1]" value="<?php echo $i?>" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>
                    <td style="text-align:left; padding-left:20px;"><?php echo $k?></td>
                    <td ><table>
                                        <tr><td>商品</td><?php foreach($v as $vv){?><td style="color:#00CC99"><?php echo mb_substr($vv['2'],0,4,'utf-8').'...'?></td><?php }?></tr>
                                        <tr><td>ID</td><?php foreach($v as $vv){?><td style="color:#ff4500"><?php echo $vv['0']?></td><?php }?></tr>
                                        <tr><td>数量</td><?php foreach($v as $vv){?><td><?php echo $vv['1']?></td><?php }?></tr>

                                    </table></td>

                    <td><div class="button-group"> <a class="button border-main" href="javascript:delorder(<?php echo $k?>)"><span class="icon-edit"></span>删除订单</a></div></td>
                </tr>
                <?php $i++;}?>
                <tr>
                    <td colspan="8"><div class="pagelist"> <a href="">上一页</a> <span class="current">1</span><a href="">下一页</a><a href="">尾页</a> </div></td>
                </tr>
        </table>
    </div>
</form>


</body>
</html>
