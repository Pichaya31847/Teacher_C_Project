<!-- InsertPerson.php -->
<?php
$email = $_POST['email'];
$usernameregis = $_POST['username'];
$passwordregis = $_POST['password'];
$passwordregis = md5($passwordregis);
include "connect_server.php";
$sql_email = "SELECT * from member where email like '$email'";
$result_email = $conn -> query($sql_email);
$sql_user = "SELECT * from member where username like '$usernameregis'";
$result_user = $conn -> query($sql_user);
if ($result_email->num_rows > 0){
   print "<script>alert('อีเมลนี้มีคนใช้แล้ว')</script>" ;
   print "<script>window.location='register.php';</script>";
}elseif ($result_user->num_rows > 0){
   print "<script>alert('username นี้มีคนใช้แล้ว')</script>" ;
   print "<script>window.location='register.php';</script>";
}else{
   $sql = "INSERT into member (email,username,pass) values ('$email', '$usernameregis' , '$passwordregis') ";
   $result = $conn -> query($sql);
   if ($result)  {
      $LoginTime = date("Y/m/d H:i:s");
      $ip = $_SERVER['REMOTE_ADDR'];
      $sql_log = "Insert into log_user values ('','$LoginTime','$ip','$usernameregis','Register') " ;
      $result_log = $conn -> query($sql_log);
      print "<script>alert('Register Complete')</script>" ;
      print "<script>window.location='login.php';</script>";
   }
   else{ 
      print "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง')</script>" ;
      print "<script>window.location='register.php';</script>";}}
?>