<?php
error_reporting(0);
$base_dir = __DIR__;
$doc_root=preg_replace("!{$_SERVER['SCRIPT_NAME']}$!",'', $_SERVER['SCRIPT_FILENAME']);
include ($doc_root."/students/Database_Config.php");

$rollno = $_POST['rollno'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];

    $sql = "INSERT INTO register (rollno,name,class,username,password) VALUES ($rollno,'$name','$class','$username','$password')";

    if ($conn->query($sql) === TRUE) {
      echo "success";
    } 

?>
        