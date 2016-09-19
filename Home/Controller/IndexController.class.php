<?php
namespace Home\Controller;
use Think\Controller;
// use Think\Model;
class IndexController extends Controller {
    public function index(){
    	$art = D('Art')->select();
        // print_r($art);
    	$this->assign('art',$art);
        $this->show();
    }
    public function contact(){
    	$this->show();
    }
    public function about(){
    	$this->show();
    }
    public function art(){
        $art_id = I('art_id');
        $art = D('Art')->find($art_id);
        // var_dump($art);
        $this->assign('art',$art);
        $this->show();
    }
    public function suggest(){
        I('')
        if (empty) {
            # code...
        }
    }
}