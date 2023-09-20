<!--login.php-->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Please Login</title>
    <link rel="stylesheet" href="CSS/style_login.css">
</head>
<body>
    <div class="blurred-box">
        <div class="user-login-box">
            <h1><div class="word1">ระบบตรวจสอบเลขที่ส่ง<br>ข้อมูล 11หลักกับทาง<br>สำนักงานเลขาธิการคุรุสภา</div></h1>
            <div class="word1">กรุณาล็อกอิน</div>
            <form method="POST" action="logon.php">
                <input type="text" class="user-username" placeholder="u6xxxxxxxxxxxx" name="user">
                <input type="password" class="user-password" placeholder="121225xx วันเดือนปีเกิด" name="pass">
                <br><input type="submit" class="button" value="Login"> 
            </form>
            <h2><a href="register.php" ><div class="word2">Create an Account</div></a></h2>
        </div>
    </div>
</body>
</html>