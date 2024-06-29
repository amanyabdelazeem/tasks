<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action ="<?php  echo $_SERVER['PHP_SELF']?>" >
         <label for ="fname" >the name:</label><br><br>
         <input id="email" type="text" name="fname"><br><br>
         <label for ="mail" >the email:</label><br><br>
         <input id="mail" type="email" name="mail"><br><br>
         <label for ="pw" >the password:</label><br><br>
         <input id="pw" type="password" name="pw"><br><br>
         <input type="submit" value="log in"><br><br>
    </form>
</body>
</html>
<?php
$name ="";
$email="";
$password="";
if ($_SERVER["REQUEST_METHOD"]= "POST"){
    $name = $_POST["fname"];
    $email = $_POST["mail"];
    $password = $_POST["pw"];
}
echo "<h2>your name : $name</h2> ";g
echo "<h2>your emil : $email</h2> ";

echo "<h2>your password : $password</h2> ";


?>