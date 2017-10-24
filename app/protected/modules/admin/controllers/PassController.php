<?php
/**
 * Created by PhpStorm.
 * User: hzcyPSD
 * Date: 2017/8/16
 * Time: 15:17
 */
class PassController extends Controller {
    public function actionIndex(){
        $this->renderPartial('index');
    }
}