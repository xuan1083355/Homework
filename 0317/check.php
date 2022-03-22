<?php 
    $account=$_POST["account"];
    $password=$_POST["password"];
       
    if( $account=='a' && $password=='aa'){
      header("location: KentingTripHw.php");
    }
    else{
      header("location: fail.php");
    }

?>