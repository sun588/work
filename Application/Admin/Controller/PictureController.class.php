<?php
namespace Admin\Controller;
use Think\Controller;
class PictureController extends Controller {
    public function picture(){
        $this->display();
    }

    public function add(){
        $this->display();
    }

    function save(){
        $rs = f_fileUP(C('MAX_FILE_UPLOAD_SIZE'),C('FILE_UPLOAD_TYPE'),C('IMG_SAVE_PATE'));
        $rs = json_decode($rs,true);
        if($rs['errno'] == 1){
            $saveData = I();
            $saveData['pic'] = $rs['data']['url'];
            $model = D('Picture');
            if($model->create($saveData)){
                if($model->add()){
                    $this->success('上传图片成功');
                }else{
                    echo $model->_sql();exit;
                    $this->error('上传图片失败');
                }
            }else{
                $this->error($model->getError());
            }
        }else{
            $this->error($rs['msg']);
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
}