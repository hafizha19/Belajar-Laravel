<?php
function tentukan_deret_geometri($arr)
{
    $sum = array_sum($arr);
    $a = $arr[0];
    $r = $arr[1] / $arr[0];
    // $sn = 0;

    if ($r > 1) {
        $sn = $a * (pow($r, count($arr)) - 1) / ($r - 1);
    } else {
        $sn = $a * (1 - pow($r, count($arr))) / (1 - $r);
    }

    for ($i = 1; $i < count($arr); $i++) {
        if ($sum == $sn && ($arr[$i]/$arr[$i-1]==$r)) {
            $result = "TRUE";
        } else {
            $result = "FALSE";
        }
    }
    return $result;
}
//TEST CASES
echo tentukan_deret_geometri([1, 3, 9, 27, 81]); // true
echo tentukan_deret_geometri([2, 4, 8, 16, 32]); // true
echo tentukan_deret_geometri([2, 4, 6, 8]); // false
echo tentukan_deret_geometri([2, 6, 18, 54]); // true
echo tentukan_deret_geometri([1, 2, 3, 4, 7, 9]); //false
