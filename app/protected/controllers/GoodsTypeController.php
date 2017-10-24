<?php
session_start();
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/22
 * Time: 19:23
 */
class goodsTypeController extends Controller{
    public function actionIndex(){
        $typeId=$_GET['typeId'];
        $currentPage=isset($_GET['page'])?$_GET['page']:1;
        $db=Yii::app()->db;
        $st=$db->createCommand("select * from eshoptypes where pid=-1");
        $obj=$st->query();
        $navbar=$obj->readAll();
        $count=$db->createCommand("select count(*) from eshopinfo where typeId=$typeId")->queryAll();
        $total=$count['0']['count(*)'];
        $pageSize=12;
        $totalPage=ceil($total/$pageSize);
        $offset=($currentPage-1)*$pageSize;
        $st=$db->createCommand("select * from eshopinfo where typeId=$typeId limit $offset,$pageSize");
        $rs=$st->queryAll();
        $this->render('index',array(
            'currentPage'=>$currentPage,
            'totalPage'=>$totalPage,
            'navbar'=>$navbar,
            'typeId'=>$typeId,
            'rs'=>$rs
        ));


        //导航

       /* $st1=$bd->createCommand("select count(*) from eshopinfo where typeId=$typeId");
        $obj1=$st1->query();
        $rs=$obj1->readAll();
        $count=$rs['0']['count(*)'];
        $pages=new CPagination($count);
        $pages->setPageSize(3);
        $st2=$bd->createCommand("select * from eshopinfo where typeId=$typeId limit $pages->getOffset(),$pages->getPageSize()");
        $obj2=$st2->query();
        $goodsType=$obj2->readAll();*/

    }
    public function actionSearch(){
        $currentPage=isset($_GET['page'])?$_GET['page']:1;
        $db=Yii::app()->db;
        $st=$db->createCommand("select * from eshoptypes where pid=-1");
        $obj=$st->query();
        $navbar=$obj->readAll();
        $keyword=$_GET['keyword'];
        $count=$db->createCommand("select count(*) from eshopinfo where authorIntro like '%$keyword%'")->queryAll();
        $total=$count['0']['count(*)'];
        $pageSize=12;
        $totalPage=ceil($total/$pageSize);
        $offset=($currentPage-1)*$pageSize;
        $st=$db->createCommand("select * from eshopinfo where authorIntro like '%$keyword%' limit $offset,$pageSize");
        $rs=$st->queryAll();
        $this->render('search',array(
            'currentPage'=>$currentPage,
            'totalPage'=>$totalPage,
            'keyword'=>$keyword,
            'navbar'=>$navbar,
            'rs'=>$rs
        ));
    }
}