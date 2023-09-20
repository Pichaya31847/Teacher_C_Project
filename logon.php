<?php session_start();?>
<html><center>
<?php
include "connect_server.php";
$user=$_POST["user"];
$user_student =substr("$user",1,20) ;
$pass=$_POST["pass"];
$pass_student=$_POST["pass"];
$pass=md5($pass);
/*print $pass . $user;*/
/* print "serverconnect"; */
$sql = "SELECT * from member where username like '$user' and pass like '$pass'";
$result = $conn->query($sql);
$sql_student = "SELECT * from eduinfo where id_student like '$user_student' and birth_date like '$pass_student'";
$result_student = $conn->query($sql_student);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION["user"] = $user;
    $_SESSION["status"] = $row["status_user"];
    $_SESSION["email"] = $row["email"];
    date_default_timezone_set("Asia/Bangkok");
    $LoginTime = date("Y/m/d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql_log = "Insert into log_user values ('','$LoginTime','$ip','$user','Login') " ;
    $result_log = $conn -> query($sql_log);
    if ($_SESSION["status"] == "1"){
        print "<script>alert('login Complete')</script>" ;
        print "<script>window.location='show_admin.php';</script>";
    }else{
        print "<script>alert('login Complete')</script>" ;
        print "<script>window.location='check_member.php';</script>";
    }
}elseif ($result_student->num_rows > 0) {
    $row_student = $result_student->fetch_assoc();
    $_SESSION["user"] = $user;
    $_SESSION["status"] = '0';
    date_default_timezone_set("Asia/Bangkok");
    $LoginTime = date("Y/m/d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql_log = "Insert into log_user values ('','$LoginTime','$ip','$user','Login') " ;
    $result_log = $conn -> query($sql_log);
    if ($_SESSION["status"] == "1"){
        print "<script>alert('login Complete')</script>" ;
        print "<script>window.location='show_admin.php';</script>";
    }else{
        print "<script>alert('login Complete')</script>" ;
        print "<script>window.location='check_member.php';</script>";
    }  
 }else{
    print "<script>alert('Username or Password Incorect')</script>" ;
    print "<script>window.location=' login.php';</script>";
}
?></html>