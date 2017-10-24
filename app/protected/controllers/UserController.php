<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/31
 * Time: 14:55
 */
session_start();
class UserController extends Controller{
    public function actionIndex(){
        if(empty($_SESSION['user']['userId'])){
            echo "<script>alert('您还未登陆!请登陆!');location='".APP."/index/index'</script>";
        }else{
            $userId=$_SESSION['user']['userId'];
            $db=Yii::app()->db;
            $st=$db->createCommand("select a.userName,a.email,b.levelName from userinfo a inner join userlevel b on a.level=b.level where userId=$userId");
            $rs=$st->queryRow();
            //下方推荐
            $i=rand(27,50);
            $st=$db->createCommand("select * from eshopinfo limit {$i},5");
            $res=$st->queryAll();
            $this->render('index',array(
                'rs'=>$rs,
                'res'=>$res
            ));
        }
    }
    public function actionUp(){
        $userId=$_SESSION['user']['userId'];
        $db=Yii::app()->db;
        $st=$db->createCommand("update userinfo set level=1 where userId=$userId");
        $rs=$st->execute();
        if($rs){
            $this->redirect(APP.'/user/index');
        }

    }
}