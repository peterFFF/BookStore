<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/31
 * Time: 10:17
 */
class OrderController extends Controller
{
    public function actionIndex()
    {
        $db = Yii::app()->db;
        if(isset($_GET['orderId'])){
            $orderId = $_GET['orderId'];
            $st = $db->createCommand("delete from orderdetails where orderId='$orderId'");
            $st->execute();
        }
        $st = $db->createCommand("select * from orderdetails");
        $rs = $st->queryAll();
        foreach ($rs as $v) {
            $orderId = $v['orderId'];
            $st = $db->createCommand("select a.orderId,a.bookId,b.authorIntro,a.bookCount from orderdetails a inner join eshopinfo b on a.bookId=b.goodsId where orderId='$orderId'");
            $rs = $st->queryAll();
            $i = 0;
            foreach ($rs as $v) {
                if ($v['orderId'] == $orderId) {
                    $arr["$orderId"]["$i"] = array($v['bookId'], $v['bookCount'], $v['authorIntro']);
                    $i++;
                }
            }
        }
        $this->renderPartial('index', array(
            'arr' => $arr
        ));
    }
}