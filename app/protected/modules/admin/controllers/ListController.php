<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/16
 * Time: 10:16
 */
class ListController extends Controller {
    public function actionIndex(){
        $currentPage=isset($_GET['page'])?$_GET['page']:1;
        $db=Yii::app()->db;
        if(@$_GET['typeId'])
        {
            $typeId=$_GET['typeId'];
            $count=$db->createCommand("select count(*) from eshopinfo  where typeId=$typeId")->queryAll();
            $total=$count['0']['count(*)'];
            $pageSize=10;
            $totalPage=ceil($total/$pageSize);
            $offset=($currentPage-1)*$pageSize;
            $st=$db->createCommand("select * from eshopinfo a INNER JOIN eshoptypes b on a.typeId=b.typeId where a.typeId=$typeId limit $offset,$pageSize");
            $rs=$st->queryAll();
            $st=$db->createCommand("select * from eshoptypes");
            $newsType=$st->queryAll();
        }else{
            $count=$db->createCommand("select count(*) from eshopinfo")->queryAll();
            $total=$count['0']['count(*)'];
            $pageSize=10;
            $totalPage=ceil($total/$pageSize);
            $offset=($currentPage-1)*$pageSize;
            $st=$db->createCommand("select * from eshopinfo a INNER JOIN eshoptypes b on a.typeId=b.typeId limit $offset,$pageSize");
            $rs=$st->queryAll();
            $st=$db->createCommand("select * from eshoptypes");
            $newsType=$st->queryAll();
        }

        /*$db=Yii::app()->db;
        $sql= "select * from eshopinfo a INNER JOIN eshoptypes b on a.typeId=b.typeId";
        $command = $db->createCommand($sql)->queryAll();
        $pages = new CPagination(count($command));
        $list = $db->createCommand($sql." limit ".$pages->limit." offset ".$pages->offset."")->queryAll();*/
        $this->renderPartial('index',array(
            'listinfo' => $rs,
            'fetchall'=>$newsType,
            'currentPage'=>$currentPage,
            'totalPage'=>$totalPage
        ));

    }
}