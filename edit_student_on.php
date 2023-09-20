<?php session_start();
include "connect_server.php";
$id_student = $_POST["id_student"];
$name_first = $_POST["name_first"];
$name_real = $_POST["name_real"];
$name_surename = $_POST["name_surename"];
$location_learn = $_POST["location_learn"]; 
$learn_typt = $_POST["learn_typt"];
$learn_major = $_POST["learn_major"];
$learn_major_typt = $_POST["learn_major_typt"];
$date_in = $_POST["date_in"];
$date_on = $_POST["date_on"];
$id_teacher = $_POST["id_teacher"];
$id_ref = $_POST["id_ref"];
$id_finish = $_POST["id_finish"];  
$sql = "UPDATE eduinfo SET  firstname = '$name_real', surename = '$name_surename' ,location_stu = '$location_learn' , faculty = '$learn_typt' , course = '$learn_major' , branche = '$learn_major_typt' , date_in = '$date_in' , date_out = '$date_on' , request_no = '$id_teacher' , confirm_no = '$id_ref' , id_licence = '$id_finish'  WHERE id_student = '$id_student'";
$result = $conn -> query($sql);
if($result){
    date_default_timezone_set("Asia/Bangkok");
    $user=$_SESSION["user"];
    $LoginTime = date("Y/m/d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql_log = "Insert into log_user values ('','$LoginTime','$ip','','$user','edit_student') ";
    $result_log = $conn->query($sql_log);
    print "<script>alert('บันทึกข้อมูลสำเร็จ')</script>" ;
    print "<script>window.location='show_admin.php';</script>";
}else{
    print "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง')</script>" ;
    print "<script>window.location='show_admin.php';</script>";
}
?>