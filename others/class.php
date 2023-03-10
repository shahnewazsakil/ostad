<?php

interface a{
    function test();
}

class b implements a{
    function test(){
        echo "hi";
    }
}

$na = new b();
$na->test();

