<?php
error_reporting(0);
$base_dir = __DIR__;
$doc_root=preg_replace("!{$_SERVER['SCRIPT_NAME']}$!",'', $_SERVER['SCRIPT_FILENAME']);
include ($doc_root."/students/Database_Config.php");

$course = $_POST['course'];


    $sql = "INSERT INTO tbl_course (course_name) VALUES ('$course')";

    if ($conn->query($sql) === TRUE) {
      echo "success";
    } 

?>
        