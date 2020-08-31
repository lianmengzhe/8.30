<?php
if(!defined("MVC")){
die("非法侵入");
};
use \libs\smarty;
use \libs\db;
use \libs\upload;
/**
 * Created by PhpStorm.
 * User: 小胡同学
 * Date: 2020/8/30
 * Time: 14:33
 */

class tip{

    public $arr=array();
    function int(){
        $smarty=new smarty();
        //要查询数据库 放入到页面当中
        $database=new db();
        $this->db=$database->db;
        $str="";
        $this->tree(0,$str);
        $smarty->assign("data",$str);
        $smarty->display("admin/tips.html");
    }
    //传值和传址
    function tree($tid=0,&$str,$i=0){
        $result=$this->db->query("select * from mvc_tips where pid=".$tid);
        while ($row=$result->fetch_assoc()){
            if($row["isshow"]==1){
                $s="可见";
            }else{
                $s="不可见";
            }
            $str.='<tr><td>'.($i+1).'级目录</td><td>'.str_repeat("-->",$i).$row["tname"].'</td><td>'.$s.'</td><td>
<a href="javascript:;" attr="'.$row["tid"].'" class="add">添加</a>
<a href="/mvc2/index.php/admin/tip/del?tid='.$row["tid"].'" attr="'.$row["tid"].'" class="remove">删除</a>
<a href="javascript:;" attr="'.$row["tid"].'" pid="'.$row["pid"].'" class="edit">修改</a></td></tr>';

            $this->tree($row["tid"],$str,$i+1);
        }
    }
    function show(){
        $tid=$_GET["tid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from mvc_tips where tid=".$tid);
        $row=$result->fetch_assoc();
        echo json_encode($row);
    }

    function getOption(){
        $this->treeOption(0,$this->arr);
        echo json_encode($this->arr);
    }
    function treeOption($pid,&$arr){
        $database=new db();
        $this->db=$database->db;
        $result=$this->db->query("select * from mvc_tips where pid=".$pid);
        $i=0;
        while ($row=$result->fetch_assoc()){
            $arr[$i]=array(
                "tname"=>$row["tname"],
                "tid"=>$row["tid"],
                "pid"=>$row["pid"],
            );
            $this->treeOption($row["tid"],$arr[$i]["child"]);
            $i++;
        }
    }



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

}