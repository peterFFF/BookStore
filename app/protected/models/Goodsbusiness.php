<?php
class Goodsbusiness extends CActiveRecord
{
    public static function getInstant(){
        return new Goodsbusiness();
    }
    public function tableName()
    {
        return "goodsbusiness";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
