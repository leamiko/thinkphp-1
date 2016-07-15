<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/7/5
 * Time: 9:39
 */

namespace Admin\Controller;
use Think\Controller;

class RegController extends controller
{
    public function reg(){
        $this->display();
    }

    public function reghandler(){
        IF(!IS_POST)
            $this->error('数据添加错误！',U('Admin/Reg/reg'));
            $verify = new \Think\Verify();
            $code=I('code');
            if(!$verify->check($code))
                $this ->ERROR('验证码错误。',U('Admin/Reg/reg'));

            $data['username']=I('username');
            $data['loginip']=get_client_ip();
            $data['logintime']=time();
            $data['password']=I('password','','md5');
            $user=M('user');
            if($user->add($data)){
                $this->success('注册成功！');
            } else{
                $this->error($user->getError());
            }

        /*$user=D('user');
        if($user->create()) {   //D('user')->create($data) 可以传人$data
            $result =   $user->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($user->getError());
        }*/
    }

    public  function checkusername($username=''){
        $username=I('post.username');
        $condition['username'] = $username;
        $result=M('user')->where($condition)->find();
        if($result){
            $data['status'] = 20;
            $data['info'] ='用户名已存在';
        }else{
            $data['status'] = 21;
            $data['info'] ='用户名可以使用';
        }
        $this->ajaxReturn($data);
    }
}