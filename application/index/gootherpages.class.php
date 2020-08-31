<?php
/**
 * Created by PhpStorm.
 * User: 小胡同学
 * Date: 2020/8/30
 * Time: 15:52
 */
use \libs\smarty;
class gootherpages {
    function detail(){
        $smarty=new smarty();
        $smarty->display("index/detail.html");
    }

    function parameter(){
        $smarty=new smarty();
        $smarty->display("index/parameter.html");
    }

    function buy(){
        $smarty=new smarty();
        $smarty->display("index/buy.html");
    }
}