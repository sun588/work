<?php
namespace Home\Controller;
class OrderController extends CommonController {
    function order(){
        $data = $_POST;
        $orderInfo = array();
        foreach($data as $v){
            $v = json_decode($v,true);
            $orderInfo[] = $this->getOrderInfo($v['cid']);
        }
        f_dump($orderInfo);exit;
        $this->display();
    }

    function getOrderInfo($cid){
        $returnArr = array();

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
}