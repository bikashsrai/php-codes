<?php
// while loop
$num=1;
echo"<ul>";
while($num<=9){
    echo"<li>The given number is". $num."</li>";
    echo"<br>";
    $num++;
    
}
echo"</ul>";

// for loop
for($num1=1;$num1<=20;$num1++){
    echo"<h2> The number is".$num1."</h2><br>";
    
}

// Nested loop

for($a=1;$a<=100;$a=$a+10){
    for($b=$a;$b<$a+10;$b++){
        echo $b."";
    }
    echo"<br>";
}