<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\20 0020
 * Time: 14:23
 */
namespace Home\Model;
use Think\Model;
class CategoryModel extends Model
{
    function getCategoryByID($id){
        return $this->where("id=$id")->field('id,name,pid')->find();
    }
}