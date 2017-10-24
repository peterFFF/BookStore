<?php
class Eshoptypes extends CActiveRecord
{
    public static function getInstant(){
        return new Eshoptypes();
    }
    public function tableName()
    {
        return "eshoptypes";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
