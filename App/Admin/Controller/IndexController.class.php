<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model;
class IndexController extends Controller {
	
	//页面入口
    public function index(){
    	$User = D("User");
    	$user = $User->select();
    	$this->assign("list",$user);
    	$this->display();
    }

    //添加
    public function add(){
    	$User = D('User');
    	if($User->create()) {
    		$User->add();
    	}
    	$this->redirect('Index/index');
    }

    //删除
    public function delete(){
    	$User = D('User');
    	$User->delete($_GET['id']);
    	$this->redirect('Index/index');
    }

    //更新
    public function update(){
    	$User = D('User');
    	$User->delete($_GET['id']);
    	$this->redirect('Index/index');
    }
}