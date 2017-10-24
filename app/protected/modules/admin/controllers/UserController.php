<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/31
 * Time: 14:36
 */
class UserController extends Controller {
    public function actionIndex(){
        $db=Yii::app()->db;
        $st=$db->createCommand("select a.userId,a.userName,a.email,b.levelName from userinfo a inner join userlevel b on a.level=b.level");
        $rs=$st->queryAll();
        $this->renderPartial('index',array(
            'rs'=>$rs
        ));
    }
}