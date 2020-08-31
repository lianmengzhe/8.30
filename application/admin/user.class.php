<?php
/**
 * Created by PhpStorm.
 * User: 小胡同学
 * Date: 2020/8/30
 * Time: 13:22
 */

use \libs\smarty;//类的自动载入
use \libs\db;//类的自动载入
use \libs\upload;
class user {
    function adduser(){
        $smarty=new smarty();
        $smarty->display("admin/adduser.html");
    }
}