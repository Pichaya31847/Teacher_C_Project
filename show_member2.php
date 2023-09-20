<?php session_start();
    if (empty($_SESSION["user"])){
        print "<script>alert('Please Login First')</script>" ;
        print "<script>window.location='login.php';</script>";
    }

    if ($_SESSION["status"] == "1"){
        print "<script>window.location='show_admin.php';</script>";
    }
    
include "connect_server.php";
$id_student = $_SESSION['email'];
$user=$_SESSION["user"];
date_default_timezone_set("Asia/Bangkok");
$user=$_SESSION["user"];
$LoginTime = date("Y/m/d H:i:s");
$ip = $_SERVER['REMOTE_ADDR'];
$email_user = $_SESSION["email"];
$sql_log = "Insert into log_user values ('','$LoginTime','$ip','$email_user','$user','Show_Member') " ;
$result_log = $conn -> query($sql_log);

$date_in_mount = date("m");
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
$day_user = date("d");
$mount_user = $date_in_mount;
$year_user = date("Y")+ 543;
$time_user = date("H:i:s");
$sql_login = "Insert into user_login values ('','$user','$day_user','$mount_user','$year_user','$time_user') " ;
$result_login = $conn -> query($sql_login);
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Student</title>
    <link rel="stylesheet" href="CSS/style_show_member2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color:#333; width:100%;opacity: 0.9;">
        <div class="container-fluid">
            <a href="show_member2.php" class="navbar-brand btn btn-outline-dark">Home</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggle">
            <ul class="navbar-nav">
            <form class="d-flex btn btn-outline-dark" style="position:relative;left:5px;bottom:1px">
                    <a class="text-light fs-6" ><img src="picture/user_people.png" width="30px" style="position: relative;right:10px;" alt="icon"><?php print $id_student;?>
                    </a>
                </form>
                <form class="d-flex btn btn-outline-dark" style="position:relative;left:15px;bottom:1px">
                    <a href="https://www.ksp.or.th/service/license_search.php" class="text-light fs-6" ><img src="picture/edu.png" width="30px" style="position: relative;right:10px;" alt="icon">ไปยังเว็บไซต์คุรุสภา
                    </a>
                </form>
                <li class="dropdown">
                    <a class="dropdown-toggle btn btn-outline-dark text-light" data-toggle="dropdown" href="#" style="position:relative;left:430px;top:2px;">คู่มือการใช้งานเว็บคุรุสภา
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="height:80px;width:350px;left:430px;">
                        <li><a href="picture/manual/KPS_service.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">ขั้นตอนการสมัครเข้าใช้งานระบบ KSP</div></a></li>
                        <li><a href="picture/manual/edu.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">ขั้นตอนการขอขึ้นทะเบียนใบอนุญาติ</div></a></li>
                    </ul>
                </li>
                <form class="d-flex btn btn-outline-dark" style="position:relative;left:10px;left:450px;bottom:1px">
                    <a href="logout.php" class="text-light fs-6" ><img src="picture/icon_people.png" width="30px" style="position: relative;right:10px;" alt="icon">Logout
                    </a>
                </form>
            </ul>
        </div>
    </nav>

    <div class="blurred-box">
        <div class="import_box">
            <h1 class="title"><div class="word1"></div></h1>
            <h1 class="title"><div class="word1">
                    ไม่พบข้อมูล<br>กรุณาติดต่อสำนักส่งเสริมวิชาการและงานทะเบียน มหาวิทยาลัยสวนดุสิต<br>
                    295 ถ.นครราชสีมา เขตดุสิต กรุงเทพฯ 10300 โทร.02-244-5467 <br>email : registsdu@gmail.com<br>
                </div>
            </h1>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js%22%3E"></script>
<scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
</body>
