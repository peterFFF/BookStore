<?php
session_start();
class ActController extends Controller{
    public function actionIndex(){
        $goodsId=$_POST['goodsId'];
        if(@$_SESSION['user']['userId']){            ;
            $goodsCount=$_POST['goodsCount'];
            $userId=$_SESSION['user']['userId'];
            $db=Yii::app()->db;
            //查询购物车是否已经购买该商品
            $st1=$db->createCommand("select * from carinfo where userId='$userId' and bookId='$goodsId'");
            $rs1=$st1->execute();
            if($rs1){
                $st=$db->createCommand("update carinfo set bookCount=bookCount+$goodsCount where bookId=$goodsId and userId=$userId");
            }else{
                $st=$db->createCommand("insert carinfo(userId,bookId,bookCount) value ('$userId','$goodsId','$goodsCount')");
            }
            $rs=$st->execute();
            if($rs)
                echo 1;
            else
                echo 0;

        }else{

            echo 3;
        }
    }
    public function actionChange(){
        $bookCount=$_POST['bookCount'];
        $carId=$_POST['carId'];
        $db=Yii::app()->db;
        $st=$db->createCommand("update carinfo set bookCount=$bookCount where carId=$carId");
        $rs=$st->execute();
        $userId=$_SESSION['user']['userId'];
        $st1=$db->createCommand("select a.goodsId,a.authorIntro,a.press,a.goodsPrice,a.goodsDiscounted,a.goodsImage,
a.goodsInfo,a.goodsfeatures,a.excerpts,b.carId,b.userId,b.bookId,b.bookCount from eshopinfo a inner join carinfo b on a.goodsId=b.bookId where b.userId=$userId");
        $rs1=$st1->queryAll();
        $totalPrice=0;
        $price=0;
        $disPrice=0;
        foreach ($rs1 as $v){
            $a=$v['bookCount']*$v['goodsPrice']*$v['goodsDiscounted']/100;
            $b=$v['bookCount']*$v['goodsPrice'];
            $totalPrice+=$a;
            $disPrice+=($b-$a);
            if($v['carId']==$carId){
                $price=$a;
            }
        }
        //给ajax返回两个总价
        $data=array(
            'totalPrice'=>$totalPrice,
            'price'=>$price,
            'disPrice'=>$disPrice
        );
        echo json_encode($data);
    }
}
