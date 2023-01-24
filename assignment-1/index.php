<?php

$num = 5;
// Using if statement
if ($num > 0) {
    $result = 'positive';
}elseif ($num < 0) {
    $result = 'negative';
}elseif( $num < -10) {
    $result = 'value is below -10';
}
else {
    $result = 'its zero';
}

echo $result;

echo '<br>';
$result_ternary = ($num > 0) ? 'positive' : (($num < 0) ? 'negative' :  'its zero');

echo $result_ternary;