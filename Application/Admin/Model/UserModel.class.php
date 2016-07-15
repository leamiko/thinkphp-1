<?php
/**
 * Created by PhpStorm.
 * userinfo表字段映射
 * User: lenovo
 * Date: 2016/7/6
 * Time: 9:51
 */

namespace Admin\Model;
use Think\Model;

class UserModel extends  Model
{
    protected $_map = array(
        'name' =>'realname', // 把表单中name映射到数据表的realname字段
        'mail'  =>'useremail', // 把表单中的mail映射到数据表的useremail字段
        'tel'  =>'usertel',
        'sfz'  =>'sidcard',
        'home'  =>'come',
        'headimg'  =>'head',
    );
    // 实例化User模型$User = D('User');
    //$data = $User->find(3);
    //$data = $User->parseFieldsMap($data);
    //通过上面的两种方式后，无论是find还是select方法读取后的data数据中就包含了name和mail字段数据了
    //而不再有username和email字段数据了。

}