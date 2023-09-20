<?php session_start();
if (empty($_SESSION["user"])) {
    print "<script>alert('Please Login First')</script>";
    print "<script>window.location='login.php';</script>";
}

if ($_SESSION["status"] != "1") {
    print "<script>alert('ไอดีนี้ไม่มีสิทธ์เข้าถึงหน้านี้')</script>";
    print "<script>window.location='show_member.php';</script>";
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>เพิ่มข้อมูลนักศึกษา</title>
    <link rel="stylesheet" href="CSS/style_add_student.css">
</head>
<body>
<div class="tab">
  <a href="show_admin.php">Home</a>
  <a class="active">เพิ่มข้อมูลนักศึกษา</a>
  <a href="logout.php" class="right">Log Out</a>
  <a href="picture/manual/add_manual.pdf" class="right">คู่มือการใช้งาน</a>
</div>
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <form method="POST" action="add_student_on.php" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                <h2><label class="required">คำนำหน้า</label>
                                <div class="form-input">
                                    <input type="text" name="name_first" placeholder="นาย"  />
                                </div>
                                </div>
                                <div class="form-input">
                                    <h2><label class="required">ชื่อ</label><h2>
                                    <input type="text" name="name_real" placeholder="ชื่อ"  />
                                </div>
                                <div class="form-input">
                                <h2><label  class="required">นามสกุล</label>
                                    <input type="text" name="name_surename" placeholder="นามสกุล" />
                                </div>
                                <div class="form-input">
                                <h2><label class="required">รหัสนักศึกษา</label>
                                    <input type="text" name="id_student" placeholder="6311011000000" />
                                </div>
                                <div class="form-input">
                                <h2><label class="required">สถานที่จัดการเรียนการสอน</label>
                                    <input type="text" name="location_learn" placeholder="กรุงเทพมหานคร" />
                                </div>  
                            </div> 
                            <div class="form-group">   
                                <div class="form-input">
                                <h2><label class="required">คณะ</label>
                                    <input type="text" name="learn_typt" placeholder="ครุศาสตร์" >
                                </div>
                <div class="form-input">
                                <h2><label class="required">หลักสูตร</label>
                                    <input type="text" name="learn_major" placeholder="ศึกษาศาสตร์บัณฑิต" >
                                </div>
                                <div class="form-input">
                                <h2><label class="required">สาขา</label>
                                    <input type="text" name="learn_major_typt" placeholder="การศึกษา" >
                                </div>
                                <div class="form-input">
                                <h2><label class="required">วันที่เข้าศึกษา</label>
                                    <input type="date" name="date_in"  >
                                </div>
                                <div class="form-input">
                                <h2><label class="required">วันที่สำเร็จการศึกษา</label>
                                    <input type="date" name="date_on"  >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-input">
                                <h2><label  class="required">เลขที่คำขอคุรุสภา</label>
                                    <input type="text" name="id_teacher" placeholder="61000000000" />
                                </div>
                <div class="form-input">
                                <h2><label  class="required">รหัสรับรองคุรุสภา</label>
                                    <input type="text" name="id_ref" placeholder="0000">
                                </div>
                                <div class="form-input">
                                <h2><label  class="required">เลขที่ส่งข้อมูลผู้สำเร็จ</label>
                                    <input type="text" name="id_finish" placeholder="000000000">
                                    <h2><label class="required">วัน/เดือน/ปี เกิด</label>
                                    <input type="date" name="date_birth"  >
                                </div>
                                <div class="form-input">
                                <h2><a href="import.php" class="next"><img src="picture/xcel.png" width="100"></a>หรืออัพผ่าน Excel</h2>
                                </div>
                            </div>
                        </div>
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>