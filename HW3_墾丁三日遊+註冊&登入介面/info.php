<html>
<head>
    <title>註冊資訊</title>
</head>

<body>
<h1><center>註冊資訊</center></h1>
<form action="login.php" method="post" style="text-align:center">    <!--把資料傳送給login.php-->

<?php
$uaccount=$_POST["uaccount"];
$upassword=$_POST["upassword"];
$uemail=$_POST["uemail"];
$utel=$_POST["utel"]; 

echo "<b>您的帳號: </b>".$uaccount."<p>";
echo "<b>您的密碼: </b>".$upassword."<p>";
echo "<b>您的Eamil: </b>".$uemail."<p>";
echo "<b>您的電話號碼: </b>".$utel."<p>";
?>

<input type="submit" value="登入去">
</form>

</body>
</html>