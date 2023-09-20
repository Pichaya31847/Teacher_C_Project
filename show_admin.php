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
    <title>Show admin</title>
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
        box-sizing: border-box;
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
                <li class="nav-item">
                    <a href="show_user_log.php" class="nav-link"style="position:relative;top:1px;">ข้อมูลการเข้าใช้งาน</a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle btn btn-outline-dark text-light" data-toggle="dropdown" href="#" style="position:relative;left:650;top:2px;left:540px">คู่มือการใช้งาน
                    <span class="caret"></span></a>
                    <ul class="dropdown-menu" style="height:200px;width:270px;left:540px;">
                    <li><a href="picture/manual/add_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">เพิ่มข้อมูลนักศึกษา</div></a></li>
                        <li><a href="picture/manual/import_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">เพิ่มข้อมูลนักศึกษาผ่านไฟล์</div></a></li>
                        <li><a href="picture/manual/example.xlsx"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">ตัวอย่างไฟล์</div></a></li>
                        <li><a href="picture/manual/edit_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">แก้ไขข้อมูลนักศึกษา</div></a></li>
                        <li><a href="picture/manual/show_admin_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">คู่มือการใช้งานหน้าหลัก</div></a></li>
                        <li><a href="picture/manual/change_status_manual.pdf"  style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;"><div class="word3">คู่มือการใช้งานหน้าuser</div></a></li>
                    </ul>
                </li>
                <form action="show_admin.php" method="post" class="d-flex" >
                    <input type="text" name="txtSearch" class="form-control me-2" placeholder="ค้นหาด้วยรหัส / ชื่อ" style="position:relative;left:10px;left:550px;">
                    <input type="submit" value="ค้นหา" class="btn btn-outline-dark text-light" style="position:relative;left:10px;bottom:1px;left:560px">
                </form>
                <form class="d-flex btn btn-outline-dark" style="position:relative;left:10px;left:570px;bottom:1px">
                    <a href="logout.php" class="text-light fs-6" ><img src="picture/icon_people.png" width="30px" style="position: relative;right:10px;" alt="icon">Logout
                    </a>
                </form>
            </ul>
        </div>
    </nav>

    <div class="card" style="opacity: 0.9;width:100%">
                <div class="card-body">

                <?php
                    include "connect_server.php";
                    $search = $_POST['txtSearch'];
                    $query = "SELECT  *  FROM  eduinfo  WHERE id_student like  '%$search%' or prefix like '%$search%'  or firstname like '%$search%' 
                    or surename like ' %$search%' or location_stu like '%$search%'
                    or faculty like '%$search%' or course like '%$search%' or branche like '%$search%' ";
                    $query_run = mysqli_query($conn, $query);
                ?>
                
                    <table class="table table-hover text-center table-sm" style="position:relative;bottom:20px;">
                        <thead>
                            <tr style="white-space: nowrap;overflow: hidden;box-sizing: border-box;text-overflow: ellipsis;">
                            <th scope="col">รหัสนักศึกษา</th>
                            <th scope="col">คำนำหน้า</th>
                            <th scope="col">ชื่อ</th>
                            <th scope="col">สกุล</th>
                            <th scope="col">สถานที่จัดการ<br>เรียนการสอน</th>
                            <th scope="col">คณะ</th>
                            <th scope="col">หลักสูตร</th>
                            <th scope="col">สาขา</th>
                            <th scope="col">วันที่เข้าศึกษา</th>
                            <th scope="col">วันที่สำเร็จ<br>การศึกษา</th>
                            <th scope="col">เลขที่คำขอ<br>คุรุสภา</th>
                            <th scope="col">รหัสรับรอง<br>คุรุสภา</th>
                            <th scope="col">เลขที่ส่งข้อมูลผู้สำเร็จการศึกษา<br>(11 หลัก)</th>
                            <th><a href="add_student.php"><button type="submit" class="btn btn-primary mb-1" data-bs-toggle="modal" data-bs-target="#studentaddModal" >add</button></a></th>
                            </tr>
                        </thead>
                <?php
                     if($query_run)
                    {
                         foreach($query_run as $row)
                        {
                ?>
                   
                        <tbody class="text-center">
                            <tr>
                                <td><?php echo $row ['id_student']; ?></td>
                                <td><?php echo $row ['prefix']; ?></td>
                                <td><?php echo $row ['firstname']; ?></td>
                                <td><?php echo $row ['surename']; ?></td>
                                <td><?php echo $row ['location_stu']; ?></td>
                                <td><?php echo $row ['faculty']; ?></td>
                                <td><?php echo $row ['course']; ?></td>
                                <td><?php echo $row ['branche']; ?></td>
                                <td><?php echo $row ['date_in'];?></td>
                                <td><?php echo $row ['date_out']; ?></td>
                                <td><?php  echo $row ['request_no']; ?></td>
                                <td><?php echo $row ['confirm_no']; ?></td>
                                <td><?php echo $row ['id_licence']; ?></td>
                                <?php $pID=$row ['id_student']; ?>
                                <?php $pus=$row ['id']; ?>
                                <td style="width:50px;"><a href="edit_student.php?id=<?php print $pID; ?>"><button type="submit" class="btn btn-sm btn-success  mt-3" data-bs-toggle="modal" data-bs-target="#studentaddModal" >-Edit</button></a>
                                </td>
                                <td>
                                <input style="position:relative;top:10px;right:5px;"  class="btn btn-danger" type="button" onClick="deleteme(<?php echo $row['id']; ?>)" name="Delete" value="Delete">

                                
                                </form>
                                </div>
                            </td>
                            </tr>
                        </tbody>
                <?php
                        }
                    }
                    else
                    {
                        echo "No Record Found";
                    }
                ?>
                    </table>
                  </div>
                </div>
            </div>
        </div>
    </div>
    <script language="javascript">
		function deleteme(delid)
		{
			if(confirm("Do you want Delete!")){
				window.location.href='del_student.php?del_id=' +delid+'';
				return true;
			}
		}		
		</script>
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html> 