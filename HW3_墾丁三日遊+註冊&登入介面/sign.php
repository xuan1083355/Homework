<html>
    <head>
        <title>註冊</title>
        <style>
            input{padding:5px 15px; border:2px black solid; cursor:pointer;border-radius:5px;}
            input[type="submit"]{padding:5px 15px; background:#ccc; border:0 none; cursor:pointer;border-radius:5px;}
        </style>
</head>
    <body>
        <a style="text-align:center"><h1>註冊</h1></a>
        
    <form action="info.php" method="post" style="text-align:center">
        <p><b>帳號: </b><input type="text" name="uaccount" required></p>
        <p><b>密碼: </b><input type="password" name="upassword" required></p>
        <p><b>Email: </b><input type="email" name="uemail" required></p>
        <p><b>Tel: </b><input type="tel" name="utel" required></p>
        <input type="submit">
    </form>

</body>
</html>