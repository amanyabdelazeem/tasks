<?php
session_start();
$first_name="";
$email= "";
$password ="";
if ($SERVER["REQUEST_METHOD"] ="POST"){
    $first_name = $_POST["fname"];
    $email = $_POST["em"];
    $password = $_POST["pw"];

}
$x= 10;
$y=20;
function sum(){
    $GLOBALS["z"] = $GLOBALS["x"] + $GLOBALS["y"];
}
sum();
echo $z."<br>";
echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["HTTP_HOST"]."<br>";
echo $_SERVER["HTTP_USER_AGENT"]."<br>";
echo $_SERVER["SCRIPT_NAME"]."<br>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action ="<?php  echo $_SERVER['PHP_SELF']?>">
        <label for="fname">first name:</label>
        <input type="text" id ="fname" name="fname"><br><br>
        <label for="email">e_mail:</label>
        <input type="email" id ="em" name="em"><br><br>
        <label for="pw">password:</label>
        <input type="password" id ="pw" name="pw"><br><br>
        <input  type ="submit" value="sign up">
</form>
</body>
</html>
<?php

echo "<h2>wellcome $first_name </h2>";
echo "<h2>your email : $email </h2>";

echo "wellcome".$_SESSION["themail"];
?>