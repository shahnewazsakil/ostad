<?php

function checkNumber($n){
    if($n % 2 == 0){
        return "Even Number";
    }else{
        return "Odd Number";
    }
}

echo checkNumber(5);

echo "<br>";

$sum = 0;
for($i=0; $i < 101; $i++){
    $sum += $i;
}

echo $sum;