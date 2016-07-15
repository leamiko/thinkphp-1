<?php
namespace Admin\Controller;
use Common\Controller\CommonController;


class IndexController extends  CommonController {
    public function index(){
            $this->display();
    }


    public function logout(){
        session_unset();
        session_destroy();
        $this->redirect('Admin/Login/login');
    }

    public function welcome(){
        $this->name=$_SESSION['name'];
        $this->display();
    }
}