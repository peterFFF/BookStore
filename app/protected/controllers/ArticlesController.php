<?php
session_start();
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/19
 * Time: 11:46
 */
class ArticlesController extends BaseController{
    public function actionIndex(){
        $goodsId=$_GET['goodsId'];
        $db=Yii::app()->db;
        $st=$db->createCommand("select * from eshopinfo a inner join eshoptypes b on a.typeId=b.typeId where a.goodsId=$goodsId");
        $rs=$st->queryRow();
        //侧栏本类畅销4本
        //通过goodsId获取该商品分类
        $stype=$db->createCommand("select typeId from eshopinfo where goodsId=$goodsId");
        $rstype=$stype->queryRow();
        $typeId=$rstype['typeId'];
        //通过typeId找到一级父Id
        $spid=$db->createCommand("select pid from eshoptypes where typeId=$typeId");
        $rspid=$spid->queryRow();
        $pid=$rspid['pid'];
        //查询该类下畅销的商品
        $ssale=$db->createCommand("select * from eshopinfo a inner join storage b on a.goodsId=b.goodsId where a.typeId in(select typeId from eshoptypes where pid=$pid) order by b.sale DESC limit 4");
        $rsale=$ssale->queryAll();
        $this->render('index',array(
            'rs'=>$rs,
            'rsale'=>$rsale
        ));
    }
}