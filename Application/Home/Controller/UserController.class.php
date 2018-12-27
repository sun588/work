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
        $model = M('user');
        $userInfo = $model->where("id=$this->uid")->field('nickname,headpic')->find();
        $this->assign('userInfo',$userInfo);

        $this->buyerOrderCount();

        //人气产品
        $model = M('product');
        $product = $model->field('id,type,name,pic1,pic2')->order('clicknum desc')->limit(5)->select();
        $this->assign('product',$product);

        //我的收藏
        $model = M('wishlist');
        $model->alias('w');
        $model->join('LEFT JOIN product p ON w.pid=p.id');
        $model->field('p.id,p.type,p.name,p.pic1,p.pic2');
        $wishlist = $model->where("w.uid=$this->uid")->order('w.time desc')->limit(5)->select();
        $this->assign('wishlist',$wishlist);

        $this->assign('empty',"<div style='text-align: center;'>你还没有收藏的商品<a href='" . U('Index/index') . "'>前去逛逛吧！</a></div>");

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

        //评价
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
        $model->alias('o')->field('o.id,o.pid,o.orderNo,o.outTradeNo,o.price,o.num,o.send,o.sendNo,p.name,p.type,p.pic1,u.shopName');
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

    /********************   买方订单   ************************/

    /********************   账户设置   ************************/

    function setting(){
        $model = M('user');
        $model->field('nickname,headpic');
        $userInfo = $model->where("id=$this->uid")->find();
        $this->assign('userInfo',$userInfo);
        $this->display();
    }

    function saveSetting(){
        $model = M('user');
        $model->create();
        $model->id = $this->uid;
        $rs = $model->save();
        if($rs){
            f_return(1,'设置成功');
        }else{
            f_return(4001,'设置失败');
        }
    }

    /********************   账户设置   ************************/


    /********************   评价管理   ************************/
    //订单评价
    function saveEvaluate(){
        $data = I();
        if(!$data['orderID']){
            f_return(4001,'订单不存在');
            return;
        }
        if(!$data['content']){
            f_return(4001,'评价内容不能为空');
            return;
        }
        $model = M('evaluate');
        if($model->where('orderID='.$data['orderID'])->count() > 0){
            f_dump(4001,'你已对该订单发布过评价');
            return;
        }

        $model = M('orders');
        $order = $model->where('id='.$data['orderID'])->field('pid,supplierID')->find();

        $data['buyerID'] = $this->uid;
        $data['supplierID'] = $order['supplierid'];
        $data['productID'] = $order['pid'];
        $data['time'] = time();

        $model = M('evaluate');
        $rs = $model->add($data);
        if($rs){
            $model = M('orders');
            $rs = $model->where('id='.$data['orderID'])->setField('send',4);
            if($rs){
                f_return(1,'评价成功');
            }else{
                f_return(4001,'评价失败');
            }
        }else{
            f_return(4001,'评价失败');
        }
    }

    function evaluate(){
        if(IS_AJAX){
            $draw = I('post.draw');
            $start = I('post.start');
            $length = I('post.length');
            $search = I('post.search'); //数组 搜索值：search[value]   是否启用正则处理：search[regex]
            $order = I('post.order'); //数组 排序列order[i][column]  排序方式order[i][dir]
            $columns = I('post.columns');//数组
            // columns[i][data]          columns 绑定的数据源
            // columns[i][name]          columns 的名字
            // columns[i][searchable]    标记列是否能被搜索
            // columns[i][orderable]     标记列是否能排序
            //columns[i][search][value]  标记具体列的搜索条件
            //columns[i][search][regex]  是否启用正则

            $where = "e.buyerID=$this->uid";
            $model = M('evaluate');
            $model->alias('e');
            $total = $model->where($where)->count();

            $model->alias('e');
            $model->join('LEFT JOIN product p ON p.id=e.productID');
            $model->field('e.id,e.content,e.time,p.name,p.pic1');
            $data = $model->where($where)->limit("$start,$length")->select();

            //数据绑定
            //DT_RowId //每个tr上绑定id
            //DT_RowClass //每个tr上绑定class
            //DT_RowAttr 调用jquery.attr()
            for($i = 0; $i <count($data); $i++){
                $data[$i]['time'] = date('Y-m-d',$data[$i]['time']);
                $data[$i]['DT_RowId'] = $data[$i]['id'];
            }

            $returnData = array(
                'draw' => $draw,
                'recordsTotal' => $total,      //数据库数据总记录数
                'recordsFiltered' => $total,   //过滤后的数据总记录数
                'data' => $data,              //数据
                //'error' => '获取数据失败',     //错误提示
            );

            exit( json_encode($returnData) );
        }else{
            $this->display();
        }
    }
    /********************   评价管理   ************************/

    /********************售后********************************/
    function shouhou(){
        $this->assign('id',I('get.id'));
        $this->display();
    }

    //保存售后服务
    function saveCustomerService(){
        $model = M('orders');
        $orderID = I('post.orderID');
        if($model->where("id=$orderID and buyID=$this->uid")->count() < 1){
            $this->error('请求提交失败,请稍后再试');
            return;
        }

        $model = M('customerservice');
        $model->create();
        $model->sendTime = time();
        if($model->add()){
            $this->success('提交成功,等待商家处理');
        }else{
            $this->error('请求提交失败,请稍后再试');
        }
    }

    function customerList(){
        $where = "o.buyID=$this->uid";

        if(I('orderNo')){
            $where .= " and o.orderNo=" . I('orderNo');
        }

        $model = M('customerservice');
        $model->alias('c');
        $model->join('left join orders o ON c.orderID=o.id');
        $count = $model->where($where)->count();

        $Page = new \Think\Page($count,10);
        $show = $Page->show();

        $model->alias('c');
        $model->join('left join orders o ON c.orderID=o.id')->join('left join product p on o.pid=p.id');
        $model->field('p.name pname,p.type,o.num,o.orderNo,o.address,o.total,c.name,c.phone,c.serviceType,c.id,c.state');
        $data = $model->where($where)->order('sendTime desc')->limit("$Page->firstRow,$Page->listRows")->select();

        for($i = 0; $i < count($data); $i++){
            if($data[$i]['servicetype'] == 1) $data[$i]['servicetype'] = '其他';
            if($data[$i]['servicetype'] == 2) $data[$i]['servicetype'] = '退货/退款';
            if($data[$i]['servicetype'] == 3) $data[$i]['servicetype'] = '换货';
        }

        $this->assign('page',$show);
        $this->assign('data',$data);

        //f_dump($data);exit;

        $this->display();
    }

    function customerResult(){
        $id = I('get.id');

        $model = M('customerservice');
        $rs = $model->where("id=$id")->field('state,reviewTime,supplierContent,buyerContent')->find();

        $this->assign('result',$rs);

        $this->display();
    }
    /********************售后********************************/
}