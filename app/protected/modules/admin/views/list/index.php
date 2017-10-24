
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

    </script>
</head>
<body>
<form method="post" action="" id="listform">
    <div class="panel admin-panel">
        <div class="panel-head"><strong class="icon-reorder"> 内容列表</strong> <a href="" style="float:right; display:none;">添加字段</a></div>
        <div class="padding border-bottom">
            <ul class="search" style="padding-left:10px;">
                <li> <a class="button border-main icon-plus-square-o" href="<?php echo APP?>/admin/add/index"> 添加内容</a> </li>
                <li>搜索：</li>
                <li>首页
                    <select name="s_ishome" class="input" onchange="changesearch()" style="width:60px; line-height:17px; display:inline-block">
                        <option value="">选择</option>
                        <option value="1">是</option>
                        <option value="0">否</option>
                    </select>
                    &nbsp;&nbsp;
                    推荐
                    <select name="s_isvouch" class="input" onchange="changesearch()"  style="width:60px; line-height:17px;display:inline-block">
                        <option value="">选择</option>
                        <option value="1">是</option>
                        <option value="0">否</option>
                    </select>
                    &nbsp;&nbsp;
                    置顶
                    <select name="s_istop" class="input" onchange="changesearch()"  style="width:60px; line-height:17px;display:inline-block">
                        <option value="">选择</option>
                        <option value="1">是</option>
                        <option value="0">否</option>
                    </select>
                </li>
                <if condition="$iscid eq 1">
                    <li>
                        <select name="cid" class="input" style="width:200px; line-height:17px;" onchange="changesearch(this.value)">
                            <?php foreach($fetchall as $v){
                                if($v['level']==1){
                                    ?>
                                    <option value="<?php echo $v['typeId']?>"><?php echo $v['typeName']?></option>
                                    <?php foreach($fetchall as $vv){
                                        if($vv['pid']==$v['typeId']){
                                            ?>
                                            <option value="<?php echo $vv['typeId']?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vv['typeName']?></option>
                                            <?php foreach($fetchall as $vvv){
                                                if($vvv['pid']==$vv['typeId']){
                                                    ?>
                                                    <option value="<?php echo $vvv['typeId']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php echo $vvv['typeName']?></option>
                                                <?php }}}}}}?>
                        </select>
                    </li>
                </if>
                <li>
                    <input type="text" placeholder="请输入搜索关键字" name="keywords" class="input" style="width:250px; line-height:17px;display:inline-block" />
                    <a href="javascript:void(0)" class="button border-main icon-search" onclick="changesearch()" > 搜索</a></li>
            </ul>
        </div>
        <table class="table table-hover text-center">
            <tr>
                <th width="100" style="text-align:left; padding-left:20px;">ID</th>
                <th width="10%">排序</th>
                <th>封面</th>
                <th>书名</th>
                <th>作者</th>
                <th>单价</th>
                <th>分类名称</th>
                <th width="10%">更新时间</th>
                <th width="310">操作</th>
            </tr>
                <?php $i=1;foreach($listinfo as $v){?>
                <tr>
                    <td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /><?php echo $v['goodsId']?></td>
                    <td><input type="text" name="sort[1]" value="<?php echo $i?>" style="width:50px; text-align:center; border:1px solid #ddd; padding:7px 0;" /></td>
                    <td width="10%"><img src="<?php echo ROOT?>/photoView/<?php echo $v['goodsImage']?>" alt="" width="70" height="50" /></td>
                    <td><?php echo $v['authorIntro']?></td>
                    <td><font color="#00CC99"><?php echo $v['author']?></font></td>
                    <td><font color="#ff4500"><?php echo $v['goodsPrice']?></font></td>
                    <td><?php echo $v['typeName']?></td>
                    <td><?php echo $v['dateandtime']?></td>
                    <td><div class="button-group"> <a class="button border-main" href="add.html"><span class="icon-edit"></span> 修改</a> <a class="button border-red" href="javascript:void(0)" onclick="return del(1,1,1)"><span class="icon-trash-o"></span> 删除</a> </div></td>
                </tr>
                <?php $i++;}?>
                <tr>
                    <td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall"/>
                        全选 </td>
                    <td colspan="7" style="text-align:left;padding-left:20px;"><a href="javascript:void(0)" class="button border-red icon-trash-o" style="padding:5px 15px;" onclick="DelSelect()"> 删除</a> <a href="javascript:void(0)" style="padding:5px 15px; margin:0 10px;" class="button border-blue icon-edit" onclick="sorts()"> 排序</a> 操作：
                        <select name="ishome" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeishome(this)">
                            <option value="">首页</option>
                            <option value="1">是</option>
                            <option value="0">否</option>
                        </select>
                        <select name="isvouch" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeisvouch(this)">
                            <option value="">推荐</option>
                            <option value="1">是</option>
                            <option value="0">否</option>
                        </select>
                        <select name="istop" style="padding:5px 15px; border:1px solid #ddd;" onchange="changeistop(this)">
                            <option value="">置顶</option>
                            <option value="1">是</option>
                            <option value="0">否</option>
                        </select>
                        移动到：
                        <select name="movecid" style="padding:5px 15px; border:1px solid #ddd;" onchange="changecate(this)">
                            <?php foreach($fetchall as $v){
                                if($v['level']==1){
                                    ?>
                                    <option value="<?php echo $v['typeId']?>"><?php echo $v['typeName']?></option>
                                    <?php foreach($fetchall as $vv){
                                        if($vv['pid']==$v['typeId']){
                                            ?>
                                            <option value="<?php echo $vv['typeId']?>">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vv['typeName']?></option>
                                            <?php foreach($fetchall as $vvv){
                                                if($vvv['pid']==$vv['typeId']){
                                                    ?>
                                                    <option value="<?php echo $vvv['typeId']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        <?php echo $vvv['typeName']?></option>
                            <?php }}}}}}?>
                        </select>
                        <select name="copynum" style="padding:5px 15px; border:1px solid #ddd;" onchange="changecopy(this)">
                            <option value="">请选择复制</option>
                            <option value="5">复制5条</option>
                            <option value="10">复制10条</option>
                            <option value="15">复制15条</option>
                            <option value="20">复制20条</option>
                        </select></td>
                </tr>
            <tr>
                <?php if($currentPage==1){?>
                    <td colspan="8"><div class="pagelist"> <a href="#">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="<?php echo APP?>/admin/list/index/page/<?php echo $currentPage+1?>">下一页</a><a href="<?php echo APP?>/admin/list/index/page/<?php echo $totalPage?>">尾页</a> </div></td>
                <?php }elseif($currentPage==$totalPage){?>
                    <td colspan="8"><div class="pagelist"> <a href="<?php echo APP?>/admin/list/index/page/<?php echo $currentPage-1?>">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="#">下一页</a><a href="<?php echo APP?>/admin/list/index/page/<?php echo $totalPage?>">尾页</a> </div></td>

                <?php }else{?>
                    <td colspan="8"><div class="pagelist"> <a href="<?php echo APP?>/admin/list/index/page/<?php echo $currentPage-1?>">上一页</a> <span class="current"><?php echo $currentPage?></span><a href="<?php echo APP?>/admin/list/index/page/<?php echo $currentPage+1?>">下一页</a><a href="<?php echo APP?>/admin/list/index/page/<?php echo $totalPage?>">尾页</a> </div></td>
                <?php }?>
            </tr>
        </table>
    </div>
</form>
<script type="text/javascript">
    //搜索
    function changesearch(typeId){
        location="<?php echo APP?>/admin/list/index/typeId/"+typeId;
    }
    //单个删除
    function del(id,mid,iscid){
        if(confirm("您确定要删除吗?")){

        }
    }
    //全选
    $("#checkall").click(function(){
        $("input[name='id[]']").each(function(){
            if (this.checked) {
                this.checked = false;
            }
            else {
                this.checked = true;
            }
        });
    })
    //批量删除
    function DelSelect(){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){
            var t=confirm("您确认要删除选中的内容吗？");
            if (t==false) return false;
            $("#listform").submit();
        }
        else{
            alert("请选择您要删除的内容!");
            return false;
        }
    }
    //批量排序
    function sorts(){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");
            return false;
        }
    }
    //批量首页显示
    function changeishome(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量推荐
    function changeisvouch(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){


            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量置顶
    function changeistop(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");

            return false;
        }
    }


    //批量移动
    function changecate(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){

            $("#listform").submit();
        }
        else{
            alert("请选择要操作的内容!");

            return false;
        }
    }

    //批量复制
    function changecopy(o){
        var Checkbox=false;
        $("input[name='id[]']").each(function(){
            if (this.checked==true) {
                Checkbox=true;
            }
        });
        if (Checkbox){
            var i = 0;
            $("input[name='id[]']").each(function(){
                if (this.checked==true) {
                    i++;
                }
            });
            if(i>1){
                alert("只能选择一条信息!");
                $(o).find("option:first").prop("selected","selected");
            }else{

                $("#listform").submit();
            }
        }
        else{
            alert("请选择要复制的内容!");
            $(o).find("option:first").prop("selected","selected");
            return false;
        }
    }

</script>
</body>
</html>
