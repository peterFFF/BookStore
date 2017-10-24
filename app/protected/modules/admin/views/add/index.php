<?php
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
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo APP?>/admin/add/add" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>书名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="authorIntro" data-validate="required:请输入书名" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>作者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="author" data-validate="required:请输入作者" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>出版社：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="press" data-validate="required:请输入出版社" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>封面：</label>
        </div>
        <div class="field">
<!--          <input type="text" id="url1" name="img" class="input tips" style="width:25%; float:left;"  value=""  data-toggle="hover" data-place="right" data-image="" />
-->          <input type="file" name="goodsImage" id="" class="button bg-blue margin-left" id="image1" style="float:left;"/>
          <div class="tipss">图片尺寸：500*500</div>
        </div>
      </div>     
      
      <if condition="$iscid eq 1">
        <div class="form-group">
          <div class="label">
            <label>分类标题：</label>
          </div>
          <div class="field">

            <select name="typeId" class="input w50">
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
                          <option value="<?php echo $vvv['typeId']?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vvv['typeName']?></option>
              <?php }}}}}}?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
        <div class="form-group">
          <div class="label">
            <label>其他属性：</label>
          </div>
          <div class="field" style="padding-top:8px;"> 
            通栏推荐 <input name="isImage"  type="radio" value="1"/>
            主编推荐 <input name="isStories"  type="radio" value="1" />
            本周精选 <input name="isNature"  type="radio" value="1"/>
            新书速递 <input name="isspeed"  type="radio" value="1"/>
          </div>
        </div>
      </if>
      <div class="form-group">
        <div class="label">
          <label>目录：</label>
        </div>
        <div class="field">
          <textarea class="input" name="directory" style=" height:90px;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>内容：</label>
        </div>
        <div class="field">
          <textarea name="goodsInfo" class="input" style="height:250px; border:1px solid #ddd;"></textarea>
          <div class="tips"></div>
        </div>
      </div>
     
      <div class="clear"></div>
      <div class="form-group">
        <div class="label">
          <label>书籍特色：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="goodsfeatures" value="" />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>节选精彩内容：</label>
        </div>
        <div class="field">
          <input type="text" class="input" name="excerpts" value=""/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>出版时间：</label>
        </div>
        <div class="field">
          <input type="text" id="time" class="input w50" name="publishingtime" value=""   />
          <div class="tips"></div>
        </div>
      </div>
      <script src="<?php echo ROOT?>/js/laydate.dev.js"></script>
      <script>
        laydate({
          elem: '#time'
        });
        document.getElementById('time').onclick = function(){
          laydate({
            elem: '#time'
          });
          };

      </script>
      <div class="form-group">
        <div class="label">
          <label>图书价格：¥</label>
        </div>
        <div class="field">
          <input type="text" class="input w50"  name="goodsPrice" value="" data-validate="member:只能为数字"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>价格折扣：%</label>
        </div>
        <div class="field">
          <input type="text" class="input w50"  name="goodsDiscounted" value="100" data-validate="member:只能为数字"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>发布者：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50"  name="userId" value="<?php echo $_SESSION['adminName']?>" data-validate="member:只能为数字"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>