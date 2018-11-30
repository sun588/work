<?php
namespace Home\Controller;
use Think\Think;

class BusinessuserController extends CommonController {
    private $uid = '';
    function __construct()
    {
        parent::__construct();
        $this->uid = $this->isLogin();

        //判断账号类型是否为商家

        //判断商家账号是否通过审核

        $this->leftBarCount();
    }

    function businessUser(){
        $this->display();
    }

    function leftBarCount(){
        $model = M('offer');
        $offerCount = $model->where('uid='.$this->uid)->count();
        $this->assign('offerCount',$offerCount);
    }


    /********************* 商家报价模块  ******************/
    function offer(){
        $search = I('search');

        $where = 'o.uid='.$this->uid;
        if($search){
            $where .= " and p.name like '%$search%' or p.type like '%$search%' ";
        }

        $model = M('offer');
        $model->alias('o');
        $model->join('LEFT JOIN product p ON o.pid = p.id');
        $count = $model->where($where)->count();
        $page = new \Think\Page($count,30);
        $show = $page->show();

        $model->alias('o');
        $model->join('LEFT JOIN product p ON o.pid = p.id');
        $model->where($where);
        $model->field('o.id,o.price,o.info,p.name,p.type,p.pic1');
        $data = $model->limit($page->firstRow . ',' . $page->listRows)->select();

        $this->assign('page',$show);
        $this->assign('data',$data);

        $this->display();
    }

    function addOffer(){
        //查询出所有的品牌
        $model = M('brand');
        $brand = $model->field('id,name')->order('id desc')->select();
        $this->assign('brand',$brand);

        $this->display();
    }

    function setOffer(){
        $model = M('offer');
        $where = 'pid=' . I('post.pid') . ' and uid=' . $this->uid;
        if($model->where($where)->count() > 0){
            f_return('4001','该产品你已经报过价格');
            return;
        }
        if(I('post.price') <= 0){
            f_return('4002','请填写正确的价格');
            return;
        }
        if(!$this->uid){
            f_return(4002,'你的登录信息已过期,请先登录');
            return;
        }
        $model->create();
        $model->time = time();
        $model->uid = $this->uid;
        $rs = $model->add();
        if($rs){
            f_return(1,'报价成功');
        }else{
            f_return(4002,'报价失败');
        }
    }

    //根据选择的品牌查询出 对应的2级分类
    function getCategory2(){
        $bid = I('post.bid');
        $model = M('product');
        $c2 = $model->field('c2')->where("brand=$bid")->group('c2')->select();

        $c2ID = array();
        foreach($c2 as $v){
            $c2ID[] = $v['c2'];
        }
        $c2ID = implode(',',$c2ID);

        if($c2ID){
            $model = M('category');
            $category2 = $model->field('id,name')->where("id in($c2ID)")->select();
            if($category2){
                exit(json_encode($category2));
            }else{
                exit();
            }
        }else{
            exit();
        }
    }

    function getChildCategory(){
        $cid = I('post.cid');
        $model = M('category');
        $c = $model->field('id,name')->where("pid=$cid")->select();
        if($c){
            exit(json_encode($c));
        }else{
            exit();
        }
    }

    function getProduct(){
        $model = M('offer');
        $offer = $model->field('pid')->where('uid='.$this->uid)->select();
        $offerPID = array();
        foreach($offer as $v){
            $offerPID[] = $v['pid'];
        }

        $cid = I('post.cid');
        $model = M('product');
        $p = $model->field('id,name,type,pic1')->where("c3=$cid and state=1")->select();

        /*过滤已经报价的记录*/
        for($i = 0; $i < count($p); $i++){
            if( in_array($p[$i]['id'],$offerPID) ){
                unset($p[$i]);
            }
        }

        if($p){
            exit(json_encode($p));
        }else{
            exit();
        }
    }

    function delOffer(){
        $id = I('post.id');
        $model = M('offer');
        $rs = $model->where("id=$id and uid=".$this->uid)->delete();
        if($rs){
            f_return(1,'success');
        }else{
            f_return(4001,'删除失败');
        }
    }
    /********************* 商家报价模块  ******************/

}