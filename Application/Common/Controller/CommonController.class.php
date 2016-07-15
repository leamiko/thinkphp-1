<?php
namespace Common\Controller;
use Think\Controller;
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/7/4
 * Time: 16:47
 */
class CommonController extends  Controller
{
    public function _initialize() {//全局变量
        if(!isset($_SESSION['name'])||!isset($_SESSION['id']))
           $this ->ERROR('请登录。',U('Admin/Login/login'));
        $AUTH = new \Think\Auth();
        //完整权限校验
/*        if(!$AUTH->check(MODULE_NAME.'/'.CONTROLLER_NAME.'/'.ACTION_NAME, session('id'))) {
            $this->error('SORRY，没有权限！');
        }*/

        //模块权限校验
        //echo MODULE_NAME.'/'.CONTROLLER_NAME;
        if(!$AUTH->check(MODULE_NAME.'/'.CONTROLLER_NAME, session('id'))) {
            $this->error('SORRY，没有权限！');
        }
        //模块校验
/*        if(!$AUTH->check(MODULE_NAME, session('id'))) {
            $this->error('SORRY，没有权限！');
        }*/
    }
}