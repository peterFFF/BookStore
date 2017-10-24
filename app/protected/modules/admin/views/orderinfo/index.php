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
                <th width="15%" style="text-align:center; padding-left:20px;">订单ID</th>
                <th width="15%">订单总价</th>
                <th width="15%">购买人</th>
                <th width="15%">收货人</th>
                <th width="15%">收货人电话</th>
                <th width="15">操作</th>
            </tr>
            <?php $i=1;foreach($rs as $k=>$v){?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $v['orderId']?></td>
                <td><?php echo $v['totalPrice']?></td>
                <td><?php echo $v['userName']?></td>
                <td><?php echo $v['accpter']?></td>
                <td><?php echo $v['tel']?></td>
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
