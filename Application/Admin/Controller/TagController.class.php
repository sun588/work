<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 13:42
 */
namespace Admin\Controller;
use Think\Controller;

class TagController extends Controller
{
    function tag(){
        $this->display();
    }

    function addKey(){
        $model = D('Tagkey');
        if($model->create()){
            $rs = $model->add();
            f_return('1','success');
        }else{
            f_return('4001',$model->getError());
        }
    }

    function addValue(){
        $model = D('Tagvalue');
        if($model->create()){
            if(I('post.id') > 0){
                $rs = $model->save();
            }else{
                $rs = $model->add();
            }
            f_return('1','success');
        }else{
            f_return('4001',$model->getError());
        }
    }

    function upDataKey(){
        $model = D('Tagkey');
        if($model->create()){
            $rs = $model->save();
            f_return('1','success');
        }else{
            f_return('4001',$model->getError());
        }
    }

    function delKey(){
        $id = I('post.id');
        $model = D('Tagvalue');
        $child = $model->where("keyID=$id")->count();
        if($child > 0){
            f_return('4001','该分类下还有子类无法删除');
            return;
        }

        $model = D('Tagkey');
        $rs = $model->delete($id);
        if($rs){
            f_return('1','success');
        }else{
            f_return('4001','删除失败');
        }
    }

    function delValue(){
        $id = I('post.id');

        $model = D('Tagvalue');
        $rs = $model->delete($id);
        if($rs){
            f_return('1','success');
        }else{
            f_return('4001','删除失败');
        }
    }

    function getTagByCID($cid = ''){
        $cid = $cid === '' ? I('post.cid') : $cid;
        $model = D('Tagkey');
        $key = $model->where("cid=$cid")->field('id,name')->order('od desc')->select();

        $model = D('Tagvalue');
        for($i = 0; $i < count($key); $i++){
            $keyID = $key[$i]['id'];
            $value = $model->where("keyID=$keyID")->field('id,name')->order('od desc')->select();
            $key[$i]['value'] = $value;
        }

        if(IS_AJAX){
            exit(json_encode($key));
        }else{
            return $key;
        }
    }

    function getTagValueByID($id){
        $id = $id === '' ? I('post.id') : $id;
        $model = D('Tagvalue');
        $rs = $model->field('id,name,od')->where("id=$id")->find();
        if(IS_AJAX){
            exit(json_encode($rs));
        }else{
            return $rs;
        }
    }

    function getAllTag(){
        if(IS_AJAX){
            //获取数据
            $data = $_POST;
            $draw = empty($data['draw']) ? '' : $data['draw'];
            $start = $data['start'];
            $length = empty($data['length']) ? '' : $data['length'];
            $search = empty($data['search']['value']) ? '' : $data['search']['value'];
            $order = empty($data['order']) ? '' : $data['order'];

            //拼接查询条件
            $where = " 1=1 ";
            if($search != ''){
                $where .= " and name like '%$search%' ";
            }

            $model = M('Tagkey');
            //查总记录数
            $recordsTotal = $model->where($where)->count('id');

            //查key数据
            $model->join('category ON category.id = tagkey.cid');
            $model->field('tagkey.id,tagkey.name,tagkey.cid,tagkey.od,category.name cname');
            $rs = $model->order('od desc')->where($where)->limit("{$start},{$length}")->select();

            for($i = 0; $i < count($rs); $i++){
                $model = D('Tagvalue');
                $rs[$i]['value'] = $model->getVauleByKey($rs[$i]['id']);
            }

            //组装返回数据
            $returnData = array();
            $returnData['draw'] = $draw;
            $returnData['recordsTotal'] = $recordsTotal;
            $returnData['recordsFiltered'] = $recordsTotal;
            $returnData['data'] = $rs ? $rs : '';
            echo json_encode($returnData);
        }
    }
}