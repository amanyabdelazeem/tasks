<?php
$msg="";
if(isset($_POST["login"])){
  $email=$_POST["email"];
  $password=$_POST["pwd"];
  if(!empty($email)&&!empty($password) ){
$msg="wellcome" .$email;
  }
}
echo $msg;
?>