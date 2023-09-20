<?php session_start();
include "connect_server.php";
$file = $_FILES['file']['tmp_name'];
$handle = fopen($file, "r");
$c = 0;
while(($filesop = fgetcsv($handle, 1000, ",")) !== false){
    $id_student = $filesop[1];
    $date_birth = $filesop[2];
    $name_first = $filesop[3];
    $name_real = $filesop[4];
    $name_surename = $filesop[5];
    $location_learn = $filesop[6]; 
    $learn_typt = $filesop[7];
    $learn_major = $filesop[8];
    $learn_major_typt = $filesop[9];
    $date_in = $filesop[10];
    $date_on = $filesop[11];
    $id_teacher = $filesop[12];
    $id_ref = $filesop[13];
    $id_finish = $filesop[14];   
    $sql_email = "SELECT * from eduinfo where id_student like '$id_student'";
    $result_email = $conn -> query($sql_email);
    if (($result_email->num_rows > 0)){
        print "<script>alert('รหัสนักศึกษา：$id_student มีข้อมูลอยู่แล้ว')</script>" ;
        print "<script>window.location='import.php';</script>";
    }elseif (!empty($_FILES['file']['tmp_name'])){  
        $sql = "INSERT INTO eduinfo (id_student,birth_date,prefix,firstname,surename,location_stu,faculty,course,branche,date_in,date_out,request_no,confirm_no,id_licence) values ('$id_student','$date_birth','$name_first','$name_real','$name_surename','$location_learn','$learn_typt','$learn_major','$learn_major_typt','$date_in','$date_on','$id_teacher','$id_ref','$id_finish')";
        $result = $conn -> query($sql);}}
if($result){
    $user = $_SESSION["user"];
    $LoginTime = date("Y/m/d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $sql_log = "Insert into log_user values ('','$LoginTime','$ip','','$user','Import') " ;
    $result_log = $conn -> query($sql_log);
    print "<script>alert('เพิ่มข้อมูลสำเร็จ')</script>" ;
    print "<script>window.location='show_admin.php';</script>";
}else{
    print "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่อีกครั้ง')</script>" ;
    print "<script>window.location='show_admin.php';</script>";
}
?>