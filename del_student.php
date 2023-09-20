<?php
include "connect_server.php";
$user = $_GET['id'] ;
$sql = "DELETE FROM eduinfo WHERE eduinfo.id ='".$_GET['del_id']."'";
$query = mysqli_query($conn, $sql) or die($sql);
    print "<script>alert('Delete Complete')</script>" ;
    print "<script>window.location='show_admin.php';</script>";
?>