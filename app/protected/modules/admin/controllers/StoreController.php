<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/31
 * Time: 8:33
 */
class StoreController extends Controller{
    public function actionIndex(){
        $db=Yii::app()->db;
        if(@$_GET['goodsId']){
            $goodsId=$_GET['goodsId'];
            $sale=$_GET['sale'];
            $st=$db->createCommand("update storage set count=count+$sale where goodsId=$goodsId");
            $st->execute();
        }
        $currentPage=isset($_GET['page'])?$_GET['page']:1;
        $count=$db->createCommand("select count(*) from storage")->queryAll();
        $total=$count['0']['count(*)'];
        $pageSize=10;
        $totalPage=ceil($total/$pageSize);
        $offset=($currentPage-1)*$pageSize;
        $st=$db->createCommand("select * from eshopinfo a INNER JOIN storage b on a.goodsId=b.goodsId limit $offset,$pageSize");
        $rs=$st->queryAll();
        $this->renderPartial('index',array(
            'listinfo'=>$rs,
            'currentPage'=>$currentPage,
            'totalPage'=>$totalPage
        ));
    }
    public function actionAdd(){
        $db=Yii::app()->db;
        $st=$db->createCommand("update storage set ");
    }
}