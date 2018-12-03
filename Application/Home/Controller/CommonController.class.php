<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\26 0026
 * Time: 13:27
 */

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller
{
    protected $headerCategory;
    function _initialize(){
        $this->headerCategory = $this->headerCategory();
        $this->headerCart();
        $this->footerPage();
    }

    function headerCategory(){
        $model = D('Category');
        $c1 = $model->where('pid=0')->field('id,name')->order('od desc')->limit(10)->select();

        for($i = 0; $i < count($c1); $i++){
            $c2 = $model->where('pid='.$c1[$i]['id'])->field('id,name')->order('od desc')->limit(3)->select();

            for($j = 0; $j < count($c2); $j++){
                $c3 = $model->where('pid='.$c2[$j]['id'])->field('id,name')->order('od desc')->limit(10)->select();
                $c2[$j]['c3'] = $c3;
            }
            $c1[$i]['c2'] = $c2;
        }
        return $c1;
    }

    function headerCart(){
        $userInfo = session('userInfo');
        if($userInfo['id']){
            $model = M('cart');
            $headerCartCount = $model->where('uid='.$userInfo['id'])->count();

            $model->alias('c');
            $model->join('LEFT JOIN product p ON p.id=c.pid');
            $model->field('p.id,p.name,p.type,p.pic1,c.id');
            $data = $model->where('uid='.$userInfo['id'])->order('c.time desc')->limit(3)->select();

            $this->assign('headerCartCount',$headerCartCount);
            $this->assign('headerCartProduct',$data);
        }else{

        }
    }

    function footerPage(){
        $model = M('page');
        $dataArr = array();
        for($i = 1; $i < 6; $i++){
            $dataArr[$i] = $model->where("type=$i")->order('od desc')->limit(6)->select();
        }
        $this->assign('footerPage',$dataArr);
    }

    function pageDetial(){
        $id = I('get.id');
        $model = M('page');
        $page = $model->where("id=$id")->field('name,content')->find();
        $page['content'] = htmlspecialchars_decode($page['content']);
        $this->assign('page',$page);
        $this->display();
    }

    function isLogin(){
        $userInfo = session('userInfo');
        if(!$userInfo || empty($userInfo['id'])){
            $this->error('你还未登录 请先登录',U('Index/index'));
            return false;
        }else{
            return $userInfo['id'];
        }
    }

    /**
     * @param $file 文件路径
     * @return string
     */
    public function getThumpPic($file){
        if( empty($file) ) return;
        $pathInfo = pathinfo($file);
        return $thumbPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . 'thump.' . $pathInfo['extension'];
    }

    function addCart(){
        $userInfo = session('userInfo');
        $pid = I('post.id');
        $oid = I('post.oid');
        $num = I('post.num') ? I('post.num') : 1;
        if(!$pid){
            f_return('4001','商品不存在');
            return;
        }
        if(!$oid){
            f_return(4001,'请选择一个报价');
            return;
        }
        if(!$userInfo['id']){
            f_return('4002','请先登录');
            return;
        }

        $saveData = array(
            'uid' => $userInfo['id'],
            'pid' => $pid,
            'oid' => $oid,
            'num' => $num,
            'time' => time(),
        );
        $model = M('cart');
        $rs = $model->add($saveData);
        if($rs){
            f_return(1,'添加成功');
        }else{
            f_return('4003','添加失败');
        }
    }

    function delCart(){
        $userInfo = session('userInfo');
        $id = I('post.id');
        if(!$userInfo['id']){
            f_return('4001','请先登录');
            return;
        }

        $model = M('cart');
        $rs = $model->where("id=$id and uid=".$userInfo['id'])->delete();
        if($rs){
            f_return('1','success');
        }else{
            f_return('4002','删除失败');
        }
    }

    function addWishlist(){
        $userInfo = session('userInfo');
        $pid = I('post.id');
        if(!$pid){
            f_return('4001','商品不存在');
            return;
        }
        if(!$userInfo['id']){
            f_return('4002','请先登录');
            return;
        }
        $model = M('wishlist');
        if($model->where("pid=$pid and uid=".$userInfo['id'])->count() > 0 ){
            f_return('4003','该产品你已经收藏');
            return;
        }

        $saveData = array(
            'uid' => $userInfo['id'],
            'pid' => $pid,
            'time' => time(),
        );
        $rs = $model->add($saveData);
        if($rs){
            f_return(1,'添加成功');
        }else{
            f_return('4003','添加失败');
        }
    }

    function delWishlist(){
        $userInfo = session('userInfo');
        $id = I('post.id');
        if(!$userInfo['id']){
            f_return('4001','请先登录');
            return;
        }

        $model = M('wishlist');
        $rs = $model->where("id=$id and uid=".$userInfo['id'])->delete();
        if($rs){
            f_return('1','success');
        }else{
            f_return('4002','删除失败');
        }
    }
}