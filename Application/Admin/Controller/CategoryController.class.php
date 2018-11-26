<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 13:42
 */
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends Controller
{
    function category(){
        $this->display();
    }

    function categoryAdd(){
        $this->display();
    }

    function add(){
        $model = D('Category');
        if($model->create()){
            $rs = $model->add();
            f_return('1','success');
        }else{
            f_return('4001',$model->getError());
        }
    }

    function upData(){
        $model = D('Category');
        if($model->create()){
            $rs = $model->save();
            f_return('1','success');
        }else{
            f_return('4001',$model->getError());
        }
    }

    function del(){
        $id = I('post.id');
        $model = D('Category');

        $child = $model->where("pid=$id")->count();
        if($child > 0){
            f_return('4001','该分类下还有子类无法删除');
            return;
        }
        $rs = $model->delete($id);
        if($rs){
            f_return('1','success');
        }else{
            f_return('4001','删除失败');
        }
    }

    function getAllCategory(){
        if(IS_AJAX){
            $model = M('Category');
            $rs = $model->field('id,name,pid,od')->order('od desc')->select();
            exit(json_encode($rs));
        }
    }

    function getCategoryByID(){
        if(IS_AJAX){
            $id = I('post.id');

            $model = M('Category');
            $rs = $model->where("id=$id")->field('id,name,pid,od,note')->find();
            exit(json_encode($rs));
        }
    }

    function getCategoryByPID($pid = ''){
        $pid = $pid === '' ? I('post.pid') : $pid;
        $model = D('Category');
        $rs = $model->where("pid=$pid")->field('id,name')->select();
        if(IS_AJAX){
            exit(json_encode($rs));
        }else{
            return $rs;
        }
    }

    /*查找同分类下的兄弟类*/
    function getBrothersCategory($id){
        //1.通过id查询出父类
        $model = D('Category');
        $pid = $model->where("id=$id")->getField('pid');
        $rs = $model->where("pid=$pid")->select();
        if(IS_AJAX){
            exit(json_encode($rs));
        }else{
            return json_encode($rs);
        }
    }
}