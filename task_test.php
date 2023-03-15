<?php

$test = "b b  b b  b b";

$test = str_split($test);
$previous_a = false;
$array = [];
$word = '';
foreach ($test as $value) {
    if ($value == " " && $previous_a == true) {
        array_push($array, " ");
        $previous_a = false;
    } elseif ($value == " ") {
        array_push($array, $word);
        $previous_a = true;
    } elseif ($previous_a == false) {
        $word .= $value;
    }
}
foreach ($array as $value) {
    echo $value;
}
