<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/7/13
 * Time: 14:10
 */

namespace Admin\Controller;
use Common\Controller\CommonController;

class UserController extends CommonController
{
    public function index(){
        $User = M('user');
        $count      = $User->count();
        $Page       = new \Think\Page($count,12);
        $show       = $Page->show();
        $list = $User->limit($Page->firstRow.','.$Page->listRows)->select();
        $this->assign('list',$list);// 赋值数据集
        $this->assign('page',$show);// 赋值分页输出
        $this->display(); // 输出模板
    }

    public function editUserGroup(){
        $user = M('user')->find(I('get.id'));
        if($user){
            $this->username=$user['username'];
            $this->userid=$user['id'];
        }
        else
            $this->error('用户未找到');
        $this->group=M('group')->where('status=1')->select();
         $this->display();
    }

    public function editGroupHandler(){
        $ga=M('group_access');
        $data['group_id']=I('post.group_id');
        $condition['uid']=I('post.userid');
        $result=$ga->find($condition['uid']);
        if($result){
            if($ga->where($condition)->save($data))
                $this->success('更新成功');
            else
                $this->error('更新失败');
        }
        else{
            $data['uid']=$condition['uid'];
           if( $ga->add($data)){
               $this->success('增加成功');
           }else{
               $this->error('增加失败');
           }
        }
    }
    //修改用户信息模板
    public function editUserInfo(){
        $condition['uid']=I('get.id');
        $ga=M('user');
        //p($condition);
        $result=$ga->find($condition['uid']);
        $this->username=$result['username'];
        $this->id=$result['id'];
        //$this->password=$result['password'];
        $this->lock=$result['lock'];
        $this->display();
    }
    //处理修改用户信息表单
    public function editUserInfopHandler(){
        $condition['id']=I('post.userid');
        $data['lock']=I('post.lock');
        $user=M('user');
        if($user->where($condition)->save($data))
            $this->success('修改成功');
        else
            $this->error('修改失败');
    }
}
