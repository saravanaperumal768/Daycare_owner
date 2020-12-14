<?php
error_reporting(0);
$base_dir = __DIR__;
$doc_root=preg_replace("!{$_SERVER['SCRIPT_NAME']}$!",'', $_SERVER['SCRIPT_FILENAME']);
include ($doc_root."/students/Database_Config.php");

$course_name= $_POST['course'];
$mrng= $_POST['mrng'];
$eve= $_POST['eve'];

    $sql = "INSERT INTO tbl_course (course_name,mrng,eve) VALUES ('$course',$mrng,$eve)";

    if ($conn->query($sql) === TRUE) {
      echo "success";
    } 

?>
        