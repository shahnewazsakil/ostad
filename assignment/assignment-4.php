<?php
// problem 1
$array = ["This is", "test", "Find PHP", "long string", "I am love"];

function sortArray($a,$b){
    return strlen($b) - strlen($a);
}

usort($array,'sortArray');

echo "<pre>";
print_r($array);
echo "</pre>";


// problem 2

$str = "I love Bangladesh";
$str2 = strrev($str);

echo $str . $str2;

echo "<br>";


// problem 3
function removeEle($n){
    array_shift($n);
    array_pop($n);

    return $n;
}

$arr = ["red", "green", "blue", "white", "violet"];

echo "<pre>";
print_r(removeEle($arr));
echo "</pre>";


// problem 4
function checkString($str){
    $arr = str_split(strtolower($str));
    
    $text = str_split(strtolower("ABCDEFGHIKLMNOPQRSTVXYZ "));
    $count = 0;
    for($i= 0; $i<strlen($str); $i++){
        if(in_array($arr[$i], $text) == false){
            $count++;
        }else{
            $count = 0;
        }
    }

    if($count == 0){
        echo "valid string";
    }else{
        echo "invalid string";
    }
}

echo checkString("I love Bangladesh");

echo "<br>";

// problem 5
function secondLargest($n){
    rsort($n);

    return $n[1];
}

$arr = [1,50,20,15,10,2];

echo secondLargest($arr);

