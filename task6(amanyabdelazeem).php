<?php
//Q1
$studentfood = array("Joe"=>"Smarties","Ahmed"=>"Pringles","Cassie"=>"Marmite Crisps","Ben"=>"Mr kiplings Cake");
//Q2

$num =5;
function checkNumber($num) {
    // Check if the input is numeric
    if (!is_numeric($num)) {
        return "The number is not a numeric value";
    }

    // Check if the number is positive, negative, or zero
    elseif ($num > 0) {
        return  "The number is positive" ;
    } elseif ($num < 0) {
        return "The number is negative";
    } else
     {
        return "The number is zero";
    }}
    //replce for with foreach in the previos session
   $result = checkNumber($num)."<br>";
   echo  $result ;
   $numbers = array(
    array(1,2,3),
    array(5,6,7),
    array(7,9,10),
    array(2,5,8)
);
foreach($numbers as $number){
 foreach($number as $no){
    echo $no ."<br>";
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
    
    </thead>
    <tbody>
      <?php

echo "<tr>";


foreach ($studentfood as $key => $val) {
    echo "<td>$key</td>";
}

echo "</tr>";
echo "<tr>";


foreach ($studentfood as $key => $val) {
    echo "<td>$val</td>";
}

echo "</tr>";
      
  
 
      ?>
    </tbody>
  </table>
</div>

</body>
</html>
