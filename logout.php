<?php
//session_start();
//unset( $_SESSION["themail"]);
//unset($_SESSION["thepassword"]);
//session_destroy();
$expdate = time()-(86400*30);
setcookie("userdata",$_COOKIE["userdata"],$expdate,"/");


echo "you are logged out";
header("refresh:5;URL=./session8.php");
