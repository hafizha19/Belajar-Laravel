<?php
function pasangan_terbesar($angka)
{
    $arrAngka = str_split($angka, 1);
    $temp = [];
    $result = "";
    for ($i = 0; $i < count($arrAngka) - 1; $i++) {
        if ($i == 0) {
            array_push($temp, (int)implode(array($arrAngka[$i], $arrAngka[$i + 1])));

        } else if ($temp[0] < (int)implode(array($arrAngka[$i], $arrAngka[$i + 1]))) {
            // array_replace($temp, array((int)implode(array($arrAngka[$i], $arrAngka[$i + 1]))));
            $temp[0] = (int)implode(array($arrAngka[$i], $arrAngka[$i + 1]));
        }
    }
    return $temp[0];
}


// TEST CASES
echo pasangan_terbesar(641573)."<br>"; // 73
echo pasangan_terbesar(12783456)."<br>"; // 83
echo pasangan_terbesar(910233)."<br>"; // 91
echo pasangan_terbesar(71856421)."<br>"; // 85
echo pasangan_terbesar(79918293)."<br>"; // 99
