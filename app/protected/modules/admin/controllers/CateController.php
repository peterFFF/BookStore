<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/16
 * Time: 15:03
 */
class CateController extends Controller {
    public function actionIndex(){
        $db=Yii::app()->db;
        $st=$db->createCommand("select * from eshoptypes where level=1");
        $rs=$st->queryAll();
        $st=$db->createCommand("select * from eshoptypes");
        $rs2=$st->queryAll();
        $this->renderPartial('index',array(
            'type'=>$rs,
            'fetchall'=>$rs2
        ));
    }
    public function actionAdd(){
        $type=$_POST['type'];
        $title=$_POST['title'];
        $arr=explode('/',$type);
        $typeId=$arr['0'];
        $level=$arr['1'];
        $level=$level+1;
        $db=Yii::app()->db;
        $st=$db->createCommand("insert eshoptypes(typeName,pid,level) value('$title','$typeId','$level')");
        $rs=$st->execute();
        if($rs){
            echo "<script>alert('分类添加成功!');location='".APP."/admin/cate/index'</script>";
        }
    }
    public function actionDel(){
        $typeId=$_POST['typeId'];
        $db=Yii::app()->db;
        $st=$db->createCommand("delete from eshoptypes where typeId=$typeId");
        $rs=$st->execute();
        if($rs){
            echo "<script>alert('分类删除成功!');location='".APP."/admin/cate/index'</script>";
        }
    }
}