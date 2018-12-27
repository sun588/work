<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends Controller {
    public function proudct(){
        $this->display();
    }

    function productAdd(){
        if(I('get.id')){
            $model = D('product');
            $product = $model->find(I('get.id'));
            $this->assign('product',$product);
        }else{

        }
        $categoryClass = new CategoryController();
        $rs = $categoryClass->getCategoryByPID(0);
        $this->assign('category',$rs);
        $this->display();
    }

    function save(){
        $product = I();

        $product['isdiscount'] = isset($product['isdiscount']) ? $product['isdiscount'] : 2;
        $product['column1'] = isset($product['column1']) ? $product['column1'] : 2;
        $product['column2'] = isset($product['column2']) ? $product['column2'] : 2;
        $product['column3'] = isset($product['column3']) ? $product['column3'] : 2;
        $product['column4'] = isset($product['column4']) ? $product['column4'] : 2;
        $product['column5'] = isset($product['column5']) ? $product['column5'] : 2;

        $product['column6'] = isset($product['column6']) ? $product['column6'] : 2;
        $product['column7'] = isset($product['column7']) ? $product['column7'] : 2;
        $product['column8'] = isset($product['column8']) ? $product['column8'] : 2;
        $product['column9'] = isset($product['column9']) ? $product['column9'] : 2;

        $product['time'] = time();

        //提取出产品标签
        $productTag = $product['tag'];
        unset($product['tag']);

        //提取出产品属性
        $productAttr = array();
        foreach ($product as $k=>$v){
            if(strpos($k,'attr_') === 0){
                echo strpos('attr_',$k);
                $productAttr[] = $v;
                unset($product[$k]);
            }
        }

        $model = D('Product');
        if($model->create($product)){
            if( isset($product['id']) ){
                if($model->save()){
                    $newProductID = $product['id'];
                    //清空产品的标签
                    $model = D('Producttag');
                    $model->where('pid='.$product['id'])->delete();

                    //清空产品的属性
                    $model = D('Productattr');
                    $model->where('pid='.$product['id'])->delete();
                }else{
                    $this->error('修改产品失败');
                    return;
                }
            }else{
                $newProductID = $model->add();
            }
            //保存产品标签
            if($newProductID && is_array($productTag) && count($productTag) > 0 ){
                $model = D('Producttag');
                foreach ($productTag as $v){
                    $saveData = array(
                        'pid' => $newProductID,
                        'tagValueID' => $v,
                    );
                    $model->add($saveData);
                }
            }

            //保存产品属性
            if($newProductID && is_array($productAttr) && count($productAttr) > 0 ){
                $model = D('Productattr');
                foreach ($productAttr as $v){
                    $saveData = array(
                        'pid' => $newProductID,
                        'attrValueID' => $v,
                    );
                    $model->add($saveData);
                }
            }

            if($newProductID){
                $this->success('保存产品成功');
            }else{
                $this->error('保存产品失败');
            }
        }else{
            $this->error($model->getError());
        }
    }

    function getProduct(){
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
            if($search){
                $where .= " and name like '%$search%' ";
            }
            for($i = 4; $i > 0; $i--){
                if( $data["c$i"] > 0){
                    $where .= " and c$i=" . $data["c$i"];
                    break;
                }
            }
            $model = D('product');

            //查总记录数
            $recordsTotal = $model->where($where)->count('id');

            //查数据
            $model->field('id,pic1,name,type,od,state');
            $rs = $model->where($where)->order("id desc")->limit("{$start},{$length}")->select();

            //循环处理数据
            for($i = 0; $i < count($rs); $i++){
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

    function changeState(){
        $model = D('product');
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

    function del(){
        $id = I('post.id');
        $model = D('Product');
        $imgPath = $model->field('pic1,pic2,pic3,pic4')->find($id);
        if($model->delete($id)){
            //删除产品属性
            $model = D('Productattr');
            $model->where("pid=$id")->delete();

            //删除产品标签
            $model = D('Producttag');
            $model->where("pid=$id")->delete();

            //删除产图片
            foreach ($imgPath as $v){
                if($imgPath){
                    f_fileDel('./' . $v);
                    f_fileDel('./' . $this->getThumpPic($v));
                }
            }
            f_return(1,'success');
        }else{
            f_return(4001,'删除失败');
        }
    }

    function fileUpload(){
        $rs = f_fileUP(C('MAX_FILE_UPLOAD_SIZE'),C('FILE_UPLOAD_TYPE'),C('IMG_SAVE_PATE'),true);
        echo $rs;
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

    function getThumpPic($file){
        $pathInfo = pathinfo($file);
        return $thumbPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . 'thump.' . $pathInfo['extension'];
    }

    function getProductTag($pid){
        $pid = empty($pid) ? I('post.pid') : $pid;

        $model = D('Producttag');
        $rs = $model->field('tagValueID')->where("pid=$pid")->select();

        $reurnData = array();
        foreach ($rs as $v){
            $reurnData[] = $v['tagvalueid'];
        }

        if(IS_AJAX){
            exit(json_encode($reurnData));
        }else{
            return $reurnData;
        }
    }

    function getProductAttr($pid){
        $pid = empty($pid) ? I('post.pid') : $pid;

        $model = D('Productattr');
        $rs = $model->field('attrValueID')->where("pid=$pid")->select();

        $reurnData = array();
        foreach ($rs as $v){
            $reurnData[] = $v['attrvalueid'];
        }

        if(IS_AJAX){
            exit(json_encode($reurnData));
        }else{
            return $reurnData;
        }
    }

    /*给前端编辑产品时候返回产品属性的方法*/
    function getEditAttr($id = ''){
        $id = empty($id) ? I('post.id') : $id;

        //1.获取产品的属性值ID
        $model = D('Productattr');
        $attr_v = $model->where("pid=$id")->field('value')->select();
        $attrID = array();
        foreach ($attr_v as $v){
            $attrID[] = $v['value'];
        }
        //2.属性值ID获取到所有的属性键值ID
        $model = D('Attrvalue');
        $where = 'v.id in(' + implode(',',$attrID) + ')';
        $model->field('k.id,k.name')->join('attrkey k ON k.id=v.keyID');
        $attr_k = $model->alias('v')->where($where)->group('k.id')->select();

        //通过属性键ID 查询出每个键下面的所有属性值
        $model = D('Attrvalue');
        for($i = 0; $i < count($attr_k); $i++){
            $rs = $model->field('id,name')->where('keyID='.$v[$i]['id'])->select();
            $attr_k[$i]['value'] = $rs;
        }

        $returnArr = array(
            'selectedID' => $attr_v,
            'allAttr' => $attr_k,
        );
        if(IS_AJAX){
            exit(json_encode($returnArr));
        }else{
            return $returnArr;
        }
    }


    //==================================================================================
                                    //商品报价管理
    //==================================================================================

    function offer(){
        $this->display();
    }

    function getOffer(){
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
            if($search){
                $where .= " and p.name like '%$search%' ";
            }

            if(I('post.state')){
                $where .= " and o.state=" . I('post.state');
            }

            $model = D('offer');

            //查总记录数
            $model->alias('o');
            $recordsTotal = $model->where($where)->count('id');

            //查数据
            $model->alias('o');
            $model->join('left join product p ON p.id=o.pid')->join('left join user u ON o.uid=u.id');
            $model->field('o.id,o.state,o.price,o.time,p.pic1,p.name,p.type,u.shopName,u.user');
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

    function changeOfferState(){
        $model = M('offer');
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

    function delOffer(){
        $id = I('post.id');
        $model = M('offer');
        if($model->delete($id)){
            f_return(1,'success');
        }else{
            f_return(4001,'删除失败');
        }
    }

    //==================================================================================
    //商品评论管理
    //==================================================================================
    function evaluate(){
        $this->display();
    }

    function evaluateList(){
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
            if($search){
                $where .= " and p.user like '%$search%' ";
            }


            $model = M('evaluate');

            //查总记录数
            $model->alias('e');
            $recordsTotal = $model->where($where)->count('id');

            //查数据
            $model->alias('e');
            $model->join('left join product p ON p.id=e.productID');
            $model->field('e.id,e.content,e.time,p.pic1,p.name');
            $rs = $model->where($where)->order("e.time desc")->limit("{$start},{$length}")->select();

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

    function delEvaluate(){
        $id = I('post.id');
        $model = M('evaluate');
        if($model->delete($id)){
            f_return(1,'success');
        }else{
            f_return(4001,'删除失败');
        }
    }
}