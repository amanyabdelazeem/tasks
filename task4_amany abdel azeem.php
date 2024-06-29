<?php
$grade = 90;
$result = "";
switch($grade){
    case($grade>0 && $grade<50):
        $result = "failed";
        break;
    case($grade>=50 && $grade<65):
        $result = "Good";
        break;
    case($grade>=65 && $grade<80):
        $result = "Very good";
        break; 
    default:  $result = "exellent";        
}
echo $result;
?>
