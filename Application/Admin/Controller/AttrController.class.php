<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 13:42
 */
namespace Admin\Controller;
use Think\Controller;

class AttrController extends Controller
{
    function attr(){
        $this->display();
    }

    function addKey(){
        $model = D('Attrkey');
        if($model->create()){
            $rs = $model->add();
            f_return('1','success');
        }else{
            f_return('4001',$model->getError());
        }
    }

    function addValue(){
        $model = D('Attrvalue');
        if($model->create()){
            $rs = $model->add();
            f_return('1','success');
        }else{
            f_return('4001',$model->getError());
        }
    }

    function upDataKey(){
        $model = D('Attrkey');
        if($model->create()){
            $rs = $model->save();
            f_return('1','success');
        }else{
            f_return('4001',$model->getError());
        }
    }

    function delKey(){
        $id = I('post.id');
        $model = D('Attrvalue');
        $child = $model->where("keyID=$id")->count();
        if($child > 0){
            f_return('4001','该分类下还有子类无法删除');
            return;
        }

        $model = D('Attrkey');
        $rs = $model->delete($id);
        if($rs){
            f_return('1','success');
        }else{
            f_return('4001','删除失败');
        }
    }

    function delValue(){
        $id = I('post.id');

        $model = D('Attrvalue');
        $rs = $model->delete($id);
        if($rs){
            f_return('1','success');
        }else{
            f_return('4001','删除失败');
        }
    }

    function getAttrByCID($cid = ''){
        $cid = $cid === '' ? I('post.cid') : $cid;
        $model = D('Attrkey');
        $key = $model->where("cid=$cid")->field('id,name')->order('od desc')->select();

        $model = D('Attrvalue');
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

    function getAllAttr(){
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

            $model = M('Attrkey');
            //查总记录数
            $recordsTotal = $model->where($where)->count('id');

            //查key数据
            $model->join('category ON category.id = attrkey.cid');
            $model->field('attrkey.id,attrkey.name,attrkey.cid,attrkey.od,category.name cname');
            $rs = $model->order('od desc')->where($where)->limit("{$start},{$length}")->select();

            for($i = 0; $i < count($rs); $i++){
                $model = D('Attrvalue');
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