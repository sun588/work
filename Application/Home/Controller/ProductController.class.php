<?php
namespace Home\Controller;
class ProductController extends CommonController {
    private $where = '';
    private $c1 = '';
    private $c2 = '';
    private $c3 = '';
    private $c4 = '';
    private $attrvalue = '';
    private $bid = '';


    function product(){
        $this->assign('headerCategory',$this->headerCategory);

        $where = $this->getCondition();
        $this->assign('brand',$this->getBrand());

        if($this->c3){
            $model = M('category');
            $c2 = $model->where("id=$this->c3")->getField('pid');
            $this->assign('attr',$this->getAttr($c2));
        }else if($this->c2){
            $this->assign('attr',$this->getAttr($this->c2));
        }else if($this->c1){
            $this->assign('category',$this->getChildCategory($this->c1));
        }

        $data = $this->getProduct();
        $this->assign('product',$data['product']);
        $this->display();
    }

    /*产品查询条件*/
    function getCondition(){
        $where = '1=1';
        if(I('c1')){
            $this->c1 = I('c1');
            $where .= ' and c1=' . I('c1');
            $this->assign('c1',I('c1'));
        }
        if(I('c2')){
            $this->c2 = I('c2');
            $where .= ' and c2=' . I('c2');
            $this->assign('c2',I('c2'));
        }
        if(I('c3')){
            $this->c3 = I('c3');
            $where .= ' and c3=' . I('c3');
            $this->assign('c3',I('c3'));
        }
        if(I('c4')){
            $this->c4 = I('c4');
            $where .= ' and c4=' . I('c4');
            $this->assign('c4',I('c4'));
        }
        if(I('bid')){
            $this->bid = I('bid');
            $where .= ' and brand=' . I('bid');
            $this->assign('bid',I('bid'));
        }
        if(I('column6')){
            $where .= ' and column6=' . I('column6');
        }
        if(I('column7')){
            $where .= ' and column7=' . I('column7');
        }
        if(I('column8')){
            $where .= ' and column8=' . I('column8');
        }
        if(I('column9')){
            $where .= ' and column9=' . I('column9');
        }
        if(I('attrvalue')){
            $this->attrvalue = I('attrvalue');
            $model = M('productattr');
            $pid = $model->field('pid')->where("attrValueID=$this->attrvalue")->select();
            $pidArr = array();
            foreach ($pid as $v){
                $pidArr[] = $v['pid'];
            }
            $pid = implode(',',$pidArr);
            $pid = $pid ? $pid : 0;
            $where .= " and id in($pid)";
            $this->assign('attrvalue',I('attrvalue'));
        }
        if(I('searchValue') && I('searchType')){
            $searchV = I('searchValue');
            if(I('searchType') == 1){
                $where .= " and name like '%$searchV%'";
            }else{
                $where .= " and type like '%$searchV%'";
            }
        }
        $this->where = $where;
        return $where;
    }

    function getProduct(){
        $model = M('product');

        $count = $model->where($this->where)->count();
        $page = new \Think\Page($count,25);
        $show = $page->show();

        $model->field('id,name,pic1,pic2,type');
        $model->where($this->where);
        $rs = $model->order('od desc')->limit("$page->firstRow,$page->listRows")->select();

        $returnArr['product'] = $rs;
        $returnArr['page'] = $show;
        return $returnArr;
    }

    function getBrand(){
        $model = M('brand');
        $rs = $model->field('id,name')->order('id desc')->select();
        return $rs;
    }

    function getChildCategory($id){
        $model = M('category');
        $c2 = $model->where("pid=$id")->field('id,name')->order('od desc')->select();
        for($i = 0; $i < count($c2); $i++){
            $c3 = $model->where('pid='.$c2[$i]['id'])->field('id,name')->order('od desc')->select();
            $c2[$i]['c3'] = $c3;
        }
        return $c2;
    }

    function getAttr($c2){
        $model = M('attrkey');
        $attrkey = $model->where("cid=$c2")->order('od desc')->select();

        $model = M('attrvalue');
        for($i = 0; $i < count($attrkey); $i++){
            $attrvalue = $model->where('keyID='.$attrkey[$i]['id'])->order('od desc')->select();
            $attrkey[$i]['value'] = $attrvalue;
        }
        return $attrkey;
    }

    function productDetail(){
        $id = I('id');
        $model = M('product');
        $product = $model->where("id=$id")->field('id,name,type,pic1,pic2,pic3,pic4,c1,c2,c3,c4,pcontent,tcontent')->find();
        $product['pcontent'] = htmlspecialchars_decode($product['pcontent']);
        $product['tcontent'] = htmlspecialchars_decode($product['tcontent']);

        $model = D('Category');
        $navigation = array();
        $c1 = empty($product['c1']) ? '' : $model->getCategoryByID($product['c1']);
        $c2 = empty($product['c2']) ? '' : $model->getCategoryByID($product['c2']);
        $c3 = empty($product['c3']) ? '' : $model->getCategoryByID($product['c3']);
        $c4 = empty($product['c4']) ? '' : $model->getCategoryByID($product['c4']);
        if($c1) $navigation[] = $c1;
        if($c2) $navigation[] = $c2;
        if($c3) $navigation[] = $c3;
        if($c4) $navigation[] = $c4;

        /*推荐产品 取最新的4个产品*/
        $model = M('product');
        $commendPro = $model->field('id,name,type,pic1')->order('time desc')->limit(4)->select();

        /*相关产品 同类目下的产品*/
        $likePro = $model->field('id,name,type,pic1,pic2')->where('c1='.$product['c1'])->limit(10)->select();

        $model = M('offer');
        $model->alias('o');
        $model->join('LEFT JOIN user u ON u.id=o.uid');
        $offer = $model->field('o.id,u.nickname,o.price,o.info')->where("o.pid=$id")->order('o.price')->select();


        $this->assign('product',$product);
        $this->assign('navigation',$navigation);
        $this->assign('commendPro',$commendPro);
        $this->assign('likePro',$likePro);
        $this->assign('offer',$offer);
        $this->assign('minPrice',$offer[0]['price']);
        $this->assign('maxPrice',$offer[count($offer) - 1]['price']);
        $this->display();
    }
}