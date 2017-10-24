<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/31
 * Time: 10:17
 */
class OrderinfoController extends Controller
{
    public function actionIndex()
    {
        $db = Yii::app()->db;
        $st=$db->createCommand("select * from orderinfo a inner join userinfo b on a.userId=b.userId");
        $rs=$st->queryAll();
        $this->renderPartial('index', array(
            'rs' => $rs
        ));
    }
}