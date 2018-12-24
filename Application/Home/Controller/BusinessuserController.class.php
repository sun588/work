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

        //卖家订单数量
        $model = M('orders');
        $supplierOrdercount = $model->where("supplierID=$this->uid and paystate=2")->count();
        $this->assign('supplierOrdercount',$supplierOrdercount);
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

        //查询出商家已经报过价格的商品ID
        $offer = $model->field('pid')->where('uid='.$this->uid)->select();
        $offerPID = array();
        foreach($offer as $v){
            $offerPID[] = $v['pid'];
        }

        $cid = I('post.cid');
        $bid = I('post.bid');
        $model = M('product');
        $p = $model->field('id,name,type,pic1')->where("c3=$cid and brand=$bid and state=1")->select();

        /*过滤已经报过价格的商品*/
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

    /********************   商家订单   ************************/
    function supplierOrder(){
        $uid = $this->isLogin();
        $this->supplierOrderCount();

        $model = M('orders');
        $where = " supplierID=$this->uid and paystate=2";

        if(I('get.send')){
            $where .= " and send=" . I('get.send');
        }

        $count = $model->where($where)->count();
        $Page = new \Think\Page($count,10);
        if(I('get.send')){
            $Page->parameter['send'] = I('get.send');
        }
        $show = $Page->show();
        $model->alias('o')->field('o.id,o.pid,o.orderNo,o.outTradeNo,o.price,o.num,p.name,p.type,p.pic1,u.shopName');
        $model->join('LEFT JOIN product p ON o.pid=p.id')->join("LEFT JOIN user u ON o.supplierID=u.id");
        $data = $model->where($where)->order('o.time desc')->limit("$Page->firstRow,$Page->listRows")->select();

        //f_dump($data);exit;
        $this->assign('page',$show);
        $this->assign('data',$data);

        $this->display();
    }

    function supplierOrderCount(){
        $uid = $this->isLogin();

        $model = M('orders');

        //全部订单
        $count1 = $model->where("supplierID=$uid and paystate=2")->count();
        $this->assign('count1',$count1);

        //待付款订单
        $count2 = $model->where("supplierID=$uid and paystate=2")->count;
        $this->assign('count2',$count2);

        //待发货
        $count3 = $model->where("supplierID=$uid and paystate=2 and send=1")->count();
        $this->assign('count3',$count3);

        //待收货
        $count4 = $model->where("supplierID=$uid and paystate=2 and send=2")->count();
        $this->assign('count4',$count4);

        //待评价订单
        $count5 = $model->where("supplierID=$uid and paystate=2 and send=3")->count();
        $this->assign('count5',$count5);

        //完成订单
        $count6 = $model->where("supplierID=$uid and paystate=2 and send=4")->count();
        $this->assign('count6',$count6);
    }

    //确认发货
    function checkSendGoods(){
        $uid = $this->isLogin(false);
        $id = I('post.id');
        $sendNo = I('post.sendNo');
        $model = M('orders');
        $rs = $model->where("supplierID=$uid and id=$id")->setField(array('send'=>2,'sendNo'=>$sendNo));
        if($rs){
            f_return(1,'发货成功');
        }else{
            f_return(4001,'发货失败');
        }
    }
    /********************   商家订单   ************************/

}