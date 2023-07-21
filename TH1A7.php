<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

$result = array_filter($array, function ($value) {
    return ($value >= 100 && $value <= 200 && $value % 5 === 0);
});

foreach ($result as $number) {
    echo $number . " ";
}
?>