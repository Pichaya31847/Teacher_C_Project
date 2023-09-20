<?php session_start();
if (empty($_SESSION["user"])) {
    print "<script>alert('Please Login First')</script>";
    print "<script>window.location='login.php';</script>";
}

if ($_SESSION["status"] != "1") {
    print "<script>alert('ไอดีนี้ไม่มีสิทธ์เข้าถึงหน้านี้')</script>";
    print "<script>window.location='show_member.php';</script>";
}
include "connect_server.php";
$user = $_GET['id'] ;
$_SESSION["get_user"] = $_GET["user"];
$sql = "SELECT  *  FROM  eduinfo  WHERE id_student  like  '$user' " ;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แก้ไขข้อมูลนักศึกษา</title>
    <link rel="stylesheet" href="CSS/style_add_student.css">
</head>
<body>
<div class="tab">
  <a href="show_admin.php">Home</a>
  <a href="add_student.php">เพิ่มข้อมูลนักศึกษา</a>
  <a class="active">แก้ไขข้อมูล</a>
  <a href="logout.php" class="right">Log Out</a>
  <a href="picture/manual/edit_manual.pdf" class="right">คู่มือการใช้งาน</a>
</div>
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <form method="POST" action="edit_student_on.php" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                <h2><label >คำนำหน้า</label>
                                    <input type="text" name="name_first" value="<?php print $row["prefix"]; ?>" readonly >
                                </div>
                                <div class="form-input">
                                    <h2><label >ชื่อ</label><h2>
                                    <input type="text" name="name_real" value="<?php print $row["firstname"]; ?>">
                                </div>
                                <div class="form-input">
                                <h2><label >นามสกุล</label>
                                    <input type="text" name="name_surename" value="<?php print $row["surename"]; ?>" >
                                </div>
                                <div class="form-input">
                                <h2><label >รหัสนักศึกษา</label>
                                    <input type="text" name="id_student" value="<?php print $row["id_student"]; ?>" readonly >
                                </div>
                                <div class="form-input">
                                <h2><label >สถานที่จัดการเรียนการสอน</label>
                                    <input type="text" name="location_learn" value="<?php print $row["location_stu"]; ?>" >
                                </div>  
                            </div> 
                            <div class="form-group">   
                                <div class="form-input">
                                <h2><label >คณะ</label>
                                    <input type="text" name="learn_typt" value="<?php print $row["faculty"]; ?>" >
                                </div>
								<div class="form-input">
                                <h2><label >หลักสูตร</label>
                                    <input type="text" name="learn_major" value="<?php print $row["course"]; ?>" >
                                </div>
                                <div class="form-input">
                                <h2><label >สาขา</label>
                                    <input type="text" name="learn_major_typt" value="<?php print $row["branche"]; ?>" >
                                </div>
                                <div class="form-input">
                                <h2><label >วันที่เข้าศึกษา</label>
                                    <input type="text" name="date_in" value="<?php print $row["date_in"]; ?>" >
                                </div>
                                <div class="form-input">
                                <h2><label >วันที่สำเร็จการศึกษา</label>
                                    <input type="text" name="date_on" value="<?php print $row["date_out"]; ?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                <h2><label >เลขที่คำขอคุรุสภา</label>
                                    <input type="text" name="id_teacher" value="<?php print $row["request_no"]; ?>">
                                </div>
								<div class="form-input">
                                <h2><label  >รหัสรับรองคุรุสภา</label>
                                    <input type="text" name="id_ref" value="<?php print $row["confirm_no"]; ?>" >
                                </div>
                                <div class="form-input">
                                <h2><label  >เลขที่ส่งข้อมูลผู้สำเร็จ</label>
                                    <input type="text" name="id_finish" value="<?php print $row["id_licence"]; ?>" >
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="บันทึกข้อมูล" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>