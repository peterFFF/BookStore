<?php
class Userinfo extends CActiveRecord
{
    public static function getInstant(){
        return new Userinfo();
    }
    public function tableName()
    {
        return "userinfo";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
