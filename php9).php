<?php

$str = '1010101';
$key = '1111';
$crypto = '';

$str = str_pad($str, length: 8, pad_string:0, pad_type: STR_PAD_LEFT);
$key = str_pad($key, length: 8, pad_string:0,pad_type: STR_PAD_LEFT);

for($i = 7; $i>=0; $i--){
    if ($str[$i] xor $key[$i]) {
        $crypto .= '1';
    } else {
      $crypto .= '0';
    }
}
var_dump($str);
var_dump($key);
var_dump($crypto);
