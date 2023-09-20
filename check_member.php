<?php session_start();
include "connect_server.php";
$id_student = $_SESSION["user"];
$user = substr($id_student,1,20);
$sql = "SELECT * from eduinfo where id_student = '$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    print "<script>window.location='show_member.php';</script>";
}else{
    print "<script>window.location='show_member2.php';</script>";
}
?>