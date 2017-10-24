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
    <div class="padding border-bottom">
        <button type="button" class="button border-yellow" onclick="window.location.href='#add'"><span class="icon-plus-square-o"></span> 添加分类</button>
    </div>
    <table class="table table-hover text-center">
        <tr>
            <th width="5%">ID</th>
            <th width="15%">一级分类</th>
            <th width="10%">排序</th>
            <th width="10%">操作</th>
        </tr>
        <?php $i=1;foreach($type as $v){?>
        <tr>
            <td><?php echo $v['typeId']?></td>
            <td><?php echo $v['typeName']?></td>
            <td><?php echo $i?></td>
            <td><div class="button-group">  <a class="button border-red" href="javascript:deltype(<?php echo $v['typeId']?>)"><span class="icon-trash-o"></span> 删除</a> </div></td>
        </tr>
        <?php $i++;}?>
    </table>
</div>
<script type="text/javascript">
    function deltype(typeId){
        if(confirm("您确定要删除吗?")){
            location="<?php echo APP?>/admin/cate/del/typeId/"+typeId;
        }
    }
</script>
<div class="panel admin-panel margin-top">
    <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加内容</strong></div>
    <div class="body-content">
        <form method="post" class="form-x" action="<?php echo APP?>/admin/cate/add">
            <div class="form-group">
                <div class="label">
                    <label>上级分类：</label>
                </div>
                <div class="field">
                    <select name="type" class="input w50">
                        <?php foreach($fetchall as $v){if($v['level']==1){?>
                                <option value="<?php echo $v['typeId'].'/'.$v['level']?>"><?php echo $v['typeName']?></option>
                                <?php foreach($fetchall as $vv){
                                    if($vv['pid']==$v['typeId']){?>
                                        <option value="<?php echo $vv['typeId'].'/'.$vv['level']?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vv['typeName']?></option>
                                        <?php foreach($fetchall as $vvv){if($vvv['pid']==$vv['typeId']){?>
                                                <option value="<?php echo $vvv['typeId'].'/'.$vvv['level']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vvv['typeName']?></option>
                        <?php }}}}}}?>
                    </select>
                    <div class="tips">不选择上级分类默认为一级分类</div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label>分类标题：</label>
                </div>
                <div class="field">
                    <input type="text" class="input w50" name="title" />
                    <div class="tips"></div>
                </div>
            </div>
            <div class="form-group">
                <div class="label">
                    <label></label>
                </div>
                <div class="field">
                    <input type="submit" class="button bg-main icon-check-square-o" value="提交">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>