<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/7/5
 * Time: 9:03
 */

namespace Admin\Controller;
use Think\Controller;

class LoginController extends controller
{
    public function login(){
        //echo MODULE_NAME.'</BR>';
        //echo  ACTION_NAME;
        $this->display();
    }
    public  function  loginHandler(){
        $verify = new \Think\Verify();
        $code=I('code');
        if(!$verify->check($code))
            $this ->ERROR('验证码错误。',U('Admin/Login/login'));
        $user=I('username');
        $passw=I('password','','md5');

        $condition['username'] = $user;
        $condition['password'] = $passw;
        //$login=M('user')->where($condition)->limit(1)->select();
        $login=M('user')->where($condition)->find();
        //p($login);
        if($login) {
            $_SESSION['name']=$login['username'];
            $_SESSION['id']=$login['id'];
            //p($_SESSION);
            $userdata=array(
                'id'=>$login['id'],
                'logintime'=>time(),
                'loginip'=>get_client_ip(),
            );
            M('user')->save($userdata);
            $this->redirect('/Admin/Index');
        }
        else
            $this ->ERROR('用户名或密码错误。',U('Admin/Login/login'));
    }


}