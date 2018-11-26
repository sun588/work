<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 14:23
 */
namespace Admin\Model;
use Think\Model;
class ProductModel extends Model
{
    protected $_validate = array(
        array('name','require','产品名称不能为空',1),
        array('type','require','产品型号不能为空',1),
        array('brand','number','不存在的品牌'),
        array('c1','number','不存在的分类'),
        array('c2','number','不存在的分类'),
        array('c3','number','不存在的分类'),
        array('c4','number','不存在的分类'),
        array('od','number','排序值不正确'),
    );
}