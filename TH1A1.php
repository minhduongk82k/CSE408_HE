<?php
function calculateOperations($arrs) {
    $sum = array_sum($arrs);
    $product = array_product($arrs);
    $diff = $arrs[0] * 2 - array_sum($arrs);
    $quotient = $arrs[0];
    foreach ($arrs as $value) {
        if ($value !== 0) {
            $quotient /= $value;
        } else {
            echo "Cannot be divided by 0";
            return;
        }
    }

    echo "Sum = " . implode(' + ', $arrs) . " = " . $sum . "<br>";
    echo "Product = " . implode(' * ', $arrs) . " = " . $product . "<br>";
    echo "Diff = " . implode(' - ', $arrs) . " = " . $diff . "<br>";
    echo "Quotient = " . implode(' / ', $arrs) . " = " . $quotient . "<br>";
}

$arrs = [2, 5, 6, 9, 2, 5, 6, 12, 5];
calculateOperations($arrs);
?>