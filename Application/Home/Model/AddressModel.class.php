<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 14:23
 */
namespace Home\Model;
use Think\Model;
class AddressModel extends Model
{
    //array(验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
    //验证规则 require 字段必须、email 邮箱、url URL地址、currency 货币、number 数字
    //验证条件 0 存在字段就验证（默认） 1 必须验证  2 值不为空的时候验证
    //验证时间 1新增数据时候验证   2编辑数据时候验证  3全部情况下验证（默认）
    protected $_validate = array(

    );
}