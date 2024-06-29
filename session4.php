<?php
function greeting($user_name){
    echo "wellcome $user_name";
}

function sum($a,$b){
    $result1 = $a+$b;
    return $result1;
}
$result2 = sum(10,20);
echo $result2;
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
  <h2>while loop</h2>
  <div class="alert alert-success">
  <?php
$x = 0;
while($x <= 10){
    echo $x ."<br>" ;
    $x++;

}?>
  
  </div>
  <h2>while do loop</h2>
  <div class="alert alert-success">
    <?php
    $y=1;
    do{
        echo $y."<br>";
 $y++;
    }while($y<= 10);
    ?>
  </div>
  <div class="alert alert-success">
    <?php
    for($x=0;$x<=10;$x++){
        if($x%2!=0){
            echo $x."<br>";
        }
    }
    ?>
   

  </div>
</div>
<h2>
        <?php
        greeting("amany");
        ?>
    </h2>



</body>
</html>
