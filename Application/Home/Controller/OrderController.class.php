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
        $singleOrder = $this->getOrderInfo1($data['oid'],$data['pid'],$uid);
        $singleOrder['product']['num'] = $data['quantity'];
        $orderInfo[] = $singleOrder;
        //f_dump($orderInfo);exit;
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
        $offerInfo = $model->field('id,uid,pid,price')->where('id='.$cartInfo['oid'])->find();
        $returnArr['offer'] = $offerInfo;

        //获取购买人收货地址
        $model = M('address');
        $addressInfo = $model->where('uid='.$cartInfo['uid'])->order('isdefault desc')->limit(2)->select();
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
        $offerInfo = $model->field('id,uid,pid,price')->where("id=$oid")->find();
        $returnArr['offer'] = $offerInfo;

        //获取购买人收货地址
        $model = M('address');
        $addressInfo = $model->where("uid=$uid")->order('isdefault desc')->limit(2)->select();
        $returnArr['address'] = $addressInfo;

        return $returnArr;
    }

    /*创建总订单-用于买家支付*/
    function createOrder(){

        $uid = $this->isLogin(false);
        $time = time();

        /*交易订单号*/
        $outTradeNo = $time . rand(1000,9999) . $uid;

        if(!$uid){
            f_return('4001','用户不存在,请先登录');
            return;
        }
        //临时订单
        $tempOrder = array();

        $data = I();
        $product = $data['product'];
        foreach ($product as $v){
            $offerID = $v['offerID'];
            $productID = $v['productID'];
            $productNum = $v['productNum'];
            $minTotal = $v['minTotal'];

            //获取报价信息
            $model = M('offer');
            $offerInfo = $model->field('id,uid,price')->where("id=$offerID and pid=$productID")->find();

            //与前端价格进行比较
            if( ($offerInfo['price'] * $productNum) != $minTotal ){
                f_return('4002','订单价格异常');
                return;
            }

            $orderNo = $time . rand(100,999) . $offerInfo['uid'];
            $saveData = array(
                'pid' => $productID,
                'num' => $productNum,
                'price' => $offerInfo['price'],
                'total' => $minTotal,
                'oid' => $offerID,
                'buyID' => $uid,
                'supplierID' => $offerInfo['uid'],
                'time' => $time,
                'order' => $orderNo,
                'outTradeNo' => $outTradeNo,
                'address' => $data['address'],
                'buyuser' => $data['pople'],
                'payType' => $data['payType'],
                'message' => $data['message'],
            );
            $tempOrder[] = $saveData;
        }

        $model = M('orders');

        /*开启事务保证多个订单都能完整的保存到数据表中*/

        $model->startTrans();
        $result = true;
        foreach ($tempOrder as $v){
            $rs = $model->add($v);
            if(!$rs){
                $result = false;
            }
        }
        if($result){
            $model->commit();
            $outTradeInfo = array(
                'order' => $outTradeNo,
                'payType' => $data['payType'],
            );
            f_return('1','success',$outTradeInfo);
        }else{
            $model->rollback();
            f_return('4003','创建订单失败');
        }
    }

    function aliPay(){
        $outTradeNo = I('post.outTradeNo');
        $model = M('orders');
        $model->alias('o');
        $model->join('LEFT JOIN product p ON p.id=o.pid');
        $outTradeInfo = $model->field('o.pid,o.num,o.price,o.total,p.name')->where("o.outTradeNo='$outTradeNo'")->select();

        /*创建支付数据*/
        $out_trade_no = $outTradeNo;
        $total_amount = 0;
        $subject = '';
        $body = '';

        foreach($outTradeInfo as $v){
            $total_amount += $v['total'];
            $subject .= $v['name'] . ',';
        }
        if(mb_strlen($subject,'utf-8') > 250){
            $subject = mb_substr($subject,0,200,'utf-8') . '...';
        }

        /*支付*/
        $payController = new PayController();
        $payController->aliPay($out_trade_no,$subject,$total_amount,$body);
    }

    function wxPay(){
        $outTradeNo = I('post.outTradeNo');
        $model = M('orders');
        $model->alias('o');
        $model->join('LEFT JOIN product p ON p.id=o.pid');
        $outTradeInfo = $model->field('o.pid,o.num,o.price,o.total,p.name')->where("o.outTradeNo='$outTradeNo'")->select();

        /*创建支付数据*/
        $out_trade_no = $outTradeNo;
        $total_amount = 0;
        $subject = '';
        //$body = '';

        foreach($outTradeInfo as $v){
            $total_amount += $v['total'];
            $subject .= $v['name'] . ',';
        }
        if(mb_strlen($subject,'utf-8') > 250){
            $subject = mb_substr($subject,0,200,'utf-8') . '...';
        }


        $notify_url = 'http://www.jingjiamm.com/index.php/Home/Pay/wx_notify';
        $trade_type = 'NATIVE';
        $wx_key = '';
        $wxPay = new PayController();
        $payUrl = $wxPay->wx_pay($out_trade_no,$total_amount * 1000,$subject,$notify_url,$trade_type,$wx_key);

        $payInfo = array(
            'payUrl' => $payUrl,
            'title' => $subject,
            'total' => $total_amount,
        );

        $payUrl = json_decode($payUrl,true);
        if($payUrl['errno'] == 1){
            $payInfo = array(
                'payUrl' => $payUrl['data'],
                'title' => $subject,
                'total' => $total_amount,
            );
            f_return('1','success',$payInfo);
            return;
        }else{
            f_return('4001',$payUrl['msg']);
            return;
        }
    }
}