<?php
error_reporting(0);
$base_dir = __DIR__;
$doc_root=preg_replace("!{$_SERVER['SCRIPT_NAME']}$!",'', $_SERVER['SCRIPT_FILENAME']);
include ($doc_root."/students/Database_Config.php");


$id = $_POST['id'];
$sql = "DELETE FROM tbl_course WHERE id='$id'";
    if ($conn->query($sql) === TRUE) {
      echo "success";
    } 


?>
        