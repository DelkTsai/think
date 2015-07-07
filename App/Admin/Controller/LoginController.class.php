<?php
namespace Admin\Controller;
use Think\Controller;
use Admin\Model;
class LoginController extends Controller {
	
	//页面入口
    public function index(){
    	// $User = D("User");
    	// $user = $User->select();
    	// $this->assign("user",$user);
        $data['name'] = '产品';
        $data['pic'] = 'index.jpg';
        $list = array();
        for ($i=0; $i < 4; $i++) { 
             array_push($list, $data);
        }
        $this->assign('title','<i class="fa fa-home"></i> XX金融有限公司');
        $this->assign('list',$list);
    	$this->display();
    }

    //登录验证
    public function login(){
    	$User = D('User');
    	if($User->create()) {
    		$User->add();
    	}
    	$this->redirect('Login/index');
    }

     //退出操作
    public function logout(){
        
        $this->redirect('Login/index');
    }
}