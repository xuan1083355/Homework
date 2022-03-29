<?php
    session_start();
    session_destroy();
    setcookie("UID",$uid,time()-360);
    header("Location: login.php");
?>