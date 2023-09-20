<?php session_start();
if (empty($_SESSION["user"])){
    print "<script>alert('Please Login First')</script>" ;
    print "<script>window.location='login.php';</script>";
}

if ($_SESSION["status"] != "1"){
    print "<script>alert('ไอดีนี้ไม่มีสิทธ์เข้าถึงหน้านี้')</script>" ;
    print "<script>window.location='show_member.php';</script>";
}

include "connect_server.php";
$user = $_GET['id'] ;
$_SESSION["get_user"] = $_GET["user"];
$sql = "SELECT  *  FROM  member  WHERE username  like  '$user' " ;
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Change status</title>
    <link rel="stylesheet" href="CSS/style_login.css">
</head>
<body>
<div class="tab">
  <a href="show_admin.php">Home</a>
  <a href="add_student.php">เพิ่มข้อมูลนักศึกษา</a>
  <a class="active">แก้ไขสถานะ</a>
  <a href="logout.php" class="right">Log Out</a>
  <a href="picture/manual/change_status_manual.pdf" class="right">คู่มือการใช้งาน</a>
</div>
    <div class="blurred-box1">
        <div class="user-login-box">
            <h1><div class="word1">เปลี่ยนสถานะของUser</div></h1>
            <h2><div class="word3">Email</div></h2>
            <form method="POST" action="change_status_on.php" >
                <input type="text" class="user-username" value="<?php print $row["email"]; ?>" name="email" readonly>
                <h2><div class="word4">Username</div></h2>
                <input type="text" class="user-password" value="<?php print $row["username"]; ?>" name="username" readonly>
                <h2><div class="word5">Status</div></h2>
                <?php if ($row["status_user"] == 1){
                    print "<select name='status_member'>
                        <option value='1'>Admin</option>
                        <option value='0'>บุคคลทั่วไป</option>
                    </select>";
                }else{
                    print "<select name='status_member'>
                        <option value='0'>บุคคลทั่วไป</option>
                        <option value='1'>Admin</option>
                    </select>";
                }
                
                
 ?>
                <br><input type="submit" class="button1" value="บันทึกข้อมูล"> 
            </form>
        </div>
    </div>
</body>
</html>
