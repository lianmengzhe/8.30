<?php
/**
 * Created by PhpStorm.
 * User: 小胡同学
 * Date: 2020/8/30
 * Time: 14:51
 */


function addpage(){
    $smarty=new smarty();
    $smarty->display("admin/addtip.html");
}

function add(){
//        echo "添加栏目";
    if(isset($_POST["tid"])){
        $tid=$_POST["tid"];
    }else{
        $tid=0;
    }
    $tname=$_POST["tname"];
    $isshow=$_POST["isshow"];
    $database=new db();
    $db=$database->db;
    $db->query("insert into mvc_tips (tname,pid,isshow) values ('$tname','$tid',$isshow)");
    if($db->affected_rows>0){
        header("location:/mvc2/index.php/admin/tip");
    }
}
function del(){
    //删除栏目
    $tid=$_GET["tid"];
    $database=new db();
    $db=$database->db;

    $result=$db->query("select * from mvc_tips where pid=".$tid);
    if($result->num_rows>0){
        echo "<script> alert('请先删除子目录');location.href='/mvc2/index.php/admin/tip'</script>";
    }else{
        $db->query("delete from mvc_tips where tid=".$tid);
        if($row=$db->affected_rows>0) {
            header("location:/mvc2/index.php/admin/tip");
        }
    }
}

//修改内容
function edition(){
//        echo "修改栏目";
    $tname=$_GET["tname"];
    $pid=$_GET["pid"];
    $tid=$_GET["tid"];
    $isshow=$_GET["isshow"];
    $database=new db();
    $db=$database->db;

    $db->query("update mvc_tips set tname='{$tname}',pid={$pid},isshow=$isshow' where tid=".$tid);
    if($db->affected_rows>0){
        echo "ok";
    }
}
function upload(){
    $smarty=new smarty();
    $smarty->display("admin/upload.html");
}
function uploadfile(){
    $upload=new upload();
    $upload->up();
    $path=HOST_ADD."/mvc2/".$upload->fullpath;
    echo "$path";
}