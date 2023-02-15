<?php

$default_commission = '25%'; // if tution fee is avobe 20,000
$default_commission = '20%'; // if tution fee is avobe 10,000 & below 20,000
$default_commission = '15%'; // if tution fee is avobe 7,000 & below 10,000
$default_commission = 'invalid'; // if tution fee is below 7,000

$commission = 10000;


$final_commission = ($commission >= 20000) ? '25%' : ( ($commission >= 10000 && $commission <= 20000) ? '20%' : (($commission >= 7000 && $commission <= 10000) ? '15%' : 'invalid') );

echo $final_commission;

$a = "hi";
$b = ''.$a.'';
echo $b;
echo "<br>";

for ($i = 0, $j = 10; $i < 10; $i++, $j--){
    echo $i . $j . "<br>";
}