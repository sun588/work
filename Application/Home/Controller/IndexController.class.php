<?php
namespace Home\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->assign('headerCategory',$this->headerCategory);
        $this->assign('headPic',$this->headPic());
        $this->assign('newProduct',$this->newProduct());
        $this->assign('discountProduct',$this->discountProduct());
        $this->assign('brandCommend',$this->brandCommend());
        $this->assign('brandList',$this->brandList());


        $datas = array();
        $categoryID = array('6','8','23','1','2');
        $categoryName = array('电脑','手机','大家电','影音娱乐','汽车');
        /*电脑 cid 6*/
        for($i = 0; $i < count($categoryID); $i++){
            $tag = $this->getTag($categoryID[$i]);
            $product = $this->getModelProduct('column' . ($i + 1));
            $tproduct = $this->getProductByTag($tag);
            $tempArr = array(
                'modelName' => $categoryName[$i],
                'modelID' => $categoryID[$i],
                'tag' => $tag,
                'product' => $product,
                'tproduct' => $tproduct
            );
            $datas[] = $tempArr;
        }
        //f_dump($datas);exit;
        $this->assign('datas',$datas);
        //$tag1 = $this->getTag(6);
        //$this->assign('tag1',$tag1);
        //$this->assign('product1',$this->getModelProduct('column1'));
        //$this->assign('tproduct1',$this->getProductByTag($tag1));

        $this->display();
    }

    /*轮播图 3张*/
    public function headPic(){
        $model = M('picture');
        return $model->field('name,link,pic')->where('type=1 and state=1')->order('od desc')->limit(3)->select();
    }

    /*广告图*/
    public function adPic(){
        $model = M('picture');
        return $model->field('name,link,pic')->where('type=2 and state=1')->order('od desc')->limit(3)->select();
    }

    /*最新产品*/
    public function newProduct(){
        $model = M('product');
        $rs = $model->where('state=1')->field('id,name,type,pic1')->order('time desc')->limit(8)->select();
        for($i = 0; $i < count($rs); $i++){
            $rs[$i]['pic1'] = $this->getThumpPic($rs[$i]['pic1']);
        }
        return array_chunk($rs,4);
    }

    /*今日优惠产品*/
    public function discountProduct(){
        $model = M('product');
        $rs = $model->where('state=1 and isdiscount=1')->field('id,name,type,pic1,pic2,discount')->order('od desc')->limit(10)->select();
        for($i = 0; $i < count($rs); $i++){
            $rs[$i]['pic1'] = $this->getThumpPic($rs[$i]['pic1']);
            $rs[$i]['pic2'] = $this->getThumpPic($rs[$i]['pic2']);
        }
        return $rs;
    }

    /*大品牌推荐*/
    public function brandCommend(){
        $returnArr = array();
        $model = M('brand');
        for($i = 1; $i < 6; $i++){
            $rs = $model->field('id,cid,name,pic')->where("cid=$i")->select();
            $returnArr[] = $rs;
        }
        return $returnArr;
    }

    /*页面底部的品牌列表 取前20个*/
    function brandList(){
        $model = M('brand');
        $rs = $model->field('id,name,pic')->order('id desc')->limit(20)->select();
        return $rs;
    }

    /*获取标签*/
    function getTag($cid){
        $model = M('tagkey');
        $tagKey = $model->where("cid=$cid")->field('id,name')->order('od desc')->limit(2)->select();

        $model = M('tagvalue');
        for($i = 0; $i < count($tagKey); $i++){
            $tagValue = $model->where('keyID='.$tagKey[$i]['id'])->field('id,name')->order('od desc')->limit(15)->select();
            $tagKey[$i]['value'] = $tagValue;
        }
        return $tagKey;
    }

    /*获取不同模块的产品*/
    function getModelProduct($column){
        $model = M('product');
        $rs = $model->field('id,pic1,pic2,type,name')->where("$column=1")->order('od desc')->limit(8)->select();
        for($i = 0; $i < count($rs); $i++){
            $rs[$i]['pic1'] = $this->getThumpPic($rs[$i]['pic1']);
            $rs[$i]['pic2'] = $this->getThumpPic($rs[$i]['pic2']);
        }
        return $rs;
    }

    function getProductByTag($tag){
        $returnArr = array();
        $model = M('producttag');
        $len = count($tag) > 2 ? 2 : count($tag);
        for($i = 0; $i < $len; $i++){
            $tagV = $tag[$i]['value'];
            $vlen = count($tagV) > 2 ? 2 : count($tagV);
            for($j = 0; $j < $vlen; $j++){
                $model->alias('t');
                $model->join('LEFT JOIN product p ON t.pid=p.id');
                $model->where('p.state=1 and t.tagValueID='.$tagV[$j]['id']);
                $rs = $model->field('p.id,p.name,p.pic1,p.type')->order('p.od')->limit(6)->select();
                for($k = 0; $k < count($rs); $k++){
                    $rs[$k]['pic1'] = $this->getThumpPic($rs[$k]['pic1']);
                }
                $tempArr['tagName'] = $tagV[$j]['name'];
                $tempArr['product'] = $rs;
                $returnArr[] = $tempArr;
            }
        }
        return $returnArr;
    }

}