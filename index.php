<?php

$file = "./file/file.txt";

$fp = fopen($file, 'r');

// $line = fgets($fp);

// var_dump($fp);

// while($line = fgets($fp)){
//     echo $line;
// }

// rewind($fp); // set pointer to first line
fseek($fp, -1, SEEK_END); // set point to last

echo fgets($fp);

// echo $fp;

// while($line = fgets($fp)){
//     echo $line;
// }

// echo end($fp);

$data = file_get_contents($file);

// echo $data;

// read = 4
// write = 2
// execute = 


// Read and write for owner, nothing for everybody else
chmod("/somedir/somefile", 0600);

// Read and write for owner, read for everybody else
chmod("/somedir/somefile", 0644);

// Everything for owner, read and execute for others
chmod("/somedir/somefile", 0755);

// Everything for owner, read and execute for owner's group
chmod("/somedir/somefile", 0750);