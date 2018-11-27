<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 13:42
 */
namespace Admin\Controller;
use Think\Controller;

class BrandController extends Controller
{
    function brand(){
        $this->display();
    }

    function add(){
        $saveData = I();
        $rs = f_fileUP(C('MAX_FILE_UPLOAD_SIZE'),C('FILE_UPLOAD_TYPE'),C('IMG_SAVE_PATE'));
        $rs = json_decode($rs,true);
        if($rs['errno'] == 1){
            $saveData['pic'] = $rs['data']['url'];
        }
        $model = D('Brand');
        if($model->create($saveData)){
            if( isset($saveData['id']) && $saveData['id'] > 0 ){
                $rs = $model->save();
            }else{
                $rs = $model->add();
            }
            $this->success('保存成功');
        }else{
            $this->error($model->getError());
        }
    }

    function del(){
        $id = I('post.id');
        $model = D('Brand');
        $rs = $model->delete($id);
        if($rs){
            f_return('1','success');
        }else{
            f_return('4001','删除失败');
        }
    }

    function getBrand(){
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

            $model = D('Brand');

            //查总记录数
            $recordsTotal = $model->where($where)->count('id');

            //查数据
            $rs = $model->field('id,name,pic,cid')->where($where)->order("id desc")->limit("{$start},{$length}")->select();

            //组装返回数据
            $returnData = array();
            $returnData['draw'] = $draw;
            $returnData['recordsTotal'] = $recordsTotal;
            $returnData['recordsFiltered'] = $recordsTotal;
            $returnData['data'] = $rs ? $rs : '';
            echo json_encode($returnData);
        }
    }

    function getAllBrand(){
        $model = D('Brand');
        $rs = $model->field('id,name')->order('id desc')->select();
        if(IS_AJAX){
            exit(json_encode($rs));
        }else{
            return $rs;
        }
    }
}