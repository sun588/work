<?php
namespace Home\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->assign('headerCategory',$this->headerCategory);
        $this->assign('headPic',$this->headPic());
        $this->assign('newProduct',$this->newProduct());
        $this->assign('discountProduct',$this->discountProduct());
        $this->assign('brandCommend',$this->brandCommend());
        $this->display();
    }

    /*轮播图 3张*/
    public function headPic(){
        $model = M('picture');
        return $model->field('name,link,pic')->where('type=1 and state=1')->order('od desc')->limit(3)->select();
    }

    /*广告图*/
    public function adPic(){
        $model = M('picture');
        return $model->field('name,link,pic')->where('type=2 and state=1')->order('od desc')->limit(3)->select();
    }

    /*最新产品*/
    public function newProduct(){
        $model = M('product');
        $rs = $model->where('state=1')->field('id,name,type,pic1')->order('time desc')->limit(8)->select();
        for($i = 0; $i < count($rs); $i++){
            $rs[$i]['pic1'] = $this->getThumpPic($rs[$i]['pic1']);
        }
        return array_chunk($rs,4);
    }

    /*今日优惠产品*/
    public function discountProduct(){
        $model = M('product');
        $rs = $model->where('state=1 and isdiscount=1')->field('id,name,type,pic1,pic2,discount')->order('od desc')->limit(10)->select();
        for($i = 0; $i < count($rs); $i++){
            $rs[$i]['pic1'] = $this->getThumpPic($rs[$i]['pic1']);
            $rs[$i]['pic2'] = $this->getThumpPic($rs[$i]['pic2']);
        }
        return $rs;
    }

    /*大品牌推荐*/
    public function brandCommend(){
        $returnArr = array();
        $model = M('brand');
        for($i = 1; $i < 6; $i++){
            $rs = $model->field('id,cid,name,pic')->where("cid=$i")->select();
            $returnArr[] = $rs;
        }
        return $returnArr;
    }

}