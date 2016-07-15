<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/7/4
 * Time: 17:45
 */

namespace Admin\Controller;
use Think\Controller;




class VerifyImageController extends Controller

{

    public  function  index(){
        echo  function_exists("imagecreate");
        echo  function_exists("imagettftext");
    }
    public function verify111(){
        ob_end_clean();
        $Verify = new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 1;
        $Verify->useNoise = false;
        $Verify->imageW=263;
        $Verify->imageH=0;
        $Verify->entry();
    }

}