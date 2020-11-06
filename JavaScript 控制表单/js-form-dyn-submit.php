<?php
    error_reporting(0);
    echo $_SERVER['PHP_SELF'].'?'.$_SERVER['QUERY_STRING'].'<br><br><br>';
    $selMethod = "";
    $fname = "";
    $lname = "";
    if($_GET["selMethod"]) {
        $selMethod = $_GET["selMethod"];
        $fname = $_GET["fname"];
        $lname = $_GET["lname"];
    }
    else if($_POST["selMethod"]) {
        $selMethod = $_POST["selMethod"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
    }
    else
        $selMethod = "None";
    echo "Form Method : ".$selMethod.".<br>";
    echo "Form fname : ".$fname.".<br>";
    echo "Form lname : ".$lname.".<br>";
?>