<?php
session_start();
class AddController extends Controller{
    public function actionIndex(){
        $db=Yii::app()->db;
        $st=$db->createCommand("select * from eshoptypes");
        $rs=$st->queryAll();
        $adminName=$_SESSION['adminName'];
        $this->renderPartial('index',array(
            'fetchall'=>$rs,
            'adminName'=>$adminName
        ));
    }
    public function actionAdd(){
        if($_FILES['goodsImage']['error']==0){
            $filename=$_FILES['goodsImage']['name'];
            $ext=substr($filename,strrpos($filename,'.')+1);
            $filename=uniqid(time()).'.'.$ext;
            move_uploaded_file($_FILES['goodsImage']['tmp_name'],BACKSTAGEPublic.$filename);
            /*if($_POST){
                $_POST['goodsImage']=$filename;
                $authorIntro=$_POST['authorIntro'];
                $author=$_POST['author'];
                $press=$_POST['press'];
                $typeId=$_POST['typeId'];
                $directory=$_POST['directory'];
                $goodsInfo=$_POST['goodsInfo'];
                $goodsfeatures=$_POST['goodsfeatures'];
                $excerpts=$_POST['excerpts'];
                $publishingtime=$_POST['publishingtime'];
                $goodsPrice=$_POST['goodsPrice'];
                $goodsDiscounted=$_POST['goodsDiscounted'];
                $isImage=$_POST['isImage'];
                if($_POST['userId']=='admin'){
                    $userId=1;
                }else{
                    $userId=0;
                }
                $goodsImage=$_POST['goodsImage'];
                $db=Yii::app()->db;
                $st=$db->createCommand("INSERT INTO eshopinfo(authorIntro,author,press,typeId,isImage,directory,goodsInfo,goodsfeatures,excerpts,publishingtime,goodsPrice,goodsDiscounted,userId,goodsImage) 
                  VALUES ('$authorIntro', '$author', '$press', '$typeId', '$isImage', '$directory','$goodsInfo','$goodsfeatures','$excerpts', '$publishingtime', '$goodsPrice', '$goodsDiscounted','$userId','$goodsImage')");
                $rs=$st->execute();
                var_dump($rs);
            }*/
            if($_POST){
                $_POST['goodsImage']=$filename;
                $model=Eshopinfo::getInstant();
                $model->authorIntro=$_POST['authorIntro'];
                $model->author=$_POST['author'];
                $model->press=$_POST['press'];
                $model->typeId=$_POST['typeId'];
                $model->directory=$_POST['directory'];
                $model->goodsInfo=$_POST['goodsInfo'];
                $model->goodsfeatures=$_POST['goodsfeatures'];
                $model->excerpts=$_POST['excerpts'];
                $model->publishingtime=$_POST['publishingtime'];
                $model->goodsPrice=$_POST['goodsPrice'];
                $model->goodsDiscounted=$_POST['goodsDiscounted'];
                if(!empty($_POST['isImage'])){
                    $model->isImage=$_POST['isImage'];
                }elseif(!empty($_POST['isStories'])){
                    $model->isStories=$_POST['isStories'];
                }elseif(!empty($_POST['isNature'])){
                    $model->isNature=$_POST['isNature'];
                }elseif(!empty($_POST['isspeed'])){
                    $model->isspeed=$_POST['isspeed'];
                }
                if($_POST['userId']=='admin'){
                    $model->userId=1;
                }else{
                    $model->userId=0;
                }
                $model->goodsImage=$_POST['goodsImage'];
                $rs=$model->save();
                var_dump($rs);
            }
        }

    }
}