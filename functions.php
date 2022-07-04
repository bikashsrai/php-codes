<?php
function hello(){
    echo"Hello every one";
    
}
hello();
echo"<br>";
//functions with parameters
function task($taskname){
    echo"Complete this task".$taskname."<br>";

}
task("collecting projects ");
task("collecting samples ");

function sum($a,$b){
    echo $a+$b."<br>";
    }
    $one=12;
    $two=2.4;
    sum($one,$two);


    //Functions with returns value
    function info($fname="First",$lname="Last"){
        $xy="$fname $lname";
        return $xy;
;    }
$name=info("Bikash","Rai");
echo"Hello ".$name;