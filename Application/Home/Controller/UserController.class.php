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
        $model = M('wishlist');
        $model->alias('w')->join('LEFT JOIN product p ON w.pid=p.id');
        $wishlistCount = $model->where('p.state=1 and w.uid='.$this->uid)->count();
        $this->assign('wishlistCount',$wishlistCount);

        $model = M('cart');
        $model->alias('c')->join('LEFT JOIN product p ON c.pid=p.id');
        $cartCount = $model->where('p.state=1 and c.uid='.$this->uid)->count();
        $this->assign('cartCount',$cartCount);
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
}