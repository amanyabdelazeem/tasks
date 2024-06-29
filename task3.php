<?php
//1.	Write a statement to print a welcome message according to the day.
$day="saturday";
echo "wellcome $day" ."<br>" ; //1.	"hello saturday".
//2.	What will be the output of the code below and why?
$x = 5;
echo $x;           //5
echo "<br />";
echo $x+++$x++;   //11
echo "<br />";
echo $x;          //7
echo "<br />";
echo $x---$x--;  //1
echo "<br />";
echo $x ."<br>";         //5
//3.	What will be the values of $a and $b after the code below is executed? Explain your answer.
$a = '1';
$b = &$a;
$b = "2$b";
echo "$a"."<br>";  //21

