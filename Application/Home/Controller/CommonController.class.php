<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018\11\26 0026
 * Time: 13:27
 */

namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller
{
    protected $headerCategory;
    function _initialize(){
        $this->headerCategory = $this->headerCategory();
    }

    function headerCategory(){
        $model = D('Category');
        $c1 = $model->where('pid=0')->field('id,name')->order('od desc')->limit(10)->select();

        for($i = 0; $i < count($c1); $i++){
            $c2 = $model->where('pid='.$c1[$i]['id'])->field('id,name')->order('od desc')->limit(3)->select();

            for($j = 0; $j < count($c2); $j++){
                $c3 = $model->where('pid='.$c2[$j]['id'])->field('id,name')->order('od desc')->limit(10)->select();
                $c2[$j]['c3'] = $c3;
            }
            $c1[$i]['c2'] = $c2;
        }
        return $c1;
    }

    /**
     * @param $file 文件路径
     * @return string
     */
    public function getThumpPic($file){
        if( empty($file) ) return;
        $pathInfo = pathinfo($file);
        return $thumbPath = $pathInfo['dirname'] . '/' . $pathInfo['filename'] . 'thump.' . $pathInfo['extension'];
    }
}