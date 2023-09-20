<?php session_start();
if (empty($_SESSION["user"])){
    print "<script>alert('Please Login First')</script>" ;
    print "<script>window.location='login.php';</script>";
}

if ($_SESSION["status"] == "1"){
    print "<script>window.location='show_admin.php';</script>";
}

include "connect_server.php";
$email = $_SESSION['email'];
$id_student = $_SESSION["user"];
$user = substr($id_student,1,20);
$sql = "SELECT * from eduinfo where id_student like '$user'";
$result = $conn->query($sql);
if($result){
    $row = $result->fetch_assoc();
    date_default_timezone_set("Asia/Bangkok");
    $user=$_SESSION["user"];
    $LoginTime = date("Y/m/d H:i:s");
    $ip = $_SERVER['REMOTE_ADDR'];
    $email_user = $_SESSION["email"];
    $sql_log = "Insert into log_user values ('','$LoginTime','$ip','$email_user','$user','Show_Member') " ;
    $result_log = $conn -> query($sql_log);

    $date_in_mount = date("m");
    $day_user = date("d");
    $mount_user = $date_in_mount;
    $year_user = date("Y")+ 543;
    $time_user = date("H:i:s");
    $sql_login = "Insert into user_login values ('','$user','$day_user','$mount_user','$year_user','$time_user') " ;
    $result_login = $conn -> query($sql_login);
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Student</title>
    <link rel="stylesheet" href="CSS/style_show_member.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color:#333; width:100%;opacity: 0.9;">
        <div class="container-fluid">
            <a href="show_member.php" class="navbar-brand btn btn-outline-dark">Home</a>
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
                    <a class="dropdown-toggle btn btn-outline-dark text-light" data-toggle="dropdown" href="#" style="position:relative;left:550;top:2px;">คู่มือการใช้งานเว็บไซต์คุรุสภา
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="height:80px;width:350px;left: 510px;">
                        <li><a href="picture/manual/KPS_service.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">ขั้นตอนการสมัครเข้าใช้งานระบบ KSP</div></a></li>
                        <li><a href="picture/manual/edu.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">ขั้นตอนการขอขึ้นทะเบียนใบอนุญาติ</div></a></li>
                    </ul>
                </li>
                <form class="d-flex btn btn-outline-dark" style="position:relative;left:10px;left:560px;bottom:1px">
                    <a href="logout.php" class="text-light fs-6" ><img src="picture/icon_people.png" width="30px" style="position: relative;right:10px;" alt="icon">Logout
                    </a>
                </form>
            </ul>
        </div>
    </nav>

<div class="blurred-box">
    <div class="form-row" style="margin-left:130px;margin-top:20px;">
        <div class="form-group col-md-2">
            <label for="inputEmail4"><div class="word_header">ชื่อ</div></label><br>
            <input type="text" class="title" id="inputEmail4" value="<?php print $row['firstname']; ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputPassword4"><div class="word_header">นามสกุล</div></label>
            <input type="text" class="title" id="inputPassword4" value="<?php print $row['surename']; ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputPassword4"><div class="word_header">รหัสนักศึกษา</div></label>
            <input type="text" class="title" id="inputPassword4" value="<?php print $row['id_student']; ?>">
        </div>
    </div>
    <div class="form-row" style="margin-left:15px; ">
        <div class="form-group col-md-5" style="margin-left:120px;">
            <label for="inputPassword4"><div class="word_header">สถานที่จัดการเรียนการสอน</div></label><br>
            <input type="text" class="title2" id="inputPassword4" value="<?php print $row['location_stu']; ?>">
        </div>
    </div>
    <div class="form-row" style="margin-left:130px;">
        <div class="form-group col-md-2">
            <label for="inputEmail4"><div class="word_header">คณะ</div></label><br>
            <input type="text" class="title" id="inputEmail4" value="<?php print $row['faculty']; ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputPassword4"><div class="word_header">หลักสูตร</div></label>
            <input type="text" class="title" id="inputPassword4" value="<?php print $row['course']; ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputPassword4"><div class="word_header">สาขา</div></label>
            <input type="text" class="title" id="inputPassword4" value="<?php print $row['branche']; ?>">
        </div>
    </div>
    <div class="form-row" style="margin-left:130px;">
        <div class="form-group col-md-2">
            <label for="inputEmail4"><div class="word_header">วันที่เข้าศึกษา</div></label><br>
            <input type="text" class="title" id="inputEmail4" value="<?php print $row['date_in']; ?>">
        </div>
        <div class="form-group col-md-2"></div>
        <div class="form-group col-md-2">
            <label for="inputPassword4"><div class="word_header">วันที่สำเร็จการศึกษา</div></label>
            <input type="text" class="title" id="inputPassword4" value="<?php print $row['date_out']; ?>">
        </div>
    </div>
    <div class="form-row" style="margin-left:130px;">
        <div class="form-group col-md-2">
            <label for="inputEmail4"><div class="word_header">เลขที่คำขอคุรุสภา</div></label><br>
            <input type="text" class="title" id="inputEmail4" value="<?php print $row['request_no']; ?>">
        </div>
        <div class="form-group col-md-2">
            <label for="inputPassword4"><div class="word_header">รหัสรับรองคุรุสภา</div></label>
            <input type="text" class="title" id="inputPassword4" value="<?php print $row['confirm_no']; ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="inputPassword4"><div class="word_header">เลขที่ส่งข้อมูลผู้สำเร็จการศึกษา</div></label>
            <input type="text" class="title" id="inputPassword4" value="<?php print $row['id_licence']; ?>">
        </div>
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js%22%3E"></script>
<scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
