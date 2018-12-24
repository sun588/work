<?php
namespace Home\Controller;
use Think\Think;

class UserController extends CommonController {
    private $uid = '';
    function __construct()
    {
        parent::__construct();
        $this->uid = $this->isLogin();

        $this->leftBarCount();
    }

    function user(){
        $this->display();
    }

    function leftBarCount(){
        //收藏夹
        $model = M('wishlist');
        $model->alias('w')->join('LEFT JOIN product p ON w.pid=p.id');
        $wishlistCount = $model->where('p.state=1 and w.uid='.$this->uid)->count();
        $this->assign('wishlistCount',$wishlistCount);

        //购物车
        $model = M('cart');
        $model->alias('c')->join('LEFT JOIN product p ON c.pid=p.id');
        $cartCount = $model->where('p.state=1 and c.uid='.$this->uid)->count();
        $this->assign('cartCount',$cartCount);

        //买方订单
        $model = M('orders');
        $buyOrderCount = $model->where("buyID=$this->uid and payState=2")->count();
        $this->assign('buyOrderCount',$buyOrderCount);

        $model = M('evaluate');
        $evaluateCount = $model->where("buyerID=$this->uid")->count();
        $this->assign('evaluateCount',$evaluateCount);
    }

    function wishlist(){
        $model = M('wishlist');
        $model->alias('w')->join('LEFT JOIN product p ON w.pid=p.id');
        $count = $model->where('p.state=1 and w.uid='.$this->uid)->count();

        $Page = new \Think\Page($count,20);
        $show = $Page->show();

        $model->alias('w')->join('LEFT JOIN product p ON w.pid=p.id');
        $model->field('p.id,p.name,p.type,p.pic1,p.pic2')->order('w.time desc');
        $data = $model->where('p.state=1 and w.uid='.$this->uid)->limit($Page->firstRow .','. $Page->listRows)->select();

        $this->assign('page',$show);
        $this->assign('product',$data);
        $this->display();
    }

    function cart(){
        $model = M('cart');

        $model->alias('c')->join('LEFT JOIN product p ON c.pid=p.id');
        $count = $model->where('p.state=1 and c.uid='.$this->uid)->count();

        $Page = new \Think\Page($count,20);
        $show = $Page->show();

        $model->alias('c')->join('LEFT JOIN product p ON c.pid=p.id');
        $model->join('LEFT JOIN offer o ON o.id=c.oid');
        $model->field('c.id,c.pid,c.oid,c.num,p.pic1,p.name,p.type,o.price');
        $data = $model->where('p.state=1 and c.uid='.$this->uid)->limit($Page->firstRow . ',' . $Page->listRows)->select();
        //f_dump($data);exit;
        $this->assign('page',$show);
        $this->assign('product',$data);

        $this->display();
    }

    function picUp(){
        $rs = f_fileUP(C('MAX_FILE_UPLOAD_SIZE'),C('FILE_UPLOAD_TYPE'),C('IMG_SAVE_PATE'));
        exit($rs);
    }



    /********************   用户地址管理   ************************/
    function address(){
        $uid = $this->isLogin();
        $model = M('address');
        $rs = $model->where("uid=$uid")->order('id desc')->select();
        $this->assign('address',$rs);
        $this->display();
    }

    function addAddress(){
        $uid = $this->isLogin();
        if(!I('post.province') || !I('post.city') || !I('post.area') || !I('post.address')){
            f_return(4001,'请选择收货地址');
            return;
        }
        if(!I('post.name')){
            f_return(4002,'收件人不能为空');
            return;
        }
        if(!I('post.postcode')){
            f_return(4003,'邮编不能为空');
            return;
        }
        if(!I('post.phone') || strlen(I('post.phone')) != 11){
            f_return(4004,'请填写正确的手机号码');
            return;
        }
        $model = D('Address');
        if($model->where("uid=$uid")->count() >= 10){
            f_return(4005,'最多添加10个收货地址');
            return;
        }

        $model->create();
        if(I('post.id') > 0){
            $rs = $model->save();
        }else{
            $model->uid = $uid;
            $model->isdefault = empty($model->isdefault) ? 1 : time();
            $rs = $model->add();
        }
        if($rs){
            f_return(1,'success',$rs);
        }else{
            f_return(4006,'保存收货地址失败');
        }
    }

    function delAddress(){
        $id = I('post.id');
        $model = M('address');
        $rs = $model->delete($id);
        if($rs){
            f_return(1,'删除成功');
        }else{
            f_return(4001,'删除失败');
        }
    }

    function getAddressByID(){
        $id = I('post.id');
        $model = M('address');
        $rs = $model->find($id);
        if($rs){
            f_return(1,'success',$rs);
        }else{
            f_return(4001,'数据不存在');
        }
    }

    function setDefaultAddress(){
        $id = I('post.id');
        $model = M('address');
        $saveData = array(
            'isdefault' => time(),
        );
        $rs = $model->where("id=$id")->save($saveData);
        if($rs){
            if(IS_AJAX){
                f_return('1','设置成功');
                return;
            }else{
                return true;
            }
        }else{
            if(IS_AJAX){
                f_return('4001','设置失败');
                return;
            }else{
                return false;
            }
        }
    }
    /********************   用户地址管理   ************************/


    /********************   买方订单   ************************/
    function buyerOrder(){
        $uid = $this->isLogin();
        $this->buyerOrderCount();

        $model = M('orders');
        $where = " buyID=$this->uid and paystate=2";
//        if(I('get.paystate')){
//            $where = " and paystate=" . I('get.paystate');
//        }

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

    function buyerOrderCount(){
        $uid = $this->isLogin();

        $model = M('orders');

        //全部订单
        $count1 = $model->where("buyID=$uid and paystate=2")->count();
        $this->assign('count1',$count1);

        //待付款订单
        $count2 = $model->where("buyID=$uid and paystate=2")->count;
        $this->assign('count2',$count2);

        //待发货
        $count3 = $model->where("buyID=$uid and paystate=2 and send=1")->count();
        $this->assign('count3',$count3);

        //待收货
        $count4 = $model->where("buyID=$uid and paystate=2 and send=2")->count();
        $this->assign('count4',$count4);

        //待评价订单
        $count5 = $model->where("buyID=$uid and paystate=2 and send=3")->count();
        $this->assign('count5',$count5);

        //完成订单
        $count6 = $model->where("buyID=$uid and paystate=2 and send=4")->count();
        $this->assign('count6',$count6);
    }

    //确认收货
    function checkGoods(){
        $uid = $this->isLogin(false);
        $id = I('post.id');
        $model = M('orders');
        $rs = $model->where("buyID=$uid and id=$id")->setField('send',3);
        if($rs){
            f_return(1,'收货成功');
        }else{
            f_return(4001,'确认收货失败');
        }
    }

    //订单评价
    function saveEvaluate(){
        $data = I('post');
        if(!$data['orderID']){
            f_return(4001,'订单不存在');
            return;
        }
        if(!$data['content']){
            f_return(4001,'评价内容不能为空');
            return;
        }

        $model = M('orders');
        $order = $model->where('id='.$data['orderID'])->field('pid,supplierID')->find();

        $data['buyerID'] = $this->uid;
        $data['supplierID'] = $order['supplierID'];
        $data['productID'] = $order['pid'];
        $data['time'] = time();

        $model = M('evaluate');
        $rs = $model->add($data);
        if($rs){
            f_return(1,'评价成功');
        }else{
            f_return(4001,'评价失败');
        }
    }
    /********************   买方订单   ************************/
}