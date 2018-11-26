<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 14:23
 */
namespace Admin\Model;
use Think\Model;
class AttrkeyModel extends Model
{
    protected $_validate = array(
        array('id','require','数据不存在',2),
        array('name','require','属性名称不能为空',1),
        array('od','number','排序值必需为数字',1),
        array('cid','number','请选择所属分类'),
    );
}