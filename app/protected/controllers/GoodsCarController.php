<?php
session_start();
class goodsCarController extends Controller{
    public function actionIndex(){
        if(@$_SESSION['user']){
            $userId=$_SESSION['user']['userId'];
            $db=Yii::app()->db;
            $st=$db->createCommand("select a.goodsId,a.authorIntro,a.press,a.goodsPrice,a.goodsDiscounted,a.goodsImage,
a.goodsInfo,a.goodsfeatures,a.excerpts,b.carId,b.userId,b.bookId,b.bookCount from eshopinfo a inner join carinfo b on a.goodsId=b.bookId where b.userId=$userId");
            $rs=$st->queryAll();
            $totalPrice=0;
            $totalPriceAll=0;
            $totalCount=0;
            foreach ($rs as $v){
                $price=$v['bookCount']*$v['goodsPrice']*$v['goodsDiscounted']/100;
                $totalPrice+=$price;
                $price2=$v['bookCount']*$v['goodsPrice'];
                $totalPriceAll+=$price2;
                $totalCount+=$v['bookCount'];
            }
            //下方推荐
            $i=rand(27,50);
            $st=$db->createCommand("select * from eshopinfo limit {$i},5");
            $res=$st->queryAll();
            $this->render('index',array(
                'rs'=>$rs,
                'totalPrice'=>$totalPrice,
                'totalCount'=>$totalCount,
                'totalPriceAll'=>$totalPriceAll,
                'res'=>$res
            ));
        }else{
            $db=Yii::app()->db;
            $i=rand(27,50);
            $st=$db->createCommand("select * from eshopinfo limit {$i},5");
            $res=$st->queryAll();
            $this->render('index',array(
                'res'=>$res
            ));
        }
    }
    public function actionDel(){
        $carId=$_GET['carId'];
        $db=Yii::app()->db;
        $st=$db->createCommand("delete from carinfo where carId=$carId");
        $rs=$st->execute();
        if($rs){
            echo '1';
        }
        //$this->redirect(APP."/goodscar/index");
    }
}
