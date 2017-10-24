<?php
class Roleinfo extends CActiveRecord
{
    public static function getInstant(){
        return new Roleinfo();
    }
    public function tableName()
    {
        return "roleinfo";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
