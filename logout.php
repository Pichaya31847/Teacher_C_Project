<?php session_start();?>
<?php
include "connect_server.php";
date_default_timezone_set("Asia/Bangkok");
$user = $_SESSION["user"];
$LoginTime = date("Y/m/d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$sql = "Insert into log_user values ('','$LoginTime','$ip','$user','Logout') " ;
$result = $conn -> query($sql);
session_destroy();
print "<script>alert('Logout finish')</script>" ;
print "<script>window.location='login.php';</script>" ;
?>