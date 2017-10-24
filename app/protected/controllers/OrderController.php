<?php
session_start();
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/21
 * Time: 20:33
 */
class OrderController extends Controller {
    public function actionIndex(){
        $userId=$_SESSION['user']['userId'];
        $db=Yii::app()->db;
        $st=$db->createCommand("select a.goodsId,a.authorIntro,a.press,a.goodsPrice,a.goodsDiscounted,a.goodsImage,
a.goodsInfo,a.goodsfeatures,a.excerpts,b.carId,b.userId,b.bookId,b.bookCount from eshopinfo a inner join carinfo b on a.goodsId=b.bookId where b.userId=$userId");
        $rs=$st->queryAll();
        $totalPrice=0;
        $totalCount=0;
        foreach ($rs as $v){
            $price=$v['bookCount']*$v['goodsPrice']*$v['goodsDiscounted']/100;
            $totalPrice+=$price;
            $totalCount+=$v['bookCount'];
        }
        $i=rand(27,50);
        $st=$db->createCommand("select * from eshopinfo limit {$i},5");
        $res=$st->queryAll();
        $this->render('index',array(
            'rs'=>$rs,
            'totalPrice'=>$totalPrice,
            'totalCount'=>$totalCount,
            'res'=>$res
        ));
    }
    public function actionOrder(){
        $userId=$_SESSION['user']['userId'];
        $db=Yii::app()->db;
        $st=$db->createCommand("select * from carinfo where userId=$userId");
        $rs=$st->queryRow();
        $i=rand(27,50);
        $st=$db->createCommand("select * from eshopinfo limit {$i},5");
        $res=$st->queryAll();
        if($rs){
            $db=Yii::app()->db;
            $db->createCommand("start transaction");
            $totalPrice=$_GET['totalPrice'];
            $userId=$_SESSION['user']['userId'];
            $orderId=time().rand(0,9).rand(0,9).rand(0,9);
            $accpter=$_POST['accpter'];
            $tel=$_POST['phone'];
            $address=$_POST['province'].$_POST['city'].$_POST['district'].$_POST['address2'];
            $postcode=$_POST['postcode'];
            $st=$db->createCommand("insert orderinfo(orderId,totalPrice,userId,accpter,tel,address,postcode)
                     value ('$orderId','$totalPrice','$userId','$accpter','$tel','$address','$postcode')");
            $rs1=$st->execute();
            //向orderdetails添加数据
            $st=$db->createCommand("select a.goodsId,a.authorIntro,a.press,a.goodsPrice,a.goodsDiscounted,a.goodsImage,
a.goodsInfo,a.goodsfeatures,a.excerpts,b.carId,b.userId,b.bookId,b.bookCount from eshopinfo a inner join carinfo b on a.goodsId=b.bookId where b.userId=$userId");
            $rs=$st->queryAll();
            foreach($rs as $v){
                $bookId=$v['goodsId'];
                $bookCount=$v['bookCount'];
                $st=$db->createCommand("insert orderdetails(orderId,bookId,bookCount) value ('$orderId','$bookId','$bookCount')");
                $rs2=$st->execute();
                //向商品库存表添加数据
                $st=$db->createCommand("select * from storage where goodsId=$bookId");
                $rs=$st->queryRow($st);
                if($rs){
                    $st=$db->createCommand("update  storage set sale=sale+$bookCount where goodsId=$bookId");
                    $rs3=$st->execute();
                }else{
                    $st=$db->createCommand("insert storage(goodsId,sale) value ('$bookId','$bookCount')");
                    $rs3=$st->execute();
                }
            }
            //清空购物车
            $st=$db->createCommand("delete from carinfo where userId=$userId");
            $rs4=$st->execute();
            //将订单号传到提交成功页
            if($rs1&&$rs2&&$rs3&&$rs4){

                $db->createCommand("commit");
                $this->render('order',array(
                    'orderId'=>$orderId,
                    'res'=>$res
                ));
            }else{
                $db->createCommand("rollback");
                $this->render('../success/index',array(
                    'message'=>'购买失败',
                    'jumpUrl'=>APP."/index/index"
                ));
            }

        }else{
            $this->redirect(APP.'/goodsCar/index');
        }
    }
}