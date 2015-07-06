<?php
namespace Home\Controller;
use Think\Controller;
use Home\Model;
class AboutController extends Controller {
	
	//页面入口
    public function index(){
    	// $User = D('User');
    	// $user = $User->select();
    	// $this->assign('user',$user);
        $data['name'] = '产品';
        $data['pic'] = 'index.jpg';
        $list = array();
        for ($i=0; $i < 4; $i++) { 
             array_push($list, $data);
        }
        $this->assign('title','<i class="fa fa-info"></i> 关于我们');
        $this->assign('list',$list);
        $this->assign('recommend',$list);
        $this->assign('new',$list);
    	$this->display();
    }

    //添加
    public function add(){
    	$User = D('User');
    	if($User->create()) {
    		$User->add();
    	}
    	$this->redirect('/');
    }

    //删除
    public function delete(){
    	$User = D('User');
    	$User->delete($_GET['id']);
    	$this->redirect('/');
    }

    //更新
    public function update(){
    	$User = D('User');
    	$User->delete($_GET['id']);
    	$this->redirect('/');
    }
}