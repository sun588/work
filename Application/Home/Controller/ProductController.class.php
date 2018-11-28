<?php
namespace Home\Controller;
class ProductController extends CommonController {
    private $where = '';
    private $c1 = '';
    private $c2 = '';
    private $c3 = '';
    private $c4 = '';
    private $bid = '';


    function product(){
        $this->assign('headerCategory',$this->headerCategory);

        $where = $this->getCondition();
        $this->assign('brand',$this->getBrand());

        if($this->c1) $this->assign('category',$this->getChildCategory($this->c1));

        $this->assign('product',$this->getProduct());
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
        //$page = new Think\Page();
        $model = M('product');
        $model->field('id,name,pic1,pic2,type');
        $model->where($this->where);
        $rs = $model->order('od desc')->select();
        return $rs;
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

    function productDetail(){
        $id = I('id');
        $model = M('product');
        $product = $model->where("id=$id")->field('id,name,type,pic1,pic2,pic3,pic4,c1,c2,c3,c4,pcontent,tcontent')->find();

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


        $this->assign('product',$product);
        $this->assign('navigation',$navigation);
        $this->assign('commendPro',$commendPro);
        $this->assign('likePro',$likePro);
        $this->display();
    }
}