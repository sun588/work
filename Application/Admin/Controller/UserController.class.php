<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 13:42
 */
namespace Admin\Controller;
use Think\Controller;

class UserController extends Controller
{
    function memberList(){
        $this->display();
    }

    function checkMember(){
        $this->display();
    }

    /*启用或者停用用户*/
    function changeState(){
        $model = M('user');
        $state = I('post.state');
        if($state != 1 && $state != 2){
            f_return('4001','未知的状态');
            return;
        }
        $saveData = array(
            'state' => $state,
        );
        if( $model->where('id='.I('post.id'))->save($saveData) ){
            f_return(1,'success');
        }else{
            f_return(4002,'改变失败');
        }
    }

    function delMember(){
        $id = I('post.id');

        $model = M('user');
        $rs = $model->delete($id);
        if($rs){
            f_return('1','success');
        }else{
            f_return('4001','删除失败');
        }
    }

    function passMember(){
        $model = M('user');
        $ischeck = I('post.ischeck');
        if($ischeck != 1 && $ischeck != 2){
            f_return('4001','未知的状态');
            return;
        }
        $saveData = array(
            'ischeck' => $ischeck,
        );
        if( $model->where('id='.I('post.id'))->save($saveData) ){
            f_return(1,'success');
        }else{
            f_return(4002,'审核失败');
        }
    }

    function getMember(){
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
                $where .= " and user like '%$search%' ";
            }
            if($data['accounttype']){
                $where .= ' and accounttype='.$data['accounttype'];
            }

            $model = M('user');
            //查总记录数
            $recordsTotal = $model->where($where)->count('id');

            //查key数据
            $model->field('id,user,phone,email,province,city,area,address,cardpic1,cardpic2,businesspic,state,time');
            $rs = $model->order('time desc')->where($where)->limit("{$start},{$length}")->select();

            for($i = 0; $i < count($rs); $i++){
                $rs[$i]['time'] = date('Y-m-d',$rs[$i]['time']);
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

    function getCheckMember(){
        if(IS_AJAX){
            //获取数据
            $data = $_POST;
            $draw = empty($data['draw']) ? '' : $data['draw'];
            $start = $data['start'];
            $length = empty($data['length']) ? '' : $data['length'];
            $search = empty($data['search']['value']) ? '' : $data['search']['value'];
            $order = empty($data['order']) ? '' : $data['order'];

            //拼接查询条件
            $where = " accounttype=2 and ischeck=1 ";
            if($search != ''){
                $where .= " and user like '%$search%' ";
            }

            $model = M('user');
            //查总记录数
            $recordsTotal = $model->where($where)->count('id');

            //查key数据
            $model->field('id,user,phone,email,province,city,area,address,cardpic1,cardpic2,businesspic,state,time');
            $rs = $model->order('time desc')->where($where)->limit("{$start},{$length}")->select();

            for($i = 0; $i < count($rs); $i++){
                $rs[$i]['time'] = date('Y-m-d',$rs[$i]['time']);
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