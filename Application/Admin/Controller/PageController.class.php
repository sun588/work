<?php
namespace Admin\Controller;
use Think\Controller;
class PageController extends Controller {
    public function page(){
        $this->display();
    }

    function pageAdd(){
        $id = I('get.id');
        if($id){
            $model = M('page');
            $rs = $model->where("id=$id")->find();
            $this->assign('page',$rs);
        }
        $this->display();
    }

    function save(){
        $data = $_POST;
        if($data['name'] == '' || $data['content'] == ''){
            $this->error('标题和内容必须填写');
            return;
        }

        $model = M('page');
        $model->create();
        if($model->id){
            $rs = $model->save();
        }else{
            unset($model->id);
            $rs = $model->add();
        }

        if($rs){
            $this->success('保存成功');
        }else{
            $this->error('保存失败');
        }
    }

    function getPage(){
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

            $model = M('page');

            //查总记录数
            $recordsTotal = $model->where($where)->count('id');

            //查数据
            $rs = $model->field('id,name,od,type')->where($where)->order("od desc")->limit("{$start},{$length}")->select();

            //组装返回数据
            $returnData = array();
            $returnData['draw'] = $draw;
            $returnData['recordsTotal'] = $recordsTotal;
            $returnData['recordsFiltered'] = $recordsTotal;
            $returnData['data'] = $rs ? $rs : '';
            echo json_encode($returnData);
        }
    }

    function del(){
        $id = I('post.id');
        $model = M('page');
        $rs = $model->delete($id);
        if($rs){
            f_return('1','success');
        }else{
            f_return('4001','删除失败');
        }
    }
}