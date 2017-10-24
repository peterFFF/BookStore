<?php
class IndexController extends BaseController{
    public function actionIndex(){
      
        $this->render("index");
    }
    public function actionSuccess(){
        $this->layout=false;
        $this->renderPartial('success');
    }
}