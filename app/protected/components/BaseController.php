<?php
class BaseController extends Controller
{
    private  $result;
    public $typesRows;
    public $navbar;
    public function init()
    {
        $this->layout="//layouts/bookStore";
        $eshopTypes=Eshoptypes::getInstant();
        $this->result=$eshopTypes->findAll("pid>=0");
        $this->navbar=$eshopTypes->findAll("pid<0");
        foreach ($this->result as $k=>$v){
        $this->typesRows[$k]=array(
                'typeId'=>$v['typeId'],
                'typeName'=>$v['typeName'],
                'pid'=>$v['pid'],
                'level'=>$v['level'],
                'isDel'=>$v['isDel'],
            );
        }
        $this->typesRows=$this->meau($this->typesRows);
    }
    /**
     * 关联数组读取导航栏
     * @param unknown $data 查询一个表的数据集
     * @param number $pid   即  typeId自增长Id
     */
    private function meau($data,$pid = 0)
    {
     $tree = '';
        foreach($data as $k => $v)
        {
           if($v['pid'] == $pid)
           {         //父亲找到儿子
            $v['son'] =$this->meau($data, $v['typeId']);
            $tree[] = $v;
            //unset($data[$k]);
           }
        }
     return $tree;
    }
}