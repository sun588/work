<?php
namespace Home\Controller;
class IndexController extends CommonController {
    public function index(){
        $this->assign('headerCategory',$this->headerCategory);
        $this->display();
    }
}