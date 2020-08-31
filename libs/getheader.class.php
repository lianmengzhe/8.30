<?php
namespace libs;
if(!defined("MVC")){
    die("路径不合法");
};
class getheader{
    function __construct()
    {
        $arr=array();
        $database=new db();
        $db=$database->db;

        $i=0;
        $result=$db->query("select * from mvc_category  where pid=0 and isshow=1");
        while ($row=$result->fetch_assoc()){
            $arr[$i]=$row;
            $result1=$db->query("select * from mvc_category  where pid=".$row['cid']." and isshow=1");
            while($row1=$result1->fetch_assoc()){
                $arr[$i]["child"][]=$row1;
            }
            $i++;
        }

        $tips =array();
        $tipResult = $db->query("select * from mvc_tips  where pid=0 and isshow=1");
        $j = 0;
        while ($row=$tipResult->fetch_assoc()){
            $tips[$j]=$row;
            $result1=$db->query("select * from mvc_tips  where pid=".$row['tid']." and isshow=1");
            while($row1=$result1->fetch_assoc()){
                $tips[$j]["child"][]=$row1;
            }
            $j++;
        }

        $this->menuData=$arr;
        $this->tipData=$tips;
        $this->header=TPL_PATH."index/header.html";
        $this->footer=TPL_PATH."index/footer.html";
    }
}