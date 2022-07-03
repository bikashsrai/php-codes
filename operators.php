<?php
// Arithmetic operators
$num1=10;
$num2=2;
define("num",30.5);
$num3=$num1+$num2;
$num4=$num3-$num2;
echo $num3."<br>";
echo $num4."<br>";
$num5=$num1%$num2;
echo $num5."<br>";
$num1--;
echo $num1;


//Assignment operator
$num1+=$num2;
echo $num1;
echo"<br>";

//Logical operators
if(num>=18&&num<=100){

    echo"You can vote";

}
else{
    echo"You can't ";
}