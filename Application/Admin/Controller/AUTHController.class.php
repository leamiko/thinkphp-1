<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/7/7
 * Time: 11:47
 */

namespace Admin\Controller;
use Common\Controller\CommonController;

class AUTHController extends CommonController
{
    public function index(){
        $Auth = new \Think\Auth();
        $name = MODULE_NAME . '/' .CONTROLLER_NAME.'/'. ACTION_NAME;
        ECHO $name;
        $uid = '1';

        //执行check的模式
        //$mode = 'url';
        //'or' 表示满足任一条规则即通过验证;
        //'and'则表示需满足所有规则才能通过验证
        //$relation = 'or';
        var_dump ($Auth->check($name, $uid));
    }
    /*
     * 添加用户组表单
     * */
    public function addGroup(){
        $this->rule=M('rule')->where('status = 1')->select();
        $this->display();
    }
    //添加用户组表单处理
    public function addGroupHandler(){

        $group=D('group');
        if($group->create()) {   //D('user')->create($data) 可以传人$data
            $result =   $group->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($group->getError());
        }
    }

    /*用户组列表*/
    public function manageGroup(){
        $this->group=M('group')->where('status = 1')->select();
        $this->display();
    }

    //显示用户组
    public function setGroupRule(){
        $condition['id']=I('id',0,'intval');
        $this->group=M('group')->where($condition)->find();
        $this->rule=M('rule')->where('status = 1')->select();
        $this->grouprules=explode(',',$this->group['rules']);
        $this->display();
    }

    //设置用户组拥有的认证权限
    public function setRuleHandler(){
        $id=I('groupid');
        $data['rules']=implode(',',$_POST['rules']);
        $grouprule=M('group');
        $result=$grouprule->where("id=%d",$id)->save($data);
        if($result) {
            $this->success('数据添加成功！');
        }else{
            $this->error('数据添加错误！');
        }
    }

    //添加认证权限表单
    public function addRule(){
        $this->display();
    }

    //添加认证权限表单处理
    public function addRuleHandler(){
        //p($_POST);
        $rule=D('rule');
        if($rule->create()) {   //D('user')->create($data) 可以传人$data
            $result =   $rule->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($rule->getError());
        }
    }

    //编辑认证规则表单
    public function editRule(){
        $rid=I('get.id','','intval');
        $condition['id']=$rid;
        $this->rule=M('rule')->where($condition)->find();//select返回的是2维数组,find返回的是1维数组
        //$this->rule=M('rule')->select($rid);
        //p($this->rule);
        $this->display();
    }

    //编辑认证规则表单处理
    public function editRuleHandler(){

    }
    //认证规则列表
    public function manageRule(){
        $this->rules=M('rule')->select();
        $this->display();
    }

    //删除认证规则
    public function  delRule(){
        $rid=I('get.id','','intval');
        if(!isset($rid))
            $this->error('参数错误');
        if(M('rule')->delete($rid)){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }

    //
}