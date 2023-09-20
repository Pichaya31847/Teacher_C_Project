<?php session_start();
include "connect_server.php";
$user = $_POST["username"];
$status_member = $_POST["status_member"];
$sql = "UPDATE member SET status_user = '$status_member' WHERE username = '$user'";
$result = $conn->query($sql);
if ($result) {
    date_default_timezone_set("Asia/Bangkok");
    $LoginTime = date("Y/m/d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql_log = "Insert into log_user values ('','$LoginTime','$ip','','$user','Update_status') " ;
    $result_log = $conn -> query($sql_log);
    print "<script>alert('บันทึกข้อมูลสำเร็จ')</script>" ;
    print "<script>window.location='show_user.php';</script>";
}else{
    print "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่ภายหลัง')</script>" ;
    print "<script>window.location='show_status.php';</script>";
}
?>