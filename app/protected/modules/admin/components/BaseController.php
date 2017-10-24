<?php
session_start();
class BaseController extends Controller{
    public function init(){
        if(empty($_SESSION)){
            $this->redirect(APP."/admin/login/index");
        }
    }          
}