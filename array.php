<?php
//Indexed Array
$a=array("bikash",12,3.5,"bike");
echo $a[2]."<br>";
for($i=0;$i<4;$i++){
    echo $a[$i]."<br>";
}

//Associative Array
$x=[
    "color"=>"blue",
    "country"=>"Nepal",
    "year"=>2022];
    echo $x["country"];

    //Multidimensional array
    $emp=[
        [1,"Ram","Manager",50000],
        [2,"Sita","HR",6000],
        [3,"Bishal","Programmer",2500]
    ];
    echo$emp[1][1];

    echo"<br>";
    for($row=0;$row<3;$row++){
        for($col=0;$col<3;$col++){
            echo $emp[$row][$col]."";
        }
        echo"<br>";
    }
    