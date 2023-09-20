
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import</title>
    <link rel="stylesheet" href="CSS/import.css">
</head>
<body>
<div class="tab">
  <a href="show_admin.php">Home</a>
  <a href="add_student.php">เพิ่มข้อมูลนักศึกษา</a>
  <a class="active">Insert</a>
  <a href="logout.php" class="right">Log Out</a>
  <a href="picture/manual/import_manual.pdf" class="right">คู่มือการใช้งาน</a>
  <a href="picture/manual/example.xlsx" class="right">ตัวอย่างไฟล์</a>
</div>
<div class="blurred-box">
    <div class="import_box">
        <form enctype="multipart/form-data" method="POST" action="import_on.php">
            <h1><div class="word1"> Import</div></h1>
            <input type="file" name="file" id="file" class="box" size="150">
            <div class="word2">Only Excel/.CSV File Import.</div>
            <button type="submit" name="submit" value="submit">Upload</button>
        </form>
    </div>
</div>
</body>