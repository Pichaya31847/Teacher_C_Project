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
$date_birth = $_POST["date_birth"]; 
$sql_email = "SELECT * from eduinfo where id_student like '$id_student'";
$date_in_day = substr($date_in,8,9);
$date_in_mount = substr($date_in,5,-3);
$date_in_yeare = substr($date_in,0,4);
$date_on_day = substr($date_on,8,9);
$date_on_mount = substr($date_on,5,-3);
$date_on_yeare = substr($date_on,0,4);
$date_birth_day = substr($date_birth,8,9);
$date_birth_mount = substr($date_birth,5,-3);
$date_birth_yeare = substr($date_birth,0,4);

if($date_in_mount =="01"){
    $date_in_mount = "ม.ค.";
}elseif ($date_in_mount =="02"){
    $date_in_mount = "ก.พ.";
}elseif ($date_in_mount =="03"){
    $date_in_mount = "มี.ค.";
}elseif ($date_in_mount =="04"){
    $date_in_mount = "เม.ย.";
}elseif ($date_in_mount =="05"){
    $date_in_mount = "พ.ค.";
}elseif ($date_in_mount =="06"){
    $date_in_mount = "มิ.ย.";
}elseif ($date_in_mount =="07"){
    $date_in_mount = "ก.ค.";
}elseif ($date_in_mount =="08"){
    $date_in_mount = "ส.ค.";
}elseif ($date_in_mount =="09"){
    $date_in_mount = "ก.ย.";
}elseif ($date_in_mount =="10"){
    $date_in_mount = "ต.ค.";
}elseif ($date_in_mount =="11"){
    $date_in_mount = "พ.ย.";
}elseif ($date_in_mount =="12"){
    $date_in_mount = "ธ.ค.";
}

if ($date_on_mount =="01"){
    $date_on_mount = "ม.ค.";
}elseif ($date_on_mount =="02"){
    $date_on_mount = "ก.พ.";
}elseif ($date_on_mount =="03"){
    $date_on_mount = "มี.ค.";
}elseif ($date_on_mount =="04"){
    $date_on_mount = "เม.ย.";
}elseif ($date_on_mount =="05"){
    $date_on_mount = "พ.ค.";
}elseif ($date_on_mount =="06"){
    $date_on_mount = "มิ.ย.";
}elseif ($date_on_mount =="07"){
    $date_on_mount = "ก.ค.";
}elseif ($date_on_mount =="08"){
    $date_on_mount = "ส.ค.";
}elseif ($date_on_mount =="09"){
    $date_on_mount = "ก.ย.";
}elseif ($date_on_mount =="10"){
    $date_on_mount = "ต.ค.";
}elseif ($date_on_mount =="11"){
    $date_on_mount = "พ.ย.";
}elseif ($date_on_mount =="12"){
    $date_on_mount = "ธ.ค.";
}


$date_in_year = $date_in_yeare + 543;
$date_on_year = $date_on_yeare + 543;
$date_birth_year = $date_birth_yeare + 543;

$date_in = $date_in_day." ".$date_in_mount.$date_in_year;
$date_on = $date_on_day." ".$date_on_mount.$date_on_year;
$date_birth = $date_birth_day.$date_birth_mount.$date_birth_year;
$result_email = $conn -> query($sql_email);
if (($result_email->num_rows > 0)){
    print "<script>alert('รหัสนักศึกษา：$id_student มีข้อมูลอยู่แล้ว')</script>" ;
    print "<script>window.location='add_student.php';</script>";
}else{
$sql = "INSERT INTO eduinfo (id_student,birth_date,prefix,firstname,surename,location_stu,faculty,course,branche,date_in,date_out,request_no,confirm_no,id_licence) values ('$id_student','$date_birth','$name_first','$name_real','$name_surename','$location_learn','$learn_typt','$learn_major','$learn_major_typt','$date_in','$date_on','$id_teacher','$id_ref','$id_finish')"; 
$result = $conn -> query($sql);
if($result){
    date_default_timezone_set("Asia/Bangkok");
    $user=$_SESSION["user"];
    $LoginTime = date("Y/m/d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql_log = "Insert into log_user values ('','$LoginTime','$ip','','$user','Add_student') ";
    $result_log = $conn->query($sql_log);
    print "<script>alert('เพิ่มข้อมูลสำเร็จ')</script>" ;
    print "<script>window.location='show_admin.php';</script>";
}else{
    print "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง')</script>" ;
    print "<script>window.location='show_admin.php';</script>";
}}
?>