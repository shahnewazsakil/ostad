<?php

// use serialize, unserialize,  json_encode , json_decode function print the results
// $emp = [
//     'john' => [
//         'age' => 20,
//         'salary' => 10000,
//         'address' => 'Dhaka',
//         'blod_group' => 'o+'
//     ],
//     'harry' => [
//         'age' => 30,
//         'salary' => 15000,
//         'address' => 'London',
//         'blod_group' => 'B-'
//     ],
//     'mark' => [
//         'age' => 25,
//         'salary' => 14000,
//         'address' => 'America',
//         'blod_group' => 'o-'
//     ],
//     'chirs' => [
//         'age' => 23,
//         'salary' => 19000,
//         'address' => 'India',
//         'blod_group' => 'A+'
//     ],
// ];

// // $new = serialize($emp);

// // print_r($new);
// // // unserialize($new);

// // $json = json_encode($emp);

// // $jsd = json_decode($json);

// // remove address key and value from the array
// $emp = [
//     'john' => [
//         'age' => 20,
//         'salary' => 10000,
//         'address' => 'Dhaka',
//         'blod_group' => 'o+'
//     ]
// ];

// // extract green blue white value from the array.
// $arr = ["red", "green", "blue", "white", "violet"];


// // extract green blue white value from the array and insert $newValue array 
// $newValue = ["Pink", "Orange", "Yellow"];
// $arr = ["red", "green", "blue", "white", "violet"];




// // insert $newArr array values to existing array
// $newArr = ["Pink", "Orange", "Yellow"];
// $oldArr = ["red", "green", "blue", "white", "violet"];


// // find the extension of a photo.
// // output png
// $str = "myphoto.old.new.png";

// // find the position of PHP. Case-sensitive
// $str = "Hi, My name is Rahim. I love PHP. I love php also";


// function vowel($str){
//     $vowel = ['a', 'e', 'i', 'o', 'u'];
//     $count = 0;
//     $string = strtolower($str);

//     for($i=0; $i<strlen($string); $i++){
//         if(in_array(substr($string, $i, 1), $vowel)){
//             $count ++;
//         }
//     }
//     return $count;
// }

// echo vowel("Hi, i am a developer");