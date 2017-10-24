<?php
class Navbar extends CActiveRecord
{
    public static function getInstant(){
        return new Navbar();
    }
    public function tableName()
    {
        return "navbar";//完整的表名
        //return "{{}}"//省略了前缀的表名
    }
}
