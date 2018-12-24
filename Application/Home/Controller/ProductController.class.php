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
    private $column1 = '';
    private $column2 = '';
    private $column3 = '';
    private $column4 = '';
    private $column5 = '';
    private $column6 = '';
    private $column7 = '';
    private $column8 = '';
    private $column9 = '';


    function product(){
        $this->assign('headerCategory',$this->headerCategory);

        $this->getCondition();

        if($this->c3){
            $model = M('category');
            $c2 = $model->where("id=$this->c3")->getField('pid');
            $this->assign('attr',$this->getAttr($c2));
        }else if($this->c2){
            $this->assign('attr',$this->getAttr($this->c2));
        }else if($this->c1){
            $this->assign('category',$this->getChildCategory($this->c1));
        }

        //产品数据 已经分页数据
        $data = $this->getProduct();
        $this->assign('product',$data['product']);
        $this->assign('page',$data['page']);

        //产品所拥有的品牌
        if(I('column6') != 1 && I('column7') != 1 && !I('bid')){
            $this->assign('brand',$data['brand']);
        }

        //导航条数据
        $this->getNavigation();

        $this->display();
    }

    /*产品查询条件*/
    function getCondition(){
        $where = '1=1';
        if(I('c1')){
            $this->c1 = I('c1');
            $where .= ' and p.c1=' . I('c1');
            $this->assign('c1',I('c1'));
        }
        if(I('c2')){
            $this->c2 = I('c2');
            $where .= ' and p.c2=' . I('c2');
            $this->assign('c2',I('c2'));
        }
        if(I('c3')){
            $this->c3 = I('c3');
            $where .= ' and p.c3=' . I('c3');
            $this->assign('c3',I('c3'));
        }
        if(I('c4')){
            $this->c4 = I('c4');
            $where .= ' and p.c4=' . I('c4');
            $this->assign('c4',I('c4'));
        }
        if(I('bid')){
            $this->bid = I('bid');
            $where .= ' and p.brand=' . I('bid');
            $this->assign('bid',I('bid'));
        }
        if(I('column6')){
            $where .= ' and p.column6=' . I('column6');
            $this->column6 = I('column6');
        }
        if(I('column7')){
            $where .= ' and p.column7=' . I('column7');
            $this->column7 = I('column7');
        }
        if(I('column8')){
            $where .= ' and p.column8=' . I('column8');
            $this->column8 = I('column8');
        }
        if(I('column9')){
            $where .= ' and p.column9=' . I('column9');
            $this->column9 = I('column9');
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
            $where .= " and p.id in($pid)";
            $this->assign('attrvalue',I('attrvalue'));
        }
        if(I('searchValue') && I('searchType')){
            $searchV = I('searchValue');
            if(I('searchType') == 1){
                $where .= " and p.name like '%$searchV%'";
            }else{
                $where .= " and p.type like '%$searchV%'";
            }
        }
        $this->where = $where;
        return $where;
    }

    function getProduct(){
        $model = M('product');

        $model->alias('p');
        $count = $model->where($this->where)->count();
        $page = new \Think\Page($count,25);
        $show = $page->show();

        $model->alias('p');
        $model->field('id,name,pic1,pic2,type');
        $model->where($this->where);
        $rs = $model->order('od desc')->limit("$page->firstRow,$page->listRows")->select();

        //获取产品的品牌
        $model->alias('p');
        $model->field('b.name,b.id');
        $model->join('left join brand b ON p.brand=b.id');
        $brand = $model->where($this->where)->order('p.od desc')->group('p.brand')->select();

        $returnArr['brand'] = $brand;
        $returnArr['product'] = $rs;
        $returnArr['page'] = $show;
        return $returnArr;
    }

    function getNavigation(){
        $returnArr = array();

        if($this->c1){
            $model = M('category');
            $rs = $model->where("id=$this->c1")->field('id,name')->find();
            $c1['url'] = U('Product/product',array('c1'=>$c1['id']));
            $returnArr[] = $rs;
        }
        if($this->c2){
            $model = M('category');
            $c2 = $model->where("id=$this->c2")->field('id,name,pid')->find();
            $c2['url'] = U('Product/product',array('c2'=>$c2['id']));
            $c1 = $model->where("id=".$c2['pid'])->field('id,name')->find();
            $c1['url'] = U('Product/product',array('c1'=>$c1['id']));
            $returnArr[] = $c1;
            $returnArr[] = $c2;
        }
        if($this->c3){
            $model = M('category');
            $c3 = $model->where("id=$this->c3")->field('id,name,pid')->find();
            $c3['url'] = U('Product/product',array('c3'=>$c3['id']));
            $c2 = $model->where("id=".$c3['pid'])->field('id,name,pid')->find();
            $c2['url'] = U('Product/product',array('c2'=>$c2['id']));
            $c1 = $model->where("id=".$c2['pid'])->field('id,name')->find();
            $c1['url'] = U('Product/product',array('c1'=>$c1['id']));
            $returnArr[] = $c1;
            $returnArr[] = $c2;
            $returnArr[] = $c3;
        }
        if($this->c4){
            $model = M('category');
            $c4 = $model->where("id=$this->c4")->field('id,name,pid')->find();
            $c4['url'] = U('Product/product',array('c4'=>$c4['id']));
            $c3 = $model->where("id=".$c4['pid'])->field('id,name,pid')->find();
            $c3['url'] = U('Product/product',array('c3'=>$c3['id']));
            $c2 = $model->where("id=".$c3['pid'])->field('id,name,pid')->find();
            $c2['url'] = U('Product/product',array('c2'=>$c2['id']));
            $c1 = $model->where("id=".$c2['pid'])->field('id,name')->find();
            $c1['url'] = U('Product/product',array('c1'=>$c1['id']));
            $returnArr[] = $c1;
            $returnArr[] = $c2;
            $returnArr[] = $c3;
            $returnArr[] = $c4;
        }

        if($this->attrvalue){
            $model = M('attrvalue');
            $rs = $model->where("id=$this->attrvalue")->field('id,name')->find();
            $tempArr['name'] = $rs['name'];
            $tempArr['url'] = U('Product/product',array('bid'=>$rs['id']));
            $returnArr[] = $tempArr;
        }
        if($this->bid){
            $model = M('brand');
            $rs = $model->where("id=$this->bid")->field('id,name')->find();
            $tempArr['name'] = $rs['name'];
            $tempArr['url'] = U('Product/product',array('bid'=>$rs['id']));
            $returnArr[] = $tempArr;
        }
        if($this->column6 == 1){
            $tempArr['name'] = '精品推荐';
            $tempArr['url'] = U('Product/product',array('column6'=>1));
            $returnArr[] = $tempArr;
        }
        if($this->column7 == 1){
            $tempArr['name'] = '智能潮货';
            $tempArr['url'] = U('Product/product',array('column7'=>1));
            $returnArr[] = $tempArr;
        }
        if($this->column8 == 1){
            $tempArr['name'] = '家用电器';
            $tempArr['url'] = U('Product/product',array('column8'=>1));
            $returnArr[] = $tempArr;
        }
        if($this->column9 == 1){
            $tempArr['name'] = '品牌汽车';
            $tempArr['url'] = U('Product/product',array('column9'=>1));
            $returnArr[] = $tempArr;
        }
        $this->assign('navigation',$returnArr);
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