<?php
class Reviews extends CActiveRecord
{
    public static function getInstant(){
        return new Reviews();
    }
    public function tableName()
    {
        return "reviews";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
