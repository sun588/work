<?php
namespace Home\Controller;
class UserController extends CommonController {
    function user(){
        $this->display();
    }

    function wishlist(){
        $this->display();
    }

    function myWishlist(){
        $model = M('wishlist');
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
            $model->isdefault = empty($model->isdefault) ? 1 : $model->isdefault;
            $rs = $model->add();
        }
        if($rs){
            f_return(1,'success');
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
    /********************   用户地址管理   ************************/
}