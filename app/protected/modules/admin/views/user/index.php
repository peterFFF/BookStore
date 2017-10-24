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
</head>
<body>
<div class="panel admin-panel">
    <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong></div>

    <table class="table table-hover text-center">
        <tr>
            <th width="5%">序号</th>
            <th width="5%">ID</th>
            <th width="5%">用户名</th>
            <th width="10%">邮箱</th>
            <th width="10%">等级</th>
            <th width="10%">操作</th>
        </tr>
        <?php $i=1;foreach($rs as $v){?>
        <tr>
            <td><?php echo $i?></td>
            <td><?php echo $v['userId']?></td>
            <td><?php echo $v['userName']?></td>
            <td><?php echo $v['email']?></td>
            <td style="color:darkred"><?php echo $v['levelName']?></td>
            <td><div class="button-group"> <a class="button border-main" href="cateedit.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,2)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php $i++;}?>

    </table>
</div>
<script type="text/javascript">
    function del(id,mid){
        if(confirm("您确定要删除吗?")){

        }
    }
</script>

</body>
</html>