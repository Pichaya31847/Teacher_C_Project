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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ข้อมูลการเข้าใช้งาน</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: top;
        background-image: url(CSS/bg/background1.jpg);
        width: 100%;
        height: 100%;
        font-family: Arial, Helvetica, sans-serif;
        letter-spacing: 0.02em;
        font-weight: 400;
      }

      .word3 {
    font-size: 16px;
    color: rgb(92, 91, 91);
    text-transform: capitalize;
    display: block;
    text-align: center;
    text-indent: 50px;
    margin-top: 5px;
    margin-bottom: 5px;
    text-align: left;
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark sticky-top" style="background-color:#333; width:100%;opacity: 0.9;">
        <div class="container-fluid">
            <a href="show_admin.php" class="navbar-brand btn btn-outline-dark">Home</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggle">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarToggle">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="show_user.php" class="nav-link"style="position:relative;top:1px;">ข้อมูล:User</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle btn btn-outline-dark text-light" data-toggle="dropdown" href="#" style="position:relative;left:650;top:2px;left:470px">คู่มือการใช้งาน
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="height:200px;width:270px;left:470px;">
                    <li><a href="picture/manual/add_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">เพิ่มข้อมูลนักศึกษา</div></a></li>
                        <li><a href="picture/manual/import_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">เพิ่มข้อมูลนักศึกษาผ่านไฟล์</div></a></li>
                        <li><a href="picture/manual/example.xlsx"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">ตัวอย่างไฟล์</div></a></li>
                        <li><a href="picture/manual/edit_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">แก้ไขข้อมูลนักศึกษา</div></a></li>
                        <li><a href="picture/manual/show_admin_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">คู่มือการใช้งานหน้าหลัก</div></a></li>
                        <li><a href="picture/manual/change_status_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">คู่มือการใช้งานหน้าuser</div></a></li>
                    </ul>
                </li>
                <form action="show_user_log.php" method="post" class="d-flex" >
                <input type="text" name="txtSearch" class="form-control me-2" value="ป้อน:username" style="position:relative;left:10px;left:480px;">
                <select name="txtmount" class="form-control me-2" style="position:relative;left:10px;left:490px;width:100px"> 
                    <option value="">เดือน</option>
                    <option value="1">ม.ค.</option>
                    <option value="2">ก.พ.</option>
                    <option value="3">มี.ค.</option>
                    <option value="4">เม.ย.</option>
                    <option value="5">พ.ค.</option>
                    <option value="6">มิ.ย.</option>
                    <option value="7">ก.ค.</option>
                    <option value="8">ส.ค.</option>
                    <option value="9">ก.ย.</option>
                    <option value="10">ต.ค.</option>
                    <option value="11">พ.ย.</option>
                    <option value="12">ธ.ค.</option>  
            
                </select>
                <input type="text" name="txtyear" class="form-control me-2" placeholder="ปี" style="position:relative;left:10px;left:500px;width:80px">
                    <input type="submit" value="ค้นหา" class="btn btn-outline-dark text-light" style="position:relative;left:10px;bottom:1px;left:510px">
                </form>
                <form class="d-flex btn btn-outline-dark" style="position:relative;left:10px;left:520px;bottom:1px">
                    <a href="logout.php" class="text-light fs-6" ><img src="picture/icon_people.png" width="30px" style="position: relative;right:10px;" alt="icon">Logout
                    </a>
                </form>
            </ul>
        </div>
    </nav>

    <div class="card" style="opacity: 0.9;">
                <div class="card-body">

                <?php
                    include "connect_server.php";
                    $search = $_POST['txtSearch'];
                    $mount = $_POST['txtmount'];
                    $year_in = $_POST['txtyear'];
                    $query = "SELECT  *  FROM  user_login  WHERE member_user like '%$search%' or user_mount like '$mount' or user_year like '$year_in' ORDER BY id DESC ";
                    $query_run = mysqli_query($conn, $query);
                ?>
                
                    <table class="table table-hover text-center table-sm" style="position:relative;bottom:20px;">
                        <thead>
                            <tr>
                            <th scope="col">username</th>
                            <th scope="col">วันที่เข้าใช้งาน</th>
                            <th scope="col">เวลาที่เข้าใช้งาน</th>
                            </tr>
                        </thead>
                <?php
                     if($query_run)
                    {
                         foreach($query_run as $row)
                        {   
                            $date_in_mount= $row["user_mount"];
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
                ?>
                        <tbody class="text-center" >
                            <tr>
                                <td><?php echo $row ['member_user']; ?></td>
                                <td><?php echo $row ['user_day']."/".$date_in_mount."/".$row["user_year"]; ?></td>
                                <td><?php echo $row ['user_time']; ?></td>
                            </tr>
                        </tbody>
                <?php
                        }
                    }
                    else
                    {
                        echo "<tbody class='text-center' ><tr><td>No Record Found</td><td>No Record Found</td><td>No Record Found</td></tr></tbody>";
                    }
                ?>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js%22%3E"></script>
<scrip src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js%22%3E"></script>
