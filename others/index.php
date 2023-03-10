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


if(isset($_FILES['photo']) && !empty($_FILES['photo']['name'])){
    
    $photo_name = $_FILES['photo']['name'];
    $photo_tmp_name = $_FILES['photo']['tmp_name'];
    $photo_ext = $_FILES['photo']['type'];
    $photo_size = $_FILES['photo']['size'];

    $allow_ext = array('png', 'jpg');

    $photo_ext_name = explode('.' , $photo_name);

    $photo_ext_final = end($photo_ext_name);

    if(in_array($photo_ext_final, $allow_ext) === false){
        echo "File extension is not allowed";
        return false;
    }

    if($photo_size > 2097152){
        echo "File size must be lower than 2mb";
        return false;
    }

    $date = date('Y-m-d_H-i-s');

    $photo_final_name = $date . "-" . basename($photo_name);

    if(move_uploaded_file($photo_tmp_name, "{$photo_final_name}")){
        echo "file uploaded";
    }else{
        echo "file upload failed";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="photo">
        <button type="submit">upload file</button>
    </form>
</body>
</html>
