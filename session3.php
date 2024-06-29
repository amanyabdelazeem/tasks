<?php
$thecurrent_date= date("Y-m-d h:i:sa");

$different_date = mktime(10,34,50,10,10,2015);

$date2= strtotime("+3moth");
$grade = 95;
$result="";
if($grade>0 && $grade<50){
    $result="failed";

}
elseif($grade>=50 && $grade<65){
    $result="good";
}
elseif($grade>=65 && $grade<90){
    $result="very good";
}
else{
    $result= "exellent";
}
echo $result;
echo "<br>";
$color = "red";
$res="";
switch($color){ 
    case"blue":
    $res= "you color is blue";
    break ;

case"red":
    $res="your color is red ";
     break; 

default: $res="your color is not defined "; 



}
echo $res;
$grade1 = 70;
$myresult = "";
switch($grade1){
    case($grade>0 && $grade<50):$myresult="failed";
break;
default:$myresult="pass";

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>my php code</h1>
    <p style="color:red">
    <?php
echo "the current date :" .$thecurrent_date ."<br>";
    ?>
</p>

<p style="color:blue">
    <?php
echo "the new date:" .date("Y-m-d h:i:sa",$different_date) ;
    ?>
</p>

<p style="color:brown">
    <?php
echo "the next time :".date("Y-m-d h:i:sa",$date2);
?>
</p>
</body>
</html>