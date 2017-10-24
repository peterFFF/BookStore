<?php
class Friendlink extends CActiveRecord
{
    public static function getInstant(){
        return new Friendlink();
    }
    public function tableName()
    {
        return "friendlink";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
