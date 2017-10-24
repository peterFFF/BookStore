<?php
class Eshopinfo extends CActiveRecord
{
    public static function getInstant(){
        return new Eshopinfo();
    }
    public function tableName()
    {
        return "eshopinfo";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
