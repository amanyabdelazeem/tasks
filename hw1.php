<?php

$server = "localhost";
$username = "root";
$pw="";
$dbname="school";
try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname",
   $username,
   $pw);

 $conn->setAttribute(
 PDO::ATTR_ERRMODE,
 PDO::ERRMODE_EXCEPTION
 );
 echo "connected succefully";}
catch (PDOException $e){
echo"connection failed:" .$e->getMessage();
}

$sql="UPDATE `student` SET
`email`='amany12@test.com'
WHERE Student_id=3";
$stmt=$conn->prepare($sql);
$stmt->execute();
echo "<br>"."row updated success";


?>
