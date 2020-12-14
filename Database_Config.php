<?php
define('DB_SERVER', "localhost",true); // db server
define('DB_USER', "root",true); // db user
define('DB_PASSWORD', "",true); // db password (mention your db password here)
define('DB_DATABASE', "students",true); // database name
$conn= new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
if($conn->connect_error)
{
   die("Connection failed: " . $conn->connect_error);
}

?>