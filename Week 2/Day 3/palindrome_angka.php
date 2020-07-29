<?php

function palindrome_angka($angka)
{

    if ($angka >= 0 && $angka < 9) {
        return $angka+1;
    } else {
        for($i=$angka+1; $i<=1000000; $i++) {
            if ($i == (int)strrev(implode(str_split(strval($i), 1)))) {
                return $i;
            } 
        }
    }
}

// // TEST CASES
echo palindrome_angka(8) ." "; // 9 
echo palindrome_angka(10) ." "; // 11
echo palindrome_angka(117) ." "; // 121
echo palindrome_angka(175) ." "; // 181
echo palindrome_angka(1000) ." "; // 1001