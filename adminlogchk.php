<?php
// session_start();
$base_dir = __DIR__;
$doc_root=preg_replace("!{$_SERVER['SCRIPT_NAME']}$!",'', $_SERVER['SCRIPT_FILENAME']);
include ($doc_root."/students/Database_Config.php");
?>
<?php
  $username = $_POST['username'];
  $pwd    = $_POST['password'];
  $pass = md5($pwd);

  $return_arr  = "";
  $conn= new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
  if ($conn->connect_error)      
  {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql="select * from tbl_admin where username='$username' AND password='$pass' ";
  
  $result= $conn->query($sql);
     //echo $result->num_rows;
  if($result->num_rows > 0)
  {
     while($row = $result->fetch_assoc()) 
     {
        if($row['password'] == $pass)
        {
              // $_SESSION["username"] = $username;
            
          	  $return_arr="Success";        
        }
        else
        {
              	$return_arr="Password is Wrong.";     
        }
     }
  }
  else 
  {
        $return_arr = "Username Is Wrong";     
  }
        echo $return_arr;
  // echo json_encode($return_arr);
  ?>