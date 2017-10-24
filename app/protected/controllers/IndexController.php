<?php
session_start();
class IndexController extends BaseController{
    public function actionIndex() {
        $eshopInfo=Eshopinfo::getInstant();
        $banner=$eshopInfo->findAll(
            array(
              'condition'=>"isDel=0 and isImage=1 and goodsImage !=''",
              'order'=>'dateandtime desc',
              'limit'=>'6',
              'offset'=>'0',
            )
        );
        $isStories=$eshopInfo->findAll(
            array(
                'condition'=>"isDel=0 and isStories=1 and goodsImage !=''",
                'order'=>'dateandtime desc',
                'limit'=>'5',
                'offset'=>'0',
            )
        );
        $isNature=$eshopInfo->findAll(
            array(
                'condition'=>"isDel=0 and isNature=1 and goodsImage !=''",
                'order'=>'dateandtime desc',
                'limit'=>'5',
                'offset'=>'0',
            )
        );
        $isspeed=$eshopInfo->findAll(
            array(
                'condition'=>"isDel=0 and isspeed=1 and goodsImage !=''",
                'order'=>'dateandtime desc',
                'limit'=>'5',
                'offset'=>'0',
            )
        );
        $literature=$eshopInfo->findAll(
           array(
               'condition'=>"isDel=0  and goodsImage !=''",
               'order'=>'dateandtime desc',
               'limit'=>'5',
               'offset'=>'0',
           )
        );
        $db=YII::app()->db;
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE isDel=0 AND goodsImage!='' ORDER BY (SELECT COUNT(*) FROM reviews WHERE reviews.`goodsId`=eshopinfo.`goodsId` ) DESC  LIMIT 0,5;");
        $obj=$st->query();
        $hotComment=$obj->readAll();
        
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE isDel=0 AND goodsImage!='' ORDER BY (SELECT COUNT(*) FROM reviews WHERE reviews.`goodsId`=eshopinfo.`goodsId` ) DESC  LIMIT 5,5;");
        $obj=$st->query();
        $hotComment1=$obj->readAll();
        
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE DATEDIFF(NOW(),eshopinfo.`dateandtime`)<=10  limit 0,5");
        $obj=$st->query();
        $specialOffer=$obj->readAll();
        
        $st=$db->createCommand("SELECT * FROM eshopinfo  WHERE eshopinfo.`isDel`=0 AND eshopinfo.`goodsImage` !='' AND typeId IN(SELECT typeId FROM eshoptypes WHERE typeName='淘书团' ) limit 0,8");
        $obj=$st->query();
        $hotTeam=$obj->readAll();
        /**
         * 点击排行
         */
        //文学点击量排行
        $st=$db->createCommand("
            SELECT * FROM eshopinfo AS e 
 WHERE e.isDel=0 AND e.`goodsImage` !='' AND e.`typeId`=1 OR e.typeId  IN (SELECT typeId FROM eshoptypes WHERE pid=1) 
 OR e.typeId IN(SELECT typeId FROM eshoptypes WHERE typeId IN (SELECT typeId FROM eshoptypes WHERE pid=1) )
 ORDER BY (SELECT COUNT(*) FROM eshophints b WHERE e.`goodsId`=b.`goodsId`) limit 0,8
        ");
        $obj=$st->query();
        $hitsstore=$obj->readAll();
        //社科排行榜
        $st=$db->createCommand("
            SELECT * FROM eshopinfo AS e
 WHERE e.isDel=0 AND e.`goodsImage` !='' AND e.`typeId`=2 OR e.typeId  IN (SELECT typeId FROM eshoptypes WHERE pid=2)
 OR e.typeId IN(SELECT typeId FROM eshoptypes WHERE typeId IN (SELECT typeId FROM eshoptypes WHERE pid=2) )
 ORDER BY (SELECT COUNT(*) FROM eshophints b WHERE e.`goodsId`=b.`goodsId`) limit 0,8
        ");
        $obj=$st->query();
        $soctiy=$obj->readAll();
        //少儿图书排行
        $st=$db->createCommand("
            SELECT * FROM eshopinfo AS e
 WHERE e.isDel=0 AND e.`goodsImage` !='' AND e.`typeId`=3 OR e.typeId  IN (SELECT typeId FROM eshoptypes WHERE pid=3)
 OR e.typeId IN(SELECT typeId FROM eshoptypes WHERE typeId IN (SELECT typeId FROM eshoptypes WHERE pid=3) )
 ORDER BY (SELECT COUNT(*) FROM eshophints b WHERE e.`goodsId`=b.`goodsId`) limit 0,8
        ");
        $obj=$st->query();
        $chilrend=$obj->readAll();
        /**
         * 文学         *
         */
        //总榜
        $st=$db->createCommand(" SELECT * FROM eshopinfo a inner JOIN storage as b on a.goodsId=b.goodsId ORDER BY b.sale DESC limit 0,10");
        $obj=$st->query();
        $total=$obj->readAll();
        //文学
        $st=$db->createCommand(" SELECT * FROM eshopinfo WHERE typeId=1 OR typeId IN (SELECT typeId FROM eshoptypes WHERE pid =1) LIMIT 0,10;");
        $obj=$st->query();
        $wenxue=$obj->readAll();
        //小说
        $st=$db->createCommand(" SELECT * FROM eshopinfo WHERE typeId=7 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`pid` =7) LIMIT 0,10;");
        $obj=$st->query();
        $store=$obj->readAll();
        //外国散文
        $st=$db->createCommand(" SELECT * FROM eshopinfo WHERE typeId=10 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`pid` =10) LIMIT 0,10;");
        $obj=$st->query();
        $foreignProse=$obj->readAll();
        //悬疑推理
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=11 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`pid` =11) LIMIT 0,10;");
        $obj=$st->query();
        $suspe=$obj->readAll();
        //青年文学
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=8 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`pid` =8) LIMIT 0,10;");
        $obj=$st->query();
        $qingnian=$obj->readAll();
        /**
         * 社会图书
         * @var unknown
         */
        //历史
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=15 OR typeId IN (SELECT typeId FROM eshoptypes WHERE pid =15) LIMIT 0,10;");
        $obj=$st->query();
        $histroy=$obj->readAll();
        //传记
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=19 OR typeId IN (SELECT typeId FROM eshoptypes WHERE pid =19) LIMIT 0,10;");
        $obj=$st->query();
        $biography=$obj->readAll();
        //古籍
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=21 OR typeId IN (SELECT typeId FROM eshoptypes WHERE pid =21) LIMIT 0,10;");
        $obj=$st->query();
        $ancientBook=$obj->readAll();
        //成功励志
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=24 OR typeId IN (SELECT typeId FROM eshoptypes WHERE pid =24) LIMIT 0,10;");
        $obj=$st->query();
        $success=$obj->readAll();
        
        /**
         * 少儿图书
         */
        //中国儿童文学
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=27 OR typeId IN (SELECT typeId FROM eshoptypes WHERE pid =27) LIMIT 0,10;");
        $obj=$st->query();
        $cChild=$obj->readAll();
        //外国儿童文学
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=28 OR typeId IN (SELECT typeId FROM eshoptypes WHERE pid =28) LIMIT 0,10;");
        $obj=$st->query();
        $mChild=$obj->readAll();
        //绘图(绘本)
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=30 OR typeId IN (SELECT typeId FROM eshoptypes WHERE pid =30) LIMIT 0,10;");
        $obj=$st->query();
        $drawing=$obj->readAll();
        /**
         * 其他余下
         */
        //艺术
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=4 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`typeId` =4) LIMIT 0,10;");
        $obj=$st->query();
        $art=$obj->readAll();
        //美食
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=39 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`typeId` =39) LIMIT 0,10;");
        $obj=$st->query();
        $goodsFooter=$obj->readAll();
        //旅游
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=41 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`typeId` =41) LIMIT 0,10;");
        $obj=$st->query();
        $tourism=$obj->readAll();
        //保健/心理健康
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=40 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`typeId` =40) LIMIT 0,10;");
        $obj=$st->query();
        $suspense=$obj->readAll();
        //外语
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=45 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`typeId` =45) LIMIT 0,10;");
        $obj=$st->query();
        $language=$obj->readAll();
        //辅导
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=44 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`typeId` =44) LIMIT 0,8;");
        $obj=$st->query();
        $counseling=$obj->readAll();
        //计算机
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=48 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`typeId` =48) LIMIT 0,8;");
        $obj=$st->query();
        $jisuanji=$obj->readAll();
        //医学
        $st=$db->createCommand("SELECT * FROM eshopinfo WHERE typeId=47 OR typeId IN (SELECT typeId FROM eshoptypes WHERE eshoptypes.`typeId` =47) LIMIT 0,8;");
        $obj=$st->query();
        $yixue=$obj->readAll();
        
        $this->render("index",array(
            'banner'=>$banner,
            'total'=>$total,
            'wenxue'=>$wenxue,
            'isStories'=>$isStories,
            'isNature'=>$isNature,
            'isspeed'=>$isspeed,
            'literature'=>$literature,
            'hotComment'=>$hotComment,
            'hotComment1'=>$hotComment1,
            'specialOffer'=>$specialOffer,
            'hotTeam'=>$hotTeam,
            'store'=>$store,
            'foreignProse'=>$foreignProse,
            'suspense'=>$suspe,
            'qingnian'=>$qingnian,
            'histroy'=>$histroy,
            'biography'=>$biography,
            'ancientBook'=>$ancientBook,
            'success'=>$success,
            'cChild'=>$cChild,
            'mChild'=>$mChild,
            'drawing'=>$drawing,
            'art'=>$art,
            'goodsFooter'=>$goodsFooter,
            'tourism'=>$tourism,
            'language'=>$language,
            'counseling'=>$counseling,
            'jisuanji'=>$jisuanji,
            'yixue'=>$yixue,
            'hitsstore'=>$hitsstore,
            'soctiy'=>$soctiy,
            'chilrend'=>$chilrend
        ));
    }
    public function  actionQuit(){
        if($_SESSION['user']['userName']){
            unset($_SESSION['user']);
            $this->redirect(APP."/index/index");
        }
    }

}