<?php
namespace Home\Controller;
class OrderController extends CommonController {
    /*购物车购买时候生成的单子*/
    function order(){
        $data = $_POST;
        $orderInfo = array();
        foreach($data as $v){
            $v = json_decode($v,true);
            $singleOrder = $this->getOrderInfo($v['cid']);
            $singleOrder['product']['num'] = $v['num'];
            $orderInfo[] = $singleOrder;
        }
        $this->assign('orderInfo',$orderInfo);
        //f_dump($orderInfo);exit;
        $this->display();
    }

    /*直接购买时候生成的单子*/
    function order1(){
        $uid = $this->isLogin();
        $data = I();
        $orderInfo = array();
        $singleOrder = $this->getOrderInfo($data['oid'],$data['pid'],$uid);
        $singleOrder['product']['num'] = $data['quantity'];
        $orderInfo[] = $singleOrder;
        $this->assign('orderInfo',$orderInfo);
        $this->display('order');
    }

    /*购物车购买时候的单子详情*/
    function getOrderInfo($cid){
        $returnArr = array();

        /*购物车信息*/
        $model = M('cart');
        $cartInfo = $model->field('pid,uid,oid')->where("id=$cid")->find();
        $returnArr['cart'] = $cartInfo;

        //获取商品信息
        $model = M('product');
        $productInfo = $model->field('id,name,pic1,type')->where('id='.$cartInfo['pid'])->find();
        $returnArr['product'] = $productInfo;

        //获取报价信息
        $model = M('offer');
        $offerInfo = $model->field('uid,pid,price')->where('id='.$cartInfo['oid'])->find();
        $returnArr['offer'] = $offerInfo;

        //获取购买人收货地址
        $model = M('address');
        $addressInfo = $model->where('uid='.$cartInfo['uid'])->order('isdefault desc')->limit(3)->select();
        $returnArr['address'] = $addressInfo;

        return $returnArr;
    }

    /*直接购买时候的单子详情*/
    function getOrderInfo1($oid,$pid,$uid){
        $returnArr = array();

        //获取商品信息
        $model = M('product');
        $productInfo = $model->field('id,name,pic1,type')->where("id=$pid")->find();
        $returnArr['product'] = $productInfo;

        //获取报价信息
        $model = M('offer');
        $offerInfo = $model->field('uid,pid,price')->where("id=$oid")->find();
        $returnArr['offer'] = $offerInfo;

        //获取购买人收货地址
        $model = M('address');
        $addressInfo = $model->where("uid=$uid")->order('isdefault desc')->limit(3)->select();
        $returnArr['address'] = $addressInfo;

        return $returnArr;
    }
}