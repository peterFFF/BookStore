<?php
class Manager extends CActiveRecord
{
    public static function getInstant(){
        return new Manager();
    }
    public function tableName()
    {
        return "manager";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
