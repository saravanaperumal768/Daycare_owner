<?php
error_reporting(0);
$base_dir = __DIR__;
$doc_root=preg_replace("!{$_SERVER['SCRIPT_NAME']}$!",'', $_SERVER['SCRIPT_FILENAME']);
include ($doc_root."/students/Database_Config.php");

$course_name = $_POST['course_name'];
$classes = $_POST['classes'];
echo $course_name;
echo $classes;



    $sql = "INSERT INTO tbl_cour (course_name,classes) VALUES ($course_name,'$classes')";

    if ($conn->query($sql) === TRUE) {
      echo "success";
    } 
?>