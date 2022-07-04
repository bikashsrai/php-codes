<?php 
function task(&$a){
    $a.="count the number";
}
$str="Hello please ";
task($str);
echo $str;