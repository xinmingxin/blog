<?php
namespace Admin\Controller;
use Think\Controller;
// use Think\Model;
class IndexController extends Controller {
    public function login(){
    	// echo 123;
    	if (I('post.username')) {
    		$user = D('user');
    		$info = $user->select();
    		if ($info['username'] == I('post.username') ) {
    			# code...
    		}
    		
    	}else{
    		$this->show();
    	}
        
    }
    public function index(){

    }
}