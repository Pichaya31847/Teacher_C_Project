<!--register.php-->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/style_register.css">
<script type="text/javascript">
    function required(x) 
    {
        if (x.email.value.length == 0)
        { 
            alert("กรุณากรอกข้อมูลให้ครบถ้วน");  	
            return false; 
        }  	

        if (x.username.value.length == 0)
        { 
            alert("กรุณากรอกข้อมูลให้ครบถ้วน");  	
            return false; 
        }  
        if (x.password.value.length == 0)
        { 
            alert("กรุณากรอกข้อมูลให้ครบถ้วน");  	
            return false; 
        } 
        if (x.password.value != x.cpassword.value)
        { 
            alert("กรุณาใส่รหัสให้เหมือนกัน");  	
            return false; 
        }  
        return true; 
    } 
</script>
</head>
<body>
    <div class="blurred-box">
        <div class="user-login-box">
            <form method="POST" name="frm" action="register_on.php" onsubmit="return required(frm)">
                <div class="word1">Email / กรุณาใส่อีเมลมหาลัยเท่านั้น</div>
                <input type="email" class="user-username" placeholder="u000000000@mail.dusit.ac.th" name="email">
                <div class="word2">Username</div>
                <input type="text" class="user-username" placeholder="Name_Sur" name="username">
                <div class="word3">Password</div>
                <input type="text" class="user-username" placeholder="Password" name="password">
                <div class="word4">Confirm Password</div>
                <input type="text" class="user-password" placeholder="Confirm Password" name="cpassword">
                <br><input type="submit" class="button" value="Register"> 
            </form>
            <h2><a href="login.php" ><div class="word5">Have an Accout : Login</div></a></h2>
        </div>
    </div>
</body>
</html>