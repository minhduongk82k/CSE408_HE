<?php
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];


$maxResult = array_reduce($array, function ($carry, $item) {
    $length = strlen($item);
    return ($length > strlen($carry['string'])) ? ['string' => $item, 'length' => $length] : $carry;
}, ['string' => '', 'length' => 0]);

$minResult = array_reduce($array, function ($carry, $item) {
    $length = strlen($item);
    return ($length < strlen($carry['string'])) ? ['string' => $item, 'length' => $length] : $carry;
}, ['string' => '', 'length' => PHP_INT_MAX]);


echo "Chuỗi lớn nhất là " . $maxResult['string'] . ", độ dài = " . $maxResult['length'] ;
echo "Chuỗi nhỏ nhất là " . $minResult['string'] . ", độ dài = " . $minResult['length'] ;
?>