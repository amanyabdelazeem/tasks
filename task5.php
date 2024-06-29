
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//Q1
$result=0;
for($i=0;$i<=30;$i++){
    $result=$result+$i;

}

?>
<h2>
    <?php
    echo"the result is $result"."<br>";   //Q1 result is 465
    ?>
</h2>

    <?php
    $result2 ="";
    function rectarea($width,$height){
$result2 = $width * $height;

return $result2;
    }
$result3 = rectarea(5,10);
   
    ?>
    <h2>
       <?php
        echo " the rectangular area :$result3";
        ?>
    </h2>



</body>
</html>