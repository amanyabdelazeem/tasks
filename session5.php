<?php
$number = array(3,5,6,8,9);
echo"<h2>array of numbers:</h2>";
foreach($number as $item1){
    echo $item1."<br>";
}
$names = array("amany" ,"salma" ,"amr");
echo"<h2>array of names:</h2>";
foreach($names as $item2){
    echo $item2."<br>";
}
echo "<h2>associated array</h2>";
$age = array("amany"=>30,"amr"=>20,"ahmed"=>10);
$numbers = array(
    array(1,2,3),
    array(5,6,7),
    array(7,9,10),
    array(2,5,8)
);
for($i=0;$i<count($numbers);$i++){
 for($x=0;$x<count($numbers[$i]);$x++){
    echo $numbers[$i][$x] ."<br>";
 }   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>age</th>
        
      </tr>
    </thead>
    <tbody>
      <?php

foreach ($age as $key=>$value){
echo"<tr><td>$key</td><td>$val</td></tr>"}
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
