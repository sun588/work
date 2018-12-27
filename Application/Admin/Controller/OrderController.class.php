<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends Controller {
    function getThumpPic($file){
        $pathInfo = pathinfo($file);
        return $thumbPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . 'thump.' . $pathInfo['extension'];
    }

    public function order(){
        $this->display();
    }

    public function getOrder(){
        if(IS_AJAX){
            //获取数据
            $data = $_POST;
            $draw = empty($data['draw']) ? '' : $data['draw'];
            $start = $data['start'];
            $length = empty($data['length']) ? '' : $data['length'];
            $search = empty($data['search']['value']) ? '' : trim($data['search']['value']);
            $order = empty($data['order']) ? '' : $data['order'];

            //拼接查询条件
            $where = " o.payType=2 ";
            if($search){
                $where .= " and (o.orderNo='$search' or o.outTradeNo='$search')  ";
            }

            if(I('post.send')){
                $where .= " and o.send=" . I('post.send');
            }

            $model = M('orders');

            //查总记录数
            $model->alias('o');
            $recordsTotal = $model->where($where)->count('id');

            //查数据
            $model->alias('o');
            $model->join('left join product p ON p.id=o.pid');
            $model->field('o.id,o.outTradeNo,o.orderNo,o.time,o.total,o.send,p.pic1,p.name');
            $rs = $model->where($where)->order("o.time desc")->limit("{$start},{$length}")->select();

            //循环处理数据
            for($i = 0; $i < count($rs); $i++){
                $rs[$i]['time'] = date('Y-m-d');
                $rs[$i]['pic'] = $this->getThumpPic($rs[$i]['pic1']);
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

    //===========================================================
    //提现
    //===========================================================

    function tixian(){
        $this->display();
    }

    function getTixian(){
        if(IS_AJAX){
            //获取数据
            $data = $_POST;
            $draw = empty($data['draw']) ? '' : $data['draw'];
            $start = $data['start'];
            $length = empty($data['length']) ? '' : $data['length'];
            $search = empty($data['search']['value']) ? '' : trim($data['search']['value']);
            $order = empty($data['order']) ? '' : $data['order'];

            //拼接查询条件
            $finshed = I('post.finshed') ? I('post.finshed') : 2;
            $where = " o.payType=2 and o.finshed=$finshed";
            if($search){
                $where .= " and (o.orderNo='$search' or o.outTradeNo='$search') ";
            }

            $model = M('orders');

            //查总记录数
            $model->alias('o');
            $recordsTotal = $model->where($where)->count('id');

            //查数据
            $model->alias('o');
            $model->join('left join product p ON p.id=o.pid')->join('left join user u ON u.id=o.supplierID');
            $model->field('o.id,o.outTradeNo,o.orderNo,o.time,o.total,o.finshed,p.pic1,p.name,u.user,u.alipay,u.alipayname');
            $rs = $model->where($where)->order("o.time desc")->limit("{$start},{$length}")->select();

            //循环处理数据
            for($i = 0; $i < count($rs); $i++){
                $rs[$i]['time'] = date('Y-m-d');
                $rs[$i]['pic'] = $this->getThumpPic($rs[$i]['pic1']);
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

    function passTixian(){
        $id = I('post.id');
        $model = M('orders');
        $rs = $model->where("id=$id and finshed=2 and send in(3,4)")->setField('finshed',3);
        if($rs){
            f_return(1,'提现成功');
        }else{
            f_return(4001,'提现失败');
        }
    }
}