<?php
    header("content-type:text/html;charset=utf-8");
    error_reporting(0);
    $name = $_GET["name"];
    $level = $_GET["hidden-level"];
    $selBed = "";
    if($level == 1) {
        $selBed = "下铺";
    } else if($level == 2) {
        $selBed = "中铺";
    } else if($level == 3) {
        $selBed = "上铺";
    } else {
        $selBed = "";
    }
    echo "尊敬的 ".$name." 用户, "."系统为您分配了".$selBed.".<br>";
?>