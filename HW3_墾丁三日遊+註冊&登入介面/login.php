<html>
<head>
    <title>登入</title>
    <style>
        input{padding:5px 15px; border:2px black solid; cursor:pointer;border-radius:5px;}
        input[type="submit"]{padding:5px 15px; background:#ccc; border:0 none; cursor:pointer;border-radius:5px;}
    </style>
</head>
<body>
    <h1><center>登入</center></h1>
    <form action="check.php" method="post" style="text-align:center">
    <p><b>請輸入帳號:</b> <input type="text" name="account" required></p>
    <p><b>請輸入密碼:</b> <input type="password  " name="password" required></p>
    <input type="submit" value="Login">

    </form>
</body>
</html>