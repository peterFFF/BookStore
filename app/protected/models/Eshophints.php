<?php
class Eshophints extends CActiveRecord
{
    public static function getInstant(){
        return new Eshophints();
    }
    public function tableName()
    {
        return "eshophints";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
