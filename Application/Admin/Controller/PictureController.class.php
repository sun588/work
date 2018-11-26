<?php
namespace Admin\Controller;
use Think\Controller;
class PictureController extends Controller {
    public function picture(){
        $this->display();
    }

    public function add(){
        if( I('get.id') ){
            $model = D('Picture');
            $pic = $model->field('id,name,od,pic,type,link')->find(I('get.id'));
            $this->assign('picture',$pic);
        }
        $this->display();
    }

    function getPicture(){
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

            $model = D('Picture');

            //查总记录数
            $recordsTotal = $model->where($where)->count('id');

            //查数据
            $rs = $model->field('id,name,od,type,pic,link,state')->where($where)->order("od desc")->limit("{$start},{$length}")->select();

            //组装返回数据
            $returnData = array();
            $returnData['draw'] = $draw;
            $returnData['recordsTotal'] = $recordsTotal;
            $returnData['recordsFiltered'] = $recordsTotal;
            $returnData['data'] = $rs ? $rs : '';
            echo json_encode($returnData);
        }
    }

    function save(){
        $rs = f_fileUP(C('MAX_FILE_UPLOAD_SIZE'),C('FILE_UPLOAD_TYPE'),C('IMG_SAVE_PATE'));
        $rs = json_decode($rs,true);

        $saveData = I();
        if($rs['errno'] == 1){
            $saveData['pic'] = $rs['data']['url'];
        }
        $model = D('Picture');
        if($model->create($saveData)){
            if( isset($saveData['id']) && $saveData['id'] > 0){
                $rs = $model->save();
            }else{
                $rs = $model->add();
            }
            if($rs){
                $this->success('保存成功');
            }else{
                echo $model->_sql();exit;
                $this->error('保存失败');
            }
        }else{
            $this->error($model->getError());
        }
    }

    function getThumpPic($file){
        $pathInfo = pathinfo($file);
        return $thumbPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . 'thump.' . $pathInfo['extension'];
    }

    function delPic(){
        $path = I('post.path');
        $pathInfo = pathinfo($path);
        $thumbPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . 'thump.' . $pathInfo['extension'];
        $fileType = C('FILE_UPLOAD_TYPE');
        if( in_array($pathInfo['extension'],$fileType) ){
            f_fileDel('./' . $path);
            f_fileDel('./' . $thumbPath);
        }
    }

    function changeState(){
        $model = D('Picture');
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
            f_return(4002,'修改失败');
        }
    }

    function del(){
        $id = I('post.id');
        $model = D('Picture');
        $imgPath = $model->where("id=$id")->getField('pic');
        if($model->delete($id)){
            //删除产图片
            if($imgPath){
                f_fileDel('./' . $imgPath);
                f_fileDel('./' . $this->getThumpPic($imgPath));
            }
            f_return(1,'success');
        }else{
            f_return(4001,'删除失败');
        }
    }
}