<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/21
 * Time: 18:49
 */
session_start();
class LoginController extends Controller{
    public function actionIndex(){
        $this->render('index');
    }
    public function actionLogin(){
        $userName=$_POST['userName'];
        $password=$_POST['password'];
        $db=Yii::app()->db;
        $st=$db->createCommand("select userId,userName from userinfo where userName='$userName' and password = '$password'");
        $rs=$st->queryRow($st);
        if($rs){
            $_SESSION['user']=$rs;
            $this->redirect(APP."/index/index");
        }else{
            echo "<script>alert('登陆失败!');location='".APP."/index/index'</script>";
        }
    }
}