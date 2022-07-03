<?php
$a=4;
$b=5;
if($a==$b){
    echo "Both are equal";
}
else{
    echo"Not equal ";
}


// Another way of writing if 
if($a===$b):
    echo "Both are equal in datatype and number";
elseif($a!=$b):
    echo"Not equal ";
endif;
echo"'cannot verify";  


//elseif statement
$x=78;
if($x>=90&&$x<=100){
    echo"A+";
}elseif($x>=80&&$x<=89){
    echo"A";
}
elseif($x>=70&&$x<=79){
    echo"b+";
}else{
    echo"Pass only";
}