<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/30
 * Time: 15:34
 */
class RegisterController extends Controller {
    public function actionIndex(){
        $this->render('index');
    }
    public function actionAdd(){
        $userName=$_POST['userName'];
        $password=$_POST['password1'];
        $email=$_POST['email'];
        $db=Yii::app()->db;
        $st=$db->createCommand("insert userinfo(userName,password,email) value ('$userName','$password','$email')");
        $rs=$st->execute();
        if($rs){
            $this->render('../success/index',array(
                'message'=>'注册成功',
                'jumpUrl'=>APP."/index/index"
            ));
        }
    }
}