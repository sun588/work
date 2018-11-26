<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 14:23
 */
namespace Admin\Model;
use Think\Model;
class BrandModel extends Model
{
    protected $_validate = array(
        array('id','require','数据不存在',2),
        array('name','require','品牌名称不能为空',1),
    );
}