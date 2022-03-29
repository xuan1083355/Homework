<?php
    session_start();
    session_destroy();
    setcookie("UID",$uid,time()-17280);
    header("Location: login.php");
?>
