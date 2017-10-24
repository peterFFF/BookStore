<?php
session_start();
class LoginController extends Controller{
    public function actionIndex() {
        $this->renderPartial("index");
    }
    public function actionLogin(){
        $userName=$_POST['userName'];
        $password=$_POST['password'];
        //$userName=addcslashes($userName,"'");
        //htmlentities($userName);
        $pattern="/\s/";
        $res=preg_match_all($pattern, $userName);
        if($res<1){
            $db=Yii::app()->db;
            $st=$db->createCommand("select * from manager where userName='$userName' and password='$password'");
            $rs=$st->queryRow($st);
            if($rs>0){
                $this->layout=false;
                $_SESSION['adminName']=$userName;
                $this->render('../index/success',array(
                    'message'=>'登陆成功',
                    'jumpUrl'=>APP."/admin/index/index",
                    'waitSecond'=>'5'
                ));
            }else{
                $this->layout=false;
                $this->render('../index/success',array(
                    'message'=>'登陆失败',
                    'jumpUrl'=>APP."/admin/login/index",
                    'waitSecond'=>'5'
                ));
            }
        }else{
            $this->layout=false;
            $this->render('../index/success',array(
                'message'=>'登陆失败',
                'jumpUrl'=>APP."/admin/login/index",
                'waitSecond'=>'5'
            ));
        }
    }
    public function actionQuit(){
        $_SESSION=array();
        $this->redirect(APP."/admin/login/index");
    }
}